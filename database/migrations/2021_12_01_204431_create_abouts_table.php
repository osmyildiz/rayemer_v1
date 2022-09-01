<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('about_icerik')->default('Ciddi-disiplinli ama öğrencilerimizi sıkmadan, konsantrasyonlarını bir dakika bile kaybetmelerine izin vermeyecek nitelikli ve kaliteli bir sistemle, eğitimlerini en iyi şekilde sağlama konusunda prensipli ve yüksek hedeflere sahip bir eğitim merkeziyiz. Öğrencilerimizin Liselere Giriş Sınavlarında yada Üniversite Hazırlık Sınavlarında, hedefledikleri başarılara ulaşması en büyük gayemiz ve uğraşımızdır. Yıllar boyu süregelen üstün başarı ve güven ortamıyla sizlere ve değerli gençlerimize başarının, bilginin ve nitelikli eğitimin kapılarını sonuna kadar açma sözü veriyoruz.Eğitimde en kilit noktalardan birinin de, öğrencilerimizin istek ve motivasyonu ile alakalı olduğunu çok iyi biliyor ve programlarımızı bu istek-motivasyon düzeyini en üst noktada tutarak, öğrenmeyi sevdirmek üzerine kuruyoruz. Ders saatleri ve zamanlarını yine öğrencilerimize göre ayarlıyor, bu sayede en zinde ve kafalarının rahat olduğu zamanlarda derslerimizi yapıyoruz. &nbsp;Ve bütün bunları yaparken eğitimi en önde tutuyor, bizler için en büyük kazanımı öğrencilerimizin bizleri gururlandıracak başarıları olarak görüyor ve başka yerlerde bulamayacağınız kadar uygun fiyatlar ile sizlerin de cebinizin ve kafanızın rahat olmasını sağlıyoruz.Dersler ve ders işleyişi hakkında daha detaylı bilgi almak için iletişim bölümünde yer alan telefon numaralarımızdan bizlere ulaşabilir, gelip eğitim merkezimizi görüp, tanışmaya ve bir kahvemizi içmeye bekleriz.Sevgiler, saygılar…RAYEMER');
            $table->String('about_img')->default('');
            $table->longText('main')->default('');
            $table->String('about_alt')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
