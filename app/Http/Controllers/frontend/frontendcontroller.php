<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\article;
use App\Models\category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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
     public function search(request $request){
            $query=$request->q;
           $arts=article::where('title','like',"%$query%")->get();
           return view('frontend.search',compact('query','arts'));
     }

      public function newsdesc($slug){
         $article=article::where('slug',$slug)->first();
         $id=Cookie::get($article->id);
         if(!$id){
            $article->increment('views');
            Cookie::queue($article->id,$article->id);
         }
        return view('frontend.newsdesc',compact('article'));
    }
}
