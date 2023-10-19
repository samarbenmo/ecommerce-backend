<?php

namespace App\Http\Controllers;
use App\Models\CRM\Shop;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
  $shop = Shop::all()->toArray();
  return array_reverse($shop);
  }
  /**
  * Store a newly created resource in storage.
  *
  * @param \Illuminate\Http\Request $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
  $shop = new Shop([
  'title_shop' => $request->input('title_shop'),
  'number_products' => $request->input('number_products'),
  'number_purshases' => $request->input('number_purshases')

  ]);
  $shop->save();
  return response()->json(' Shop is Created!');
  }
  /**
  * Display the specified resource.
  *
  * @param int $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
  $shop = Shop::find($id);
  return response()->json($shop);
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
  $shop = Shop::find($id);
  $shop->update($request->all());
  return response()->json(' Shop is updated!');
  }
  /**
  * Remove the specified resource from storage.
  *
  * @param int $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
  $shop = Shop::find($id);
  $shop->delete();
  return response()->json(' Shop is deleted !');
  }
}
