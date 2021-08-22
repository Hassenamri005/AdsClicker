<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //
    function index(){
        $users = DB::select('select * from users');
        $nbUsers = DB::table('users')->count();
        $ads = DB::select('select * from ads');
        $penAds = DB::table('ads')
                    ->where('status', '=', 'pending')
                    ->get();
        $nbAds = DB::table('ads')->count();
        return view('dashboards.admins.dashboard', ['users'=>$users,"nbUsers"=>$nbUsers,
            "nbAds"=>$nbAds, "ads"=>$ads, "penAds"=>$penAds]);
    }
    function publishAds(){
        return view('dashboards.admins.publish');
    }


    function profile(){
        return view('dashboards.admins.profile');
    }
    function settings(){
        return view('dashboards.admins.settings');
    }
}
