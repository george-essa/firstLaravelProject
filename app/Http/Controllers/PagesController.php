<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'This is index page !';
        return view('pages.index')->with('title',$title);
    }
    public function about() {
        return view('pages.about');
    }
    public function services() {
        return view('pages.services');
    }
}
