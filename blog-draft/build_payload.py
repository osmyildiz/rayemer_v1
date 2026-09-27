# -*- coding: utf-8 -*-
import json, re

Q = chr(34)
def link(url, text):
    return "<a href=" + Q + url + Q + ">" + text + "</a>"

L_OZEL = link("https://www.rayemer.com/ozel-ders", "özel ders")
L_ILETISIM = link("https://www.rayemer.com/iletisim", "iletişim sayfamızdan")
L_HAKKIMIZDA = link("https://www.rayemer.com/hakkimizda", "daha yakından tanıyabilirsiniz")

parts = []
A = parts.append

A("<p>Eylül ayındaki kayıt görüşmelerinde en sık duyduğumuz cümle şu: &ldquo;Hocam, sınav kalkıyor diye duyduk; çocuğu boşuna mı yoruyoruz?&rdquo; Sosyal medyada dolaşan başlıklar velileri haklı olarak tedirgin ediyor. O yüzden cevabı en başa koyuyoruz: <strong>LGS ve YKS kalkıyor mu</strong> sorusunun yanıtı <strong>hayır</strong>. Millî Eğitim Bakanlığı, LGS kapsamındaki merkezî sınavın ve YKS uygulamasının kaldırılmadığını; sınav sisteminde, sınavın yapısında ve liseye ya da üniversiteye geçiş modelinde şu an için bir değişiklik gündemde olmadığını belirtti. Değişen tek şey soruların kendisi: 2028&rsquo;den itibaren sorular yeni müfredata uyumlu, beceri temelli bir modele geçiyor.</p>")

A("<h2>LGS ve YKS kalkıyor mu? Net cevap ve gerçekten değişen şey</h2>")
A("<p>Bakanlığın açıklamalarına göre sınav sistemine ilişkin bir değişiklik ne Bakanlığın ne de YÖK&rsquo;ün gündeminde bulunuyor. Yani &ldquo;merkezî sınav kaldırılıyor&rdquo;, &ldquo;LGS bitiyor&rdquo; ya da &ldquo;üniversiteye sınavsız geçilecek&rdquo; şeklindeki paylaşımlar doğru değil. Bakanlığın işaret ettiği değişim ölçme tarafında: yeni müfredatla birlikte soruların, bilgiyi geri isteyen yapıdan bilgiyi kullandıran yapıya doğru evrilmesi. Bu amaçla yeni bir soru havuzu oluşturuluyor.</p>")
A("<p>Bu ayrımı velilerle konuşurken sık sık şu benzetmeyle anlatıyoruz: sınavın adı, kaç aşamalı olduğu, puanla yerleşme mantığı aynı kalıyor; değişen şey sınav kâğıdının içindeki soruların sorulma biçimi. Çocuğunuzun hazırlık planını baştan aşağı değiştirmesi gereken bir durum yok; ama çalışma <em>biçimini</em> gözden geçirmesi gereken bir durum var.</p>")

A("<h2>2028&rsquo;den itibaren ne değişiyor, ne değişmiyor?</h2>")
A("<p>Şimdiye kadar açıklananları ikiye ayırarak okumak en sağlıklı yol:</p>")
A("<ul><li><strong>Değişiyor:</strong> Soru tipleri yeni müfredatla (Türkiye Yüzyılı Maarif Modeli) uyumlu hâle geliyor ve beceri temelli bir yaklaşıma kayıyor.</li><li><strong>Değişiyor:</strong> Bu yaklaşıma uygun, yeni bir soru havuzu hazırlanıyor; eski yılların sorularıyla örtüşme azalıyor.</li><li><strong>Değişmiyor:</strong> LGS kapsamındaki merkezî sınav ve YKS uygulaması kaldırılmıyor.</li><li><strong>Değişmiyor:</strong> Sınavın yapısı ve geçiş sistemi için açıklanmış bir değişiklik yok.</li></ul>")
A("<p>Burada dikkatli olmak gerekiyor: soru sayıları, süre, katsayılar veya puanlama için açıkça duyurulmuş yeni bir tablo bulunmuyor. İnternette dolaşan &ldquo;yeni LGS şu kadar soru olacak&rdquo; türü ayrıntılı iddialara, Bakanlığın resmî duyurusunu görmeden itibar etmemenizi öneririz. Biz de kurum olarak yalnızca resmî kaynakta yer alan bilgiyi veliye aktarıyoruz.</p>")

