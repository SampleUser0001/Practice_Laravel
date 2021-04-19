<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

use App\Repository\SessionRepository;

class CreateSessionController extends Controller
{ 
  private $sessionRepository;
  public function __construct (
    SessionRepository $sessionRepository
  ) {
    $this->sessionRepository = $sessionRepository;
  }

  public function __invoke(Request $request){
    return view('createsession');
  }
}

?>