<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieHandling extends Controller
{
  public function readCookies(Request $request)
  {
    $request->flash();
    
    $cookie = $request->cookie();
    // $agencyCode = $cookie['key'] ?? '??は多分nullだったらこの値を設定する';
    $agencyCode = $cookie['key2'] ?? '??は多分nullだったらこの値を設定する';

    $key = 'key';
    $value = 'not found';
    
    if(Cookie::has($key))
    {
      $value = Cookie::get($key);
    }
    
    $key2 = 'key2';
    Cookie::queue($key2, now(), 10);

    $data = [
      'agencyCode' => $agencyCode,
      $key     => $key,
      'value'   => $value,
      $key2    => $key2,
      'value2' => Cookie::get($key2)     
    ];
    
    return view('readcookie',$data);
  }
  public function setCookies($key, $value) {
    
  }
}


?>