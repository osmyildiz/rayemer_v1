# Haftalık blog yazısı — YAYINLANAMADI (ağ politikası engeli)

Tarih: 2026-09-27 · Otomatik oturum

## Durum

Yazı hazır ve tüm biçim kuralları doğrulandı, **ancak yayınlanamadı**. Bu oturumun
çalıştığı bulut ortamının ağ (egress) politikası `www.rayemer.com` adresine
erişimi engelliyor. Bu bir token/yetki sorunu değil — istek siteye hiç ulaşmıyor.

Engellenen üç adım:

| Adım | Sonuç |
|---|---|
| `GET /api/blog-context` | egress proxy **403** (CONNECT tunnel failed) |
| Kaynak doğrulama (WebFetch: meb.gov.tr, hurriyet.com.tr) | `EGRESS_BLOCKED` |
| `POST /api/blog-publish` | denenmedi — aynı host engelli |

`WebSearch` çalışıyor (Anthropic tarafında koşuyor), bu yüzden gündem araştırması
yapılabildi; ama sayfaları birinci elden okumak mümkün olmadı.

## Nasıl açılır

Oturumun başlık çubuğundaki **cloud environment** menüsü → **Edit** → **Network
access**: ya daha geniş bir erişim seviyesi seçin, ya da izinli alan adlarına
`www.rayemer.com` (doğrulama için ayrıca `www.meb.gov.tr`, `www.osym.gov.tr` ve
haber siteleri) ekleyin. Seviyelerin açıklaması:
https://code.claude.com/docs/en/claude-code-on-the-web

## Yayınlamadan önce yapılması gereken 2 şey

1. **`category_id` doldurulmalı.** `post.json` içinde şu an
   `__BLOG_CONTEXT_TEN_DOLDURULACAK__` yazıyor. Doğru değer `/api/blog-context`
   çıktısındaki kategori listesinden alınmalı — tahmin edilmedi, uydurulmadı.
2. **İç linkler ve başlık tekrarı kontrol edilmeli.** `blog-context` alınamadığı
   için (a) yayındaki son yazı başlıkları görülemedi, yani bu konunun daha önce
   işlenmediği teyit edilemedi; (b) iç linkler, resmî iç link listesi yerine
   deponun `routes/web.php` dosyasındaki gerçek rotalardan seçildi:
   `/ozel-ders`, `/iletisim`, `/hakkimizda`.

Not: depodaki `master` dalı canlı siteden eski — blog modülü (`/api/blog-*`
uçları, kategoriler) depoda hiç yok, bu yüzden `category_id` yerel olarak da
çıkarılamadı.

## Yayınlama komutu (erişim açıldıktan sonra)

```bash
cd /home/user/rayemer_v1/blog-draft

# 1) category_id'yi bağlamdan al
curl -s -H "X-Publish-Token: $RAYEMER_TOKEN" \
  https://www.rayemer.com/api/blog-context

# 2) post.json içindeki __BLOG_CONTEXT_TEN_DOLDURULACAK__ değerini düzelt
#    (build_payload.py içindeki category_id satırını güncelleyip
#     python3 build_payload.py ile yeniden üretmek de olur)

# 3) ÖNCE dry run — 200 beklenir
python3 -c "import json;d=json.load(open('post.json'));d['dry_run']=True;json.dump(d,open('dry.json','w'),ensure_ascii=False)"
curl -s -w '\n%{http_code}\n' -X POST \
  -H "X-Publish-Token: $RAYEMER_TOKEN" -H 'Content-Type: application/json' \
  -d @dry.json https://www.rayemer.com/api/blog-publish

# 4) dry run 200 dönerse gerçek yayın — 201 beklenir
curl -s -w '\n%{http_code}\n' -X POST \
  -H "X-Publish-Token: $RAYEMER_TOKEN" -H 'Content-Type: application/json' \
  -d @post.json https://www.rayemer.com/api/blog-publish
```

Yanıttaki `email_notified` alanını kontrol edin. `img` alanı bilinçli olarak
gönderilmiyor — kapak görseli başlıktan otomatik üretiliyor.

## Yazı hakkında

- **Konu:** "LGS ve YKS kalkıyor mu?" — MEB'in sınavların kaldırılmadığı, 2028'den
  itibaren yalnızca soru modelinin (beceri temelli, Türkiye Yüzyılı Maarif
  Modeli'ne uyumlu) değiştiği yönündeki açıklaması.
- **Neden:** Eylül = kayıt dönemi; velinin en yüksek kaygılı araması bu. Ayrıca
  bu pipeline'da daha önce tam bu konuda hata yapılmıştı (net cevap verilmemiş,
  Bakanlık adına uydurma niyet yazılmıştı) — bu yazı hatayı düzeltiyor: cevap
  ilk paragrafta, "hayır" olarak, net veriliyor.
- **Doğruluk yaklaşımı:** Yalnızca birçok bağımsız kaynakta tutarlı biçimde
  geçen ifadeler kullanıldı. Doğrulanamayan sayı/tarih (2027 LGS sınav tarihi,
  MEBİ deneme sayıları ve tarihleri, soru sayısı/puanlama) **bilinçli olarak
  yazılmadı**; yazıda bunların açıklanmadığı belirtiliyor. Bakanlığa atfedilen
  ifadeler doğrudan alıntı olarak değil, özet olarak verildi — çünkü kaynak
  sayfalar birinci elden okunamadı.

### Doğrulama için kullanılan kaynaklar (WebSearch üzerinden; sayfalar açılamadı)
- MEB: https://www.meb.gov.tr/yks-ve-lgsde-yeni-mufredata-uyumlu-soru-modeli-2028de-hayata-gececek/haber/39265/tr
- MEB (MEBİ deneme takvimi): https://www.meb.gov.tr/mebi-2026-2027-yks-ve-lgs-deneme-takvimi-belli-oldu/haber/41943/tr
- NTV: https://www.ntv.com.tr/turkiye/bakan-tekin-yanitladi-lgs-ve-yksde-sinav-sistemi-degisecek-mi-1737347
- Karar: https://www.karar.com/guncel-haberler/sinav-sistemi-degisecek-mii-bakan-yusuf-tekinden-yks-ve-lgs-aciklamasi-2056330
- Hürriyet: https://www.hurriyet.com.tr/bilgi/galeri/yks-ve-lgs-kalkacak-mi-yks-ve-lgs-degisecek-mi-nasil-olacak-bakan-tekin-yanit-verdi-iste-liselere-gecis-sistemi-lgs-ve-43218856
- Posta: https://www.posta.com.tr/galeri/yks-ve-lgs-tamamen-kalkiyor-mu-2028de-yeni-sinav-sistemi-nasil-olacak-bakan-tekinden-aciklama-3009015

**Yayından önce öneri:** yukarıdaki MEB sayfasını bir kez gözle okuyup yazıdaki
Bakanlık atıflarını teyit edin. Otomatik oturum bunu yapamadı.
