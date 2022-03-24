<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class HomeController extends Controller

{
    //
    public function show(){
        $title = 'Bùi Đức Dương dâm dê';
        return view('main',compact('title'));
    }
}
