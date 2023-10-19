<?php

namespace App\Http\Controllers;
use App\Models\CRM\Socialmedia;

use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
      /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
        $socialmedia = Socialmedia::all()->toArray();
        return array_reverse($socialmedia);
        }
        /**
        * Store a newly created resource in storage.
        *
        * @param \Illuminate\Http\Request $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
        $socialmedia = new Socialmedia([
        'type_sm' => $request->input('type_sm'),
        'link' => $request->input('link'),

        ]);
        $socialmedia->save();
        return response()->json(' Socialmedia is Created!');
        }
        /**
        * Display the specified resource.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
        $socialmedia = Socialmedia::find($id);
        return response()->json($socialmedia);
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
        $socialmedia = Socialmedia::find($id);
        $socialmedia->update($request->all());
        return response()->json(' Socialmedia is updated!');
        }
        /**
        * Remove the specified resource from storage.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
        $socialmedia = Socialmedia::find($id);
        $socialmedia->delete();
        return response()->json(' socialmedia is deleted !');
        }
}
