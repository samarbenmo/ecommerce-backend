<?php

namespace App\Http\Controllers;
use App\Models\ecommerce\Command;

use Illuminate\Http\Request;

class CommandController extends Controller{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    $command = Command::all()->toArray();
    return array_reverse($command);
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
    $command = new Command([
    'total_comm' => $request->input('total_comm'),
    'method_payment' => $request->input('method_payment'),
    'shipping' => $request->input('shipping'),
    'price_shipping' => $request->input('price_shipping')

    ]);
    $command->save();
    return response()->json('Command is created !');
    }
    /**
    * Display the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
    $command = Command::find($id);
    return response()->json($command);
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
    $command = Command::find($id);
    $command->update($request->all());
    return response()->json('Command is updetead !');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
    $command = Command::find($id);
    $command->delete();
    return response()->json('Command is deleted !');
    }
    }
