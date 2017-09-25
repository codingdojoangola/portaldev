<?php

namespace PortalDev\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use PortalDev\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('dashboard.home');
    }
}
