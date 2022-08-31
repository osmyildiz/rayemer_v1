<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Course;
use App\Models\Form;
use App\Models\TestClub;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function homepage()
    {
        SEOMeta::setTitle('Rayemer AYT TYT LGS Hazırlık Kursu Maltepe Küçükyalı',false);
        SEOMeta::setDescription('Üniversite Hazırlık Kursu, Lise Hazırlık kursu, ayrıca 6.sınıf, 7.sınıf, 9.sınıf, 10.sınıf ve 11.sınıf takviye kursları, Maltepe, Küçükyalı, Bostancı');
        SEOMeta::setCanonical('https://rayemer.com');
        SEOMeta::setKeywords(["dersane","kurs","üniversite hazırlık","lise hazırlık","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription('2019dan beri MEB bünyesinde profesyonel olarak Küçükyalıda TYT AYT LGS hazırlık kursları ve özel dersler vermektedir.');
        OpenGraph::setTitle('Anasayfa');
        OpenGraph::setUrl('http://rayemer.com');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle('Rayemer');
        TwitterCard::setSite('@rayemercom');

        JsonLd::setTitle('Anasayfa');
        JsonLd::setDescription('Bir aile sıcaklığı, profesyonel markalı dersanelerin üstünde bir hizmet, disiplinli bir takip (aidtakip.com) için RAYEMER. Bir adım önde başlayın ');
        JsonLd::addImage('https://rayemer.com/images/logo/logo_main.png');
        return view('frontend.homepage');

    }

    public function boot()
    {
        //
    }
    public function contact()
    {

        $course = DB::table('contact')->find(1);
        SEOMeta::setTitle('Rayemer AYT TYT LGS İletişim',false);
        SEOMeta::setDescription('Üniversite Hazırlık Kursu, Lise Hazırlık kursu, ayrıca 6.sınıf, 7.sınıf, 9.sınıf, 10.sınıf ve 11.sınıf takviye kursları, Maltepe, Küçükyalı, Bostancı');
        SEOMeta::setCanonical('https://rayemer.com');
        SEOMeta::setKeywords(["Rayemer,iletişim,dersane","kurs","üniversite hazırlık","lise hazırlık","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);

        OpenGraph::setDescription('2019dan beri MEB bünyesinde profesyonel olarak Küçükyalıda TYT AYT LGS hazırlık kursları ve özel dersler vermektedir.');
        OpenGraph::setTitle('İletişim');
        OpenGraph::setUrl('http://rayemer.com/iletisim');
        OpenGraph::addProperty('type', 'articles');
        return view('frontend.contact',compact('course'));

    }
    public function private_lesson()
    {
        $course = DB::table('private')->find(1);
        SEOMeta::setTitle('Rayemer Özel Ders',false);
        SEOMeta::setDescription('Üniversite Hazırlık özel ders, Lise Hazırlık özel ders, 6.sınıf özel ders, 7.sınıf özel ders, 9.sınıf özel ders, 10.sınıf özel ders,11.sınıf özel ders, Maltepe özel ders, Küçükyalı özel ders, Bostancı özel ders');
        SEOMeta::setCanonical('https://rayemer.com/ozel-ders');
        SEOMeta::setKeywords(["Rayemer,Özel ders,dersane","kurs","birebir ders","online ders","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);

        OpenGraph::setDescription('Uzman öğretmenlerimizle öğrencimizin eksiklikleri tespit edilerek, kişiye özel program yapılır. Eksik olduğu her branştan nokta atışı ders verilerek geleceğe daha başarılı adımlar atar.');
        OpenGraph::setTitle('Özel ders');
        OpenGraph::setUrl('http://rayemer.com/ozel-ders');
        OpenGraph::addProperty('type', 'articles');

        return view('frontend.private_lesson',compact('course'));

    }
    public function about()
    {
        SEOMeta::setTitle('Rayemer Hakkımızda',false);
        SEOMeta::setDescription('RAYEMER açılımı Rasyonel – Yenilikçi Eğitim Merkezi olan bir eğitim kurumudur. Eğitimin içinden gelen kurucuları ile öğrencilerin ve ailelerin nitelikli ve kaliteli bir eğitim arayışına cevap vermeye çalışan bu kurumda öncelikli amacımız bireyin kendini keşfetmesini sağlamaktır. ');
        SEOMeta::setCanonical('https://rayemer.com/hakkimizda');
        SEOMeta::setKeywords(["Rayemer,Özel ders,dersane","kurs","birebir ders","online ders","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);

        OpenGraph::setDescription('Ciddi-disiplinli ama öğrencilerimizi sıkmadan, konsantrasyonlarını bir dakika bile kaybetmelerine izin vermeyecek nitelikli ve kaliteli bir sistemle, eğitimlerini en iyi şekilde sağlama konusunda prensipli ve yüksek hedeflere sahip bir eğitim merkeziyiz.');
        OpenGraph::setTitle('Özel ders');
        OpenGraph::setUrl('http://rayemer.com/ozel-ders');
        OpenGraph::addProperty('type', 'articles');
        $course = About::find(1);
        return view('frontend.about',compact('course'));

    }
    public function course($id)
    {

        $course = Course::find($id);
        if($id==1){
            SEOMeta::setTitle('Rayemer Üniversite Hazırlık Kursu',false);
            SEOMeta::setDescription('Yoğun tempo, 12 kişilik sınıflar, uzman öğretmenler ve günlük takip programı');
            SEOMeta::setCanonical('https://rayemer.com/kurs/1/12.sinif-tyt-ayt-yks-universite-hazirlik-kursu-maltepe-kucukyali-bostanci');
            SEOMeta::setKeywords(["Rayemer,Özel ders,dersane","kurs","birebir ders","online ders","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);
            SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');

            OpenGraph::setDescription('Ciddi-disiplinli ama öğrencilerimizi sıkmadan, konsantrasyonlarını bir dakika bile kaybetmelerine izin vermeyecek nitelikli ve kaliteli bir sistemle, eğitimlerini en iyi şekilde sağlama konusunda prensipli ve yüksek hedeflere sahip bir eğitim merkeziyiz.');
            OpenGraph::setTitle('Rayemer Üniversite Hazırlık Kursu');
            OpenGraph::setUrl('https://rayemer.com/kurs/1/12.sinif-tyt-ayt-yks-universite-hazirlik-kursu-maltepe-kucukyali-bostanci');
            OpenGraph::addProperty('type', 'articles');
        }elseif ($id==2){
            SEOMeta::setTitle('Rayemer Lise Hazırlık Kursu',false);
            SEOMeta::setDescription('Yoğun tempo, 12 kişilik sınıflar, uzman öğretmenler ve günlük takip programı');
            SEOMeta::setCanonical('https://rayemer.com/kurs/1/12.sinif-tyt-ayt-yks-universite-hazirlik-kursu-maltepe-kucukyali-bostanci');
            SEOMeta::setKeywords(["Rayemer,Özel ders,dersane","kurs","birebir ders","online ders","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);
            SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');
            OpenGraph::setDescription('Ciddi-disiplinli ama öğrencilerimizi sıkmadan, konsantrasyonlarını bir dakika bile kaybetmelerine izin vermeyecek nitelikli ve kaliteli bir sistemle, eğitimlerini en iyi şekilde sağlama konusunda prensipli ve yüksek hedeflere sahip bir eğitim merkeziyiz.');
            OpenGraph::setTitle('Rayemer Lise Hazırlık Kursu');
            OpenGraph::setUrl('https://rayemer.com/kurs/1/12.sinif-tyt-ayt-yks-universite-hazirlik-kursu-maltepe-kucukyali-bostanci');
            OpenGraph::addProperty('type', 'articles');
        }
        elseif ($id==3){
            SEOMeta::setTitle('Rayemer 11.Sınıf Takviye Kursu',false);
            SEOMeta::setDescription('11.sınıf Üniversite hazırlık öncesi en önemli sınıftır.');
            SEOMeta::setCanonical('https://www.rayemer.com/kurs/3/lise-11.sinif-arasinif-takviye-kursu-maltepe-kucukyali-bostanci');
            SEOMeta::setKeywords(["Rayemer,11.sınıf,dersane","kurs","birebir ders","online ders","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);
            SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');

            OpenGraph::setDescription('12. sınıfta yoğun bir şekilde üniversiteye hazırlanacak olan öğrencilerimiz bu yoğun tempoya alışabilmek için 11.sınıftan başlarlar.');
            OpenGraph::setTitle('11.sınıf Üniversite hazırlık öncesi en önemli sınıftır.');
            OpenGraph::setUrl('https://www.rayemer.com/kurs/3/lise-11.sinif-arasinif-takviye-kursu-maltepe-kucukyali-bostanci');
            OpenGraph::addProperty('type', 'articles');
        }elseif ($id==4){
            SEOMeta::setTitle('Rayemer 10.Sınıf ve 9.Sınıf Takviye Kursu',false);
            SEOMeta::setDescription('Kurs merkezimizde özel ders kalitesinde  ders vermekteyiz.  Paket içeriğine göre her dersten sınav sistemine göre hazırlanmış konu anlatımlı kitaplar ve soru bankaları verilmektedir. Ücretsiz Deneme Dersimiz vardır. ');
            SEOMeta::setCanonical('https://www.rayemer.com/kurs/4/lise-10.sinif-9.sinif-arasinif-takviye-kursu-maltepe-kucukyali-bostanci');
            SEOMeta::setKeywords(["Rayemer,10.sınıf,9.sınıf,dersane","kurs","birebir ders","online ders","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);
            SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');

            OpenGraph::setDescription('Kurs merkezimizde özel ders kalitesinde  ders vermekteyiz.  Paket içeriğine göre her dersten sınav sistemine göre hazırlanmış konu anlatımlı kitaplar ve soru bankaları verilmektedir. Ücretsiz Deneme Dersimiz vardır. ');
            OpenGraph::setTitle('Rayemer 10.Sınıf ve 9.Sınıf Takviye Kursu');
            OpenGraph::setUrl('https://www.rayemer.com/kurs/4/lise-10.sinif-9.sinif-arasinif-takviye-kursu-maltepe-kucukyali-bostanci');
            OpenGraph::addProperty('type', 'articles');
        }elseif ($id==5){
            SEOMeta::setTitle('Rayemer 7.Sınıf Takviye Kursu',false);
            SEOMeta::setDescription('Okul derslerine yardımcı olmakla birlikte, Lise Giriş Sınvalarının temelinin sağlam atılacağı sınıflardır. Rayemer olarak
İlköğretim 7.sınıf öğrencileri için hazırladığımız özel sınıflarda 12 kişilik özel ders kalitesinde butik ders vermekteyiz. ');
            SEOMeta::setCanonical('https://www.rayemer.com/kurs/5/ortaokul-7.sinif-arasinif-takviye-kursu-maltepe-kucukyali-bostanci');
            SEOMeta::setKeywords(["Rayemer,7.sınıf,dersane","kurs","birebir ders","online ders","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);
            SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');

            OpenGraph::setDescription('Okul derslerine yardımcı olmakla birlikte, Lise Giriş Sınvalarının temelinin sağlam atılacağı sınıflardır. Rayemer olarak
İlköğretim 7.sınıf öğrencileri için hazırladığımız özel sınıflarda 12 kişilik özel ders kalitesinde butik ders vermekteyiz. ');
            OpenGraph::setTitle('Rayemer 7.Sınıf Takviye Kursu');
            OpenGraph::setUrl('https://www.rayemer.com/kurs/5/ortaokul-7.sinif-arasinif-takviye-kursu-maltepe-kucukyali-bostanci');
            OpenGraph::addProperty('type', 'articles');
        }elseif ($id==6){
            SEOMeta::setTitle('Rayemer 6.Sınıf Takviye Kursu',false);
            SEOMeta::setDescription('Okul derslerine yardımcı olmakla birlikte, Lise Giriş Sınvalarının temelinin sağlam atılacağı sınıflardır. Rayemer olarak
İlköğretim 6.sınıf öğrencileri için hazırladığımız özel sınıflarda 12 kişilik özel ders kalitesinde butik ders vermekteyiz. ');
            SEOMeta::setCanonical('https://www.rayemer.com/kurs/5/ortaokul-7.sinif-arasinif-takviye-kursu-maltepe-kucukyali-bostanci');
            SEOMeta::setKeywords(["Rayemer,6.sınıf,dersane","kurs","birebir ders","online ders","küçükyalı kurs","küçükyalı üniversite hazırlık","küçükyalı deneme","bostancı deneme","bostancı kurs","bostancı üniversite","final","birey","fen bilimleri"]);
            SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');

            OpenGraph::setDescription('Okul derslerine yardımcı olmakla birlikte, Lise Giriş Sınvalarının temelinin sağlam atılacağı sınıflardır. Rayemer olarak
İlköğretim 6.sınıf öğrencileri için hazırladığımız özel sınıflarda 12 kişilik özel ders kalitesinde butik ders vermekteyiz. ');
            OpenGraph::setTitle('Rayemer 6.Sınıf Takviye Kursu');
            OpenGraph::setUrl('https://www.rayemer.com/kurs/5/ortaokul-7.sinif-arasinif-takviye-kursu-maltepe-kucukyali-bostanci');
            OpenGraph::addProperty('type', 'articles');
        }
        return view('frontend.course',compact('course'));

    }

    public function course_ozel()
    {

        return view('frontend.course_ozel');

    }
    public function send_form(Request $request)
    {
        print_r($request->all());
        //die();
        $form = new Form();
        $form->name = $request->name;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->message = $request->message;
        $form->subject = $request->subject;
        $save = $form->save();

        $data = [
            'subject' => $request->subject,
            'email1' => $request->email,
            'email' => "rayemerkurs@gmail.com",
            'name' => $request->name,
            'phone' => $request->phone,
            'message1' => $request->message,
        ];


        Mail::send('frontend.emailcontact', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });


        if($save){
            return back()->with('success', 'Mesaj gönderildi.');
        }else{
            return back()->with('error', 'Üzgünüm mesajınızı gönderemedim.Yeniden deneyiniz.');
        }
    }
    public function send_test(Request $request)
    {

            $test = new TestClub();
            $test->name = $request->name;
            $test->email = $request->email;
            $test->phone = $request->phone;
            $test->sinif = $request->sinif;

            $save = $test->save();

            $data = [
                'email1' => $request->email,
                'email' => "rayemerkurs@gmail.com",
                'name' => $request->name,
                'phone' => $request->phone,
                'subject' => "Sınıf:".$request->sinif,
                'message1' => "Denemelerden haberdar olmak isteyen bir velimiz:".$request->sinif,
            ];


            Mail::send('frontend.emailcontact', $data, function ($message) use ($data) {
                $message->to($data['email'])
                    ->subject($data['subject']);
            });

        if($save){
            return response()->json([ 'success'=> 'Kaydınız gerçekleştirildi.']);
        }else{
            return response()->json([ 'error'=> 'Beklenmeyen bir hata oluştu. Lütfen tekrar deneyiniz.']);
        }
    }



}
