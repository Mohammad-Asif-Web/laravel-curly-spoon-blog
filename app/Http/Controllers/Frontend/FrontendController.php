<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('Frontend.modules.index');
    }
    public function single(){
        return view('Frontend.modules.single');
    }
    public function about(){
        return view('Frontend.modules.about');
    }
    public function contact(){
        return view('Frontend.modules.contact');
    }
}
