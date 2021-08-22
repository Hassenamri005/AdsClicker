<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    function index(){
        //$ads = DB::select('select * from ads');
        //--------------
        $ads = DB::table('ads')
        ->where('status', '=', 'published')
        ->get();

        $userId = isset(Session::get('user')['id']);
        return view('dashboards.users.dashboard',["ads"=>$ads]);
    }
    function publishAds(Request $req){
        $ad = new Ad;
        $ad->title = $req->title;
        $ad->description = $req->description;
        $ad->url = $req->url;
        $ad->price = $req->price;
        $ad->save();
        return redirect('/user/dashboard');
    }
    function checkout(){
        return view('dashboards.users.checkout');
    }

    
    function profile(){
        return view('dashboards.users.profile');
    }
    function settings(){
        return view('dashboards.users.settings');
    }
}
