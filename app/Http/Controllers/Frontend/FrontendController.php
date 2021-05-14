<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class FrontendController extends Controller
{
    public function __construct() {
    }
     
    // Dashboard - Analytics
    public function index(){
        return view('frontend.index');
    }
}
