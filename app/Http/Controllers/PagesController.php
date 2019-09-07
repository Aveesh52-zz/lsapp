<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
function index(){
    $title = 'Hello';
    return view('pages.index')->with('title', $title);
}

function services(){
    $data = array(
        'title' => 'Yo',
        'services' => ['adssa'.'sdsad','asds']
    );
    return view('pages.services')->with($data);
}
function about(){
    return view('pages.about');
}
}
