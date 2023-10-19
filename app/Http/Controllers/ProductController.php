<?php

namespace App\Http\Controllers;
use App\Models\stockmangement\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
           /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
        $product = Product::all()->toArray();
        return array_reverse($product);
        }
        /**
        * Store a newly created resource in storage.
        *
        * @param \Illuminate\Http\Request $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
        $product = new Product([
        'facebook_post_link' => $request->input('facebook_post_link'),
        'code_prod' => $request->input('code_prod'),
        'current_quantity' => $request->input('current_quantity'),
        'title' => $request->input('title'),
        'price' => $request->input('price'),
        'number_purchases' => $request->input('number_purchases'),

        ]);
        $product->save();
        return response()->json(' creat Product !');
        }
        /**
        * Display the specified resource.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
        $product = Product::find($id);
        return response()->json($product);
        }
        /**
        * Update the specified resource in storage.
        *
        * @param \Illuminate\Http\Request $request
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, $id)
        {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json(' update product !');
        }
        /**
        * Remove the specified resource from storage.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
        $product = Product::find($id);
        $product->delete();
        return response()->json('delete product  !');
        }
}
