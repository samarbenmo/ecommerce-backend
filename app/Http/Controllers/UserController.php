<?php

namespace App\Http\Controllers;
use App\Models\CRM\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
        $user = User::all()->toArray();
        return array_reverse($user);
        }
        /**
        * Store a newly created resource in storage.
        *
        * @param \Illuminate\Http\Request $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
        $user = new User([
        'username' => $request->input('username'),
        'email'=> $request->input(  'email'),
        'password'=> $request->input('password'),
        'is_active'=> $request->input('is_active'),
        'is_admin'=> $request->input('is_admin'),
        'last_login'=> $request->input('last_login'),
        'date_joined'=> $request->input('date_joined'),
        'has_otp_service'=> $request->input( 'has_otp_service'),


        ]);
        $user->save();
        return response()->json(' User is Created!');
        }
        /**
        * Display the specified resource.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
        $user = User::find($id);
        return response()->json($user);
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
        $user = User::find($id);
        $user->update($request->all());
        return response()->json(' User is updated!');
        }
        /**
        * Remove the specified resource from storage.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
        $user = User::find($id);
        $user->delete();
        return response()->json(' User is deleted !');
        }
}

