<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{

    

    public function pag1(){
        $items = Http::get("https://fakestoreapi.com/products/")->json();
        
        return view('index', ['items' => $items]);
    }



}
