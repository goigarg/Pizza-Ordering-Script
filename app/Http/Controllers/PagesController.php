<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title="GOIGARG";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', "Welcome to Laravel");
    }
    public function about() {
        $data = array(
            'title' => 'About',
            'contents' => ['Welcome', 'hello', 'ok']
        );
        return view('pages.about')->with($data);
    }
}
