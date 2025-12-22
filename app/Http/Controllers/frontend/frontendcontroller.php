<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\article;
use App\Models\category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class frontendcontroller extends Controller
{

    public function __construct()
    {
         $catogery=category::orderBy('position','asc')->where('visible',1)->get();
       $advertise=Advertise::where('expire_date','>=',Carbon::today())->get();
        View::share([
            'cat'=>$catogery,
            'advertise'=>$advertise,
        ]);
    }
    
    public function home(){

        $article=article::get();
        return view('frontend.home',compact('article'));
    }

    public function catogerys($slug){
        $cats=category::where('slug',$slug)->firstOrFail()  ;
        $arts=$cats->articles()->latest()->get();
        return view('frontend.catogery',compact('cats','arts'));
    }

}
