<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //halaman home terra trainer
    public function home(){
        return view('index');
    }
}
