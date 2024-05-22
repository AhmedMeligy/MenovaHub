<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Card;


    class ProductController extends Controller
    {
    public function show(Request $request, $category, $card)
    {
        $card = Card::findOrFail($request->card_id);

        $products = Product::where('card_id', $card->id)->get();

        return view('products', compact('products'));
     }
    }   


