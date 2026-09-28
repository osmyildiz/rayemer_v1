# Haftalık blog yazısı — yayına hazır, yayınlanmadı

Son güncelleme: 2026-09-28

## Durum

Yazı **tamamen hazır**: `category_id` ve iç linkler artık canlı `/api/blog-context`
çıktısından doğrulandı. Eksik hiçbir alan yok.

**Yayınlanamıyor**, çünkü bu bulut oturumunun egress politikası `www.rayemer.com`
adresini engelliyor (`403 CONNECT tunnel failed`). Token sorunu değil — istek
siteye hiç ulaşmıyor. Aynı engel kaynak doğrulamayı da kapatıyor
(`WebFetch` → `EGRESS_BLOCKED`).

Açmak için: oturumun başlık çubuğundaki **cloud environment** menüsü → **Edit** →
**Network access**; `www.rayemer.com`'u izinli alan adlarına ekleyin ya da daha
geniş bir seviye seçin. Seviyeler:
https://code.claude.com/docs/en/claude-code-on-the-web

## Bağlamdan doğrulananlar (2026-09-28)

- **Yayında değil.** `existing_posts` içinde `lgs-ve-yks-kalkiyor-mu-2028-soru-modeli`
  slug'ı yok.
- **Konu tekrarı yok.** Mevcut 20 yazının hiçbiri sınav sistemi/2028 soru modeli
  konusunu işlemiyor.
- **category_id = 7** (Ebeveyn Rehberi). Yazı hem LGS hem YKS'yi kapsıyor ve
  doğrudan veliye sesleniyor; tek bir sınav kategorisi yerine bu doğru.
- **İç linkler resmî listeden** (5 adet, hepsi `internal_links` içinde):
  `/maltepe-dershane`, `/kucukyali-lgs-hazirlik-kursu`,
  `/bostanci-yks-hazirlik-kursu`, `/ozel-ders`, `/iletisim`.
  (Önceki taslakta kullanılan `/hakkimizda` listede olmadığı için çıkarıldı.)

## Yayın takvimi boşluğu

Yayındaki en yeni yazı **2026-08-30** tarihli. Bugün 2026-09-28 → araya yaklaşık
**4 haftalık yayın yok**. Haftalık rutin muhtemelen 30 Ağustos'ta bir yazı üretip
sonrasında bu ağ engeli yüzünden hiç yayın yapamamış. Geriye dönük yazılar bu
oturumda üretilmedi; engel kalktıktan sonra istenirse ayrıca planlanabilir.

## Yayın komutu

```bash
cd blog-draft
TOKEN=<X-Publish-Token>

# 1) dry run — 200 bekleniyor
python3 -c "import json;d=json.load(open('post.json'));d['dry_run']=True;json.dump(d,open('dry.json','w'),ensure_ascii=False)"
curl -s -w '\n%{http_code}\n' -X POST -H "X-Publish-Token: $TOKEN" \
  -H 'Content-Type: application/json' -d @dry.json https://www.rayemer.com/api/blog-publish

# 2) 200 döndüyse gerçek yayın — 201 bekleniyor
curl -s -w '\n%{http_code}\n' -X POST -H "X-Publish-Token: $TOKEN" \
  -H 'Content-Type: application/json' -d @post.json https://www.rayemer.com/api/blog-publish
```

Yanıttaki `email_notified` alanını kontrol edin. `img` alanı bilinçli olarak
gönderilmiyor — kapak görseli başlıktan otomatik üretiliyor.
422 `content_too_short` gelirse yazı genişletilmeli; 401 veya 503 gelirse durun.

## Yazı hakkında

- **Başlık:** LGS ve YKS Kalkıyor mu? 2028'de Değişen Tek Şey Soru Modeli
- **Konu seçimi:** Eylül kayıt dönemi; velinin en yüksek kaygılı araması bu.
  Ayrıca bu pipeline'da daha önce tam bu konuda hata yapılmıştı (net cevap
  verilmemiş, Bakanlık adına uydurma niyet yazılmıştı). Bu yazı hatayı
  düzeltiyor: cevap ilk paragrafta, "hayır" olarak veriliyor.
- **Doğruluk yaklaşımı:** Yalnızca birden çok bağımsız kaynakta tutarlı biçimde
  geçen ifadeler kullanıldı. Doğrulanamayan sayı/tarih (2027 LGS sınav tarihi,
  MEBİ deneme sayıları, soru sayısı/puanlama) **bilinçli olarak yazılmadı**;
  yazıda bunların henüz açıklanmadığı belirtiliyor. Bakanlığa atfedilen ifadeler
  doğrudan alıntı olarak değil, özet olarak verildi.

### Kaynaklar (WebSearch üzerinden görüldü; sayfalar birinci elden okunamadı)
- MEB: https://www.meb.gov.tr/yks-ve-lgsde-yeni-mufredata-uyumlu-soru-modeli-2028de-hayata-gececek/haber/39265/tr
- MEB (MEBİ deneme takvimi): https://www.meb.gov.tr/mebi-2026-2027-yks-ve-lgs-deneme-takvimi-belli-oldu/haber/41943/tr
- NTV: https://www.ntv.com.tr/turkiye/bakan-tekin-yanitladi-lgs-ve-yksde-sinav-sistemi-degisecek-mi-1737347
- Karar: https://www.karar.com/guncel-haberler/sinav-sistemi-degisecek-mii-bakan-yusuf-tekinden-yks-ve-lgs-aciklamasi-2056330
- Hürriyet: https://www.hurriyet.com.tr/bilgi/galeri/yks-ve-lgs-kalkacak-mi-yks-ve-lgs-degisecek-mi-nasil-olacak-bakan-tekin-yanit-verdi-iste-liselere-gecis-sistemi-lgs-ve-43218856
- Posta: https://www.posta.com.tr/galeri/yks-ve-lgs-tamamen-kalkiyor-mu-2028de-yeni-sinav-sistemi-nasil-olacak-bakan-tekinden-aciklama-3009015

**Öneri:** yayından önce MEB sayfasını bir kez gözle okuyup Bakanlık atıflarını
teyit edin. Otomatik oturum bunu yapamadı.
