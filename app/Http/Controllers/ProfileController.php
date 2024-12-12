<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id) {
        $name="Donald Trump";
        $age="75";
        $data=["id"=>$id,"name"=>$name,"age"=>$age];
        
        $cookiename="access_token1";
        $cookievalue="123-XYZ";
        $cookieminutes=1;
        $cookiepath="/";
        $cookiedomain=$_SERVER['SERVER_NAME'];
        $cookiesecure=false;
        $cookiehttpOnly=true;
        
        Cookie::queue($cookiename, $cookievalue, $cookieminutes, $cookiepath, $cookiedomain, $cookiesecure, $cookiehttpOnly);

        return response()->json($data, 200);
    }
}