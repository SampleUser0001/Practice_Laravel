<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieHandling extends Controller
{
  public function readCookies(Request $request)
  {
    $request->flash();
    
    $key = 'key';
    $value = 'not found';
    
    if(Cookie::has($key))
    {
      $value = Cookie::get($key);
    }

    $data = [
      'key'   => $key,
      'value' => $value
    ];
    
    return view('readcookie',$data);
  }
  public function setCookies($key, $value) {
    
  }
}


?>