A("<h2>Hangi sınıf hangi sınava giriyor? Takvimi kendiniz hesaplayın</h2>")
A("<p>Velilerin en çok kafasının karıştığı nokta &ldquo;2028 benim çocuğumu kapsıyor mu?&rdquo; sorusu. Basit bir hesapla netleşiyor:</p>")
A("<ul><li>Bu öğretim yılında <strong>8. sınıfta</strong> olan öğrenci 2027 LGS&rsquo;ye girer; yani mevcut soru modeliyle sınava girecek kuşaktır.</li><li>Bu öğretim yılında <strong>7. sınıfta</strong> olan öğrenci 8. sınıfı tamamlayıp 2028 LGS&rsquo;ye girer; yeni soru modelinin ilk kuşağı bu gruptur.</li><li>Lise tarafında bu öğretim yılında <strong>11. sınıfta</strong> olan öğrenci 12. sınıfı tamamlayıp 2028 YKS&rsquo;ye girer.</li></ul>")
A("<p>2027 LGS&rsquo;nin kesin sınav ve başvuru tarihleri henüz açıklanmadı; bu tarihler için MEB&rsquo;in resmî duyurusunu beklemek gerekiyor. Tahminî tarih paylaşan sitelere değil, Bakanlığın kendi duyurusuna bakmanızı tavsiye ediyoruz. Ayrıca MEB&rsquo;in MEBİ platformu üzerinden öğretim yılı boyunca ücretsiz LGS ve YKS deneme sınavları yapılıyor; bunları takvime eklemek, özellikle 8 ve 12. sınıf öğrencileri için değerli bir prova imkânı.</p>")

A("<h2>&ldquo;Beceri temelli soru&rdquo; ne demek? Evde nasıl anlaşılır?</h2>")
A("<p>Beceri temelli soru, öğrenciden bilgiyi hatırlamasını değil, bildiğini yeni bir durumda kullanmasını ister. Dershane deneyimimizden söyleyebiliriz: bu sorularda öğrenciyi zorlayan şey genellikle konu bilgisi eksikliği değil, <strong>metni doğru okuyamamak</strong> oluyor.</p>")
A("<ul><li>Soru kökünde uzun bir paragraf, bir grafik, tablo ya da günlük hayattan bir durum yer alır.</li><li>Çözüm tek adımda bitmez; öğrenci önce veriyi yorumlar, sonra işlemi kurar.</li><li>Aynı konu farklı bir bağlamda sorulur; ezberlenmiş soru kalıbı işe yaramaz.</li><li>Birden fazla dersin becerisi aynı soruda buluşabilir; matematik sorusunda okuma becerisi belirleyici olur.</li></ul>")
A("<p>Evde kolay bir testi var: çocuğunuzdan yanlış yaptığı bir soruyu size <em>kendi cümleleriyle</em> anlatmasını isteyin. &ldquo;Soru benden ne istiyor?&rdquo; sorusuna net cevap veremiyorsa sorun konu bilgisinde değil, okuma ve yorumlamada. İyi haber şu: bu, çalışılarak gelişen bir beceridir.</p>")

A("<h2>RAYEMER&rsquo;de bu dönüşüme nasıl hazırlanıyoruz?</h2>")
A("<p>2019&rsquo;dan bu yana Maltepe Küçükyalı&rsquo;daki merkezimizde LGS ve TYT-AYT hazırlığı yürütüyoruz; Maltepe, Küçükyalı ve Bostancı çevresinden gelen öğrencilerle çalışıyoruz. Soru modeli tartışması gündeme gelmeden önce de gördüğümüz bir gerçek vardı: son yıllarda sınavlarda fark yaratan öğrenci, en çok soru çözen değil, soruyu en iyi okuyan öğrenci. Bu yüzden programımızda şu başlıklar zaten yer alıyor:</p>")
A("<ul><li><strong>Deneme sonrası hata analizi:</strong> Net sayısını değil, yanlışın <em>türünü</em> kaydediyoruz &mdash; bilgi eksiği mi, dikkat mi, yanlış okuma mı?</li><li><strong>Soru kökü okuma disiplini:</strong> Uzun köklü sorularda altını çizerek okuma ve soruyu kendi cümlesiyle yeniden ifade etme alışkanlığı.</li><li><strong>Düzenli okuma:</strong> Her öğrenciden günlük kısa ama kesintisiz okuma istiyoruz; beceri temelli sorunun temeli burada atılıyor.</li><li><strong>&ldquo;Neden&rdquo; sorusu:</strong> Doğru cevaba ulaşan öğrenciye de niçin o yolu seçtiğini soruyoruz; ezberle doğru yapılan soru, bağlam değişince kayboluyor.</li><li><strong>Eksik odaklı birebir destek:</strong> Sınıf temposu yetmediğinde " + L_OZEL + " ile konu bazlı açığı kapatıyoruz.</li></ul>")

A("<h2>Veli olarak bu hafta yapabileceğiniz dört şey</h2>")
A("<ul><li><strong>Panik dilini bırakın.</strong> &ldquo;Sınav değişiyor, hâlin ne olacak?&rdquo; cümlesi motivasyonu düşürür. Yerine &ldquo;sistem aynı, sorular biraz daha yorum isteyecek&rdquo; demek yeterli.</li><li><strong>Çocuğunuzun sınıfını netleştirin.</strong> Yukarıdaki hesapla hangi yıl hangi modele gireceğini bilmek, gereksiz kaygıyı tek başına yarıya indiriyor.</li><li><strong>Okuma için sabit bir saat ayırın.</strong> Günde yirmi dakika, ekran dışında, aynı saatte. Sonucu birkaç ayda deneme netlerinde görünür hâle geliyor.</li><li><strong>Kaynağı tek noktaya bağlayın.</strong> Sınav haberlerini yalnızca MEB ve ÖSYM duyurularından ve kurumunuzdan takip edin; forum ve kısa video yorumları kaygıyı büyütüyor.</li></ul>")

