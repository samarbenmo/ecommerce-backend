<?php

namespace App\Http\Controllers;
use App\Models\CRM\Profil;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    $profil = Profil::all()->toArray();
    return array_reverse($profil);
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
    $profil = new Profil([
    'firstname' => $request->input('firstname'),
    'lastname' => $request->input('lastname'),
    'phone' => $request->input('phone'),
    'type' => $request->input('type'),




    ]);
    $profil->save();
    return response()->json('Profil is created !');
    }
    /**
    * Display the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
    $profil = Profil::find($id);
    return response()->json($profil);
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
    $profil = Profil::find($id);
    $profil->update($request->all());
    return response()->json('Profil is updetead !');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
    $profil = Profil::find($id);
    $profil->delete();
    return response()->json('Profil is deleted !');
    }
    }
