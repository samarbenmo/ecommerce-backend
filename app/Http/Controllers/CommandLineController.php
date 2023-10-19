<?php

namespace App\Http\Controllers;
use App\Models\ecommerce\CommandLine;
use Illuminate\Http\Request;

class CommandLineController extends Controller
{
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
        $commandLine = CommandLine::all()->toArray();
        return array_reverse($commandLine);
        }
        /**
        * Store a newly created resource in storage.
        *
        * @param \Illuminate\Http\Request $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
        $commandLine = new CommandLine([
        'quantity_cl' => $request->input('quantity'),
        'totalHT' => $request->input('totalHT'),
        'totalTTC' => $request->input('totalTTC'),
        'id_prod' => $request->input('id_prod'),

        ]);
        $commandLine->save();
        return response()->json('commandLine is created !');
        }
        /**
        * Display the specified resource.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
        $commandLine = CommandLine::find($id);
        return response()->json($commandLine);
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
        $commandLine = CommandLine::find($id);
        $commandLine->update($request->all());
        return response()->json('commandLine is updeated !');
        }
        /**
        * Remove the specified resource from storage.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
        $commandLine = CommandLine::find($id);
        $commandLine->delete();
        return response()->json('commandLine is deleted !');
        }
        }