A("<h2>Sık Sorulan Sorular</h2>")
A("<h3>LGS 2028&rsquo;de kaldırılacak mı?</h3>")
A("<p>Hayır. Bakanlık, LGS kapsamındaki merkezî sınavın ve YKS uygulamasının kaldırılmayacağını, değişikliğin sorularda olacağını belirtti. Sınavın kaldırıldığı yönündeki paylaşımlar doğru değil.</p>")
A("<h3>Çocuğum bu yıl 8. sınıfta; yeni soru modelinden etkilenir mi?</h3>")
A("<p>Bu yıl 8. sınıfta olan öğrenci 2027 LGS&rsquo;ye gireceği için, yeni soru modelinin başlangıç yılı olarak duyurulan 2028 kapsamına girmiyor. Yine de son yılların soruları da giderek daha fazla yorum istiyor; okuma ve analiz çalışması her kuşak için geçerli.</p>")
A("<h3>Beceri temelli sorulara test çözerek hazırlanılır mı?</h3>")
A("<p>Test çözmek gerekli, ama tek başına yetmiyor. Soru çözdükten sonra yapılan analiz &mdash; neyi neden yanlış yaptığını konuşmak &mdash; bu soru tipinde asıl farkı yaratan adım. Çözülen soru sayısını artırmak yerine, her denemenin ardından ayrılan analiz süresini artırmak daha hızlı sonuç veriyor.</p>")
A("<h3>2027 LGS tarihi açıklandı mı?</h3>")
A("<p>Bu yazının hazırlandığı dönemde 2027 LGS için kesinleşmiş sınav ve başvuru tarihi duyurulmamıştı. Tarih için MEB&rsquo;in resmî açıklamasını takip etmenizi öneririz; tahmin niteliğindeki tarihlere göre plan yapmak gereksiz stres yaratıyor.</p>")

A("<p>Özetle: sınav kalkmıyor, sistem değişmiyor; 2028&rsquo;den itibaren sorular daha çok okuma, yorum ve beceri isteyecek. Bu, düzenli çalışan öğrenci için bir tehdit değil, avantaj. Çocuğunuzun hangi kuşakta olduğunu ve hangi becerilerde desteğe ihtiyacı olduğunu birlikte konuşmak isterseniz, Küçükyalı&rsquo;daki merkezimizde sizi ağırlamaktan memnun oluruz &mdash; " + L_ILETISIM + " bize ulaşabilir, kurumumuzu " + L_HAKKIMIZDA + ".</p>")

content = "".join(parts)
assert "\n" not in content and "\r" not in content, "content tek satir olmali"
assert "<h1" not in content, "h1 kullanilmamali"

text = re.sub(r"<[^>]+>", " ", content)
text = re.sub(r"&[a-z]+;", " ", text)
words = [w for w in text.split() if w.strip()]

payload = {
    "title": "LGS ve YKS Kalkıyor mu? 2028'de Değişen Tek Şey Soru Modeli",
    "slug": "lgs-ve-yks-kalkiyor-mu-2028-soru-modeli",
    "meta_description": "LGS ve YKS kalkıyor mu? Hayır. MEB sınavların kaldırılmadığını belirtti; 2028'den itibaren yalnızca soru modeli beceri temelli olarak değişiyor.",
    "keywords": "LGS kalkıyor mu, YKS kalkıyor mu, LGS 2028, YKS 2028, beceri temelli sorular, Türkiye Yüzyılı Maarif Modeli, MEB sınav sistemi, LGS 2027, RAYEMER, Maltepe LGS kursu, Küçükyalı YKS kursu, Bostancı dershane",
    "category_id": "__BLOG_CONTEXT_TEN_DOLDURULACAK__",
    "content": content,
}

with open("/home/user/rayemer_v1/blog-draft/post.json", "w", encoding="utf-8") as f:
    json.dump(payload, f, ensure_ascii=False, indent=2)

print("kelime sayisi:", len(words), "(hedef 900-1400)")
print("title uzunlugu:", len(payload["title"]), "(hedef 55-70)")
print("meta_description uzunlugu:", len(payload["meta_description"]), "(max 155)")
print("keywords terim sayisi:", len(payload["keywords"].split(",")), "(hedef 8-12)")
print("content tek satir:", "\n" not in content)
print("h2:", content.count("<h2>"), "h3:", content.count("<h3>"), "ic link:", content.count("<a href"))
print("img alani var mi:", "img" in payload)
