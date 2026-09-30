#!/usr/bin/env bash
# RAYEMER blog yayin araci.
#   bash blog-draft/publish.sh context            -> /api/blog-context ciktisi
#   bash blog-draft/publish.sh blog-draft/post.json
#       -> once dry-run; 200 donerse gercek yayin (201 beklenir)
# Token proje DISINDA tutulur (cmd+S proje klasorunu sunucuya yukluyor):
#   RAYEMER_PUBLISH_TOKEN ortam degiskeni ya da ~/.rayemer-publish-token dosyasi.
set -euo pipefail

TOKEN="${RAYEMER_PUBLISH_TOKEN:-}"
if [ -z "$TOKEN" ] && [ -f "$HOME/.rayemer-publish-token" ]; then
  TOKEN="$(tr -d '[:space:]' < "$HOME/.rayemer-publish-token")"
fi
if [ -z "$TOKEN" ]; then
  echo "HATA: token yok. RAYEMER_PUBLISH_TOKEN tanimlayin ya da ~/.rayemer-publish-token dosyasina yazin." >&2
  exit 2
fi

API="https://www.rayemer.com/api"

if [ "${1:-}" = "context" ]; then
  curl -sS -H "X-Publish-Token: $TOKEN" "$API/blog-context"
  echo
  exit 0
fi

POST="${1:?Kullanim: publish.sh context | publish.sh <post.json>}"
TMP="$(mktemp)"
trap 'rm -f "$TMP" "$TMP.out"' EXIT

# Dogrula ve dry-run govdesini hazirla
python3 - "$POST" "$TMP" <<'PY'
import json, sys
d = json.load(open(sys.argv[1], encoding="utf-8"))
for k in ("title", "slug", "meta_description", "keywords", "category_id", "content"):
    if k not in d:
        sys.exit("HATA: eksik alan: " + k)
if not isinstance(d["category_id"], int):
    sys.exit("HATA: category_id tam sayi olmali (su an: %r)" % d["category_id"])
if "\n" in d["content"]:
    sys.exit("HATA: content tek satir olmali")
if "img" in d:
    sys.exit("HATA: img alani gonderilmemeli (kapak otomatik uretiliyor)")
d["dry_run"] = True
json.dump(d, open(sys.argv[2], "w", encoding="utf-8"), ensure_ascii=False)
PY

send() {
  curl -sS -o "$TMP.out" -w '%{http_code}' -X POST \
    -H "X-Publish-Token: $TOKEN" -H 'Content-Type: application/json' \
    --data-binary @"$1" "$API/blog-publish"
}

code="$(send "$TMP")"
echo "dry-run: HTTP $code"; cat "$TMP.out"; echo
if [ "$code" != "200" ]; then
  echo "Dry-run basarisiz; gercek yayin YAPILMADI." >&2
  exit 1
fi

code="$(send "$POST")"
echo "yayin: HTTP $code"; cat "$TMP.out"; echo
[ "$code" = "201" ] || { echo "Yayin basarisiz (201 bekleniyordu)." >&2; exit 1; }
