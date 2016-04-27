<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;

class WelcomeController extends Controller
{
  // public function __construct()
  // {
  //   $this->middleware('guest');
  // }
  /**
   * Show the application welcome screen to the user.
   *
   * @return Response
   */
  public function index()
  {
    return view('welcome');
  }

}
