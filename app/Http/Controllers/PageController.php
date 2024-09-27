<?php
namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function projects() {
        return view('projects');
    }
    
    public function contact() {
        return view('contact');
    }
}
