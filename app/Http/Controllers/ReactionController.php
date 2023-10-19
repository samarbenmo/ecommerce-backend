<?php

namespace App\Http\Controllers;
use App\Models\CRM\Reaction;
use Illuminate\Http\Request;

class ReactionController extends Controller
{

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    $reaction = Reaction::all()->toArray();
    return array_reverse($reaction);
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
    $reaction = new Reaction([
    'type_react' => $request->input('type_react'),
    'content' => $request->input('content'),

    ]);
    $reaction->save();
    return response()->json('Reaction is created !');
    }
    /**
    * Display the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
    $reaction = Reaction::find($id);
    return response()->json($reaction);
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
    $reaction = Reaction::find($id);
    $reaction->update($request->all());
    return response()->json('reaction is updetead !');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
    $reaction = Reaction::find($id);
    $reaction->delete();
    return response()->json('Reaction is deleted !');
    }
}
