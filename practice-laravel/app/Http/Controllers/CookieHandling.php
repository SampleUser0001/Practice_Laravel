<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class CookieHandling extends Controller
{
  public function readCookies(Request $request)
  {
    $request->flash();
    return view('readcookie',self::getData($request));
  }

  public function setCookie(Request $request, Response $response)
  {
    $request->flash();

    $key = $request->key;
    $value = $request->value;
    $httponly = true;
    
    if(strcmp($request->httponly,'on')!=0)
    {
      $httponly = false;      
    }

    // httponlyを拾っているが、登録に使っていない。
    Cookie::queue($key, $value, 5);

    // Log::info('CookieHandling->setCookie : key = ' . $key . ', value = ' . $value);
    Log::info('CookieHandling->setCookie : key = ' . $key . ', value = ' . $value . ', httponly = ' . $httponly);
    
    return response(view('readcookie',self::getData($request)));
    
    // こうするとhttponlyを書けるらしいが、登録できない。
    // return response(view('readcookie',self::getData($request)))
    //   ->cookie($key , $value, 5, '/', '192.168.1.34', true, $httponly);
    
    // これは登録できる。
    // return response(view('readcookie',self::getData($request)))
    //   ->cookie($key , $value, 5);
  }
  
  private function getData(Request $request)
  {
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
    
    return $data;
  }
}


?>