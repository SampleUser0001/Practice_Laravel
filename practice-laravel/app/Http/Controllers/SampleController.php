<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
  public function request1(Request $request)
  {
    $request->flash();

    $data = [
      'get'           => $request->get('a'),
      'input'         => $request->input('a'),
      'request_get'   => $request->request->get('a'),
      'query_get'     => $request->query->get('a'),
      'query'         => $request->query('a'),
      'all'           => var_export($request->all(), true),
      'only'          => var_export($request->only(['a', 'b']), true),
      'except'        => var_export($request->except(['b']), true),
    ];

    // resources/views/sample/request.blade.phpを呼ぶ
    return view('sample.request1', $data);
  }
}

?>