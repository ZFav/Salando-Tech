<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mail\InfoMail;
use Illuminate\Support\Facades\Mail;

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

    public function send(Request $richiesta){

        $richiesta->validate([
            'name' => 'required|max:20',
            'phone' => 'required|numeric',
            'email' => 'required|email',
        ]);

        $data = [
            "id_product" => $richiesta->id_product,
            "name_product" => $richiesta->name_product,
            "price" => $richiesta->price,
            'name' => $richiesta->name,
            'surname'=>$richiesta->surname,
            'phone' => $richiesta->phone,
            'email' => $richiesta->email,
        ];

        Mail::to($richiesta->email)->send(new InfoMail($data));
        return redirect()->route('thank');
    } 
    public function thank()
    {
        return view('thank');
    }

}
