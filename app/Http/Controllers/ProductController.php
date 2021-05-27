<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function showAll() {
    $dataProductDariModel = Product::all();
    return view(‘product.display’, [“products” => $dataProductDariModel]);
   }

   // action show
    public function show($id){
        /** Nah sekarang kita bisa menggunakan $id
         *  untuk misalnya query ke DB product where id == $id
         */
    }


   public function saveNew(Request $request){
     // kode logika untuk menyimpan product baru
   }
}
