<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class PrintSessionController extends Controller
{
  public function sessionControll(Request $request)
  {
    Session::regenerate();
    
    $sessionKey = 'sessionByLaravel';
    $requestKey = 'countByLaravel';
    $requestValue = 1;
    
    Log::info('Session::has = ' . Session::has($requestKey));

    if (Session::has($requestKey)){
      $requestValue = Session::get($requestKey) + 1;
    }
    Session::put($requestKey, $requestValue);

    $data = [
      $requestKey => $requestValue
    ];
    
    // resources/views/sample/request.blade.phpを呼ぶ
    return view('printsession', $data);
  }
}

?>