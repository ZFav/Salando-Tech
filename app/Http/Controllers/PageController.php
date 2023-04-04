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

    public function pagList(){
        $items = Http::get("https://fakestoreapi.com/products/")->json();
        
        return view('list', ['items' => $items]);
    }

    public function pagShow($id){
        $items = Http::get("https://fakestoreapi.com/products/")->json();
        foreach ($items as $item) {
            if ($item['id']==$id) {
                return view('show', ['item'=>$item]);
            }
        }

        
    }

}
