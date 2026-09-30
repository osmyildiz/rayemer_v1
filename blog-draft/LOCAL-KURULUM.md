# Haftalık blog rutinini Mac'e taşıma

Bulut ortamı `www.rayemer.com`'a çıkamadığı için rutin Mac'te çalışacak.
Mac'te bu kısıtlama yok.

## 1. Token'ı proje DIŞINA koyun (bir kere)

cmd+S proje klasörünü sunucuya yüklüyor, bu yüzden token'ı proje içine koymayın:

```bash
printf '%s' 'BURAYA_TOKEN' > ~/.rayemer-publish-token
chmod 600 ~/.rayemer-publish-token
```

## 2. Bekleyen yazıyı yayınlayın

```bash
cd ~/.../rayemer_v1
git fetch origin blog/lgs-yks-2028-soru-modeli
git checkout origin/blog/lgs-yks-2028-soru-modeli -- blog-draft/ .claude/
bash blog-draft/publish.sh blog-draft/post.json
```

Betik önce dry-run yapar. Yalnızca 200 dönerse gerçek yayına geçer (201 beklenir).
Çıktıdaki `email_notified` alanına bakın.

## 3. PhpStorm deployment'tan hariç tutun

Settings → Build, Execution, Deployment → Deployment → **Excluded Paths**:
`blog-draft/` ve `.claude/` ekleyin. Böylece cmd+S bunları hosting'e yüklemez.

## 4. Haftalık görevi Mac'te kurun

Claude Desktop'ta, proje klasörü `rayemer_v1` olacak şekilde, zamanlanmış bir görev
oluşturun. Mevcut rutin prompt'unu kullanın, yalnızca şu iki yeri değiştirin:

- **Adım 1 (bağlam):** curl satırı yerine
  `bash blog-draft/publish.sh context`
- **YAYINLAMA bölümü:** tamamını şununla değiştirin:
  > Payload'ı `blog-draft/post.json` dosyasına yaz (`dry_run` alanı EKLEME, `img` alanı
  > GÖNDERME), sonra `bash blog-draft/publish.sh blog-draft/post.json` çalıştır.
  > Betik önce dry-run yapar ve yalnızca 200 dönerse yayınlar. Çıkış kodu 0 değilse
  > yayın olmamıştır; çıktıyı raporla. 401 veya 503 görürsen tekrar deneme.
- Prompt'taki token'ı **silin**. Artık `~/.rayemer-publish-token` dosyasından okunuyor.

`.claude/settings.json` web araması, sayfa okuma ve bu betik için izin veriyor.
Böylece gözetimsiz çalışırken izin sorusunda takılmaz.

## 5. Bulut rutinini kapatın

Aynı hafta iki kez çalışmasın diye bulut rutinini devre dışı bırakın. Açık kalırsa
her hafta yine ağ engeline takılır ve boşuna bildirim gönderir.

## Öneri

Token hem rutin prompt'unda hem sohbette açık metin olarak geçti. Kuruluma geçerken
sunucuda yeni bir token üretip eskisini iptal etmeniz iyi olur.
