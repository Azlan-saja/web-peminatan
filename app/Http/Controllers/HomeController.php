<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function admin(): View
    {
        return view('admin.dashboard');
    }
  
    public function pasien(): View
    {
        return view('pasien.dashboard');
    }
}
