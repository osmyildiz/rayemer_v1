<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Campaign;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Events;
use App\Models\FoodType;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\New_Campaign;
use App\Models\Photo;
use App\Models\PhotoCategory;
use App\Models\User;
use App\Models\Wedding;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

        return view('frontend.homepage');

    }

    public function root()
    {
     //   return view('frontend.homepage');
    }



}
