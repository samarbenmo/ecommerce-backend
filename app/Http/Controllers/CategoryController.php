<?php

namespace App\Http\Controllers;
use App\Models\stockmangement\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
          /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
        $category = Category::all()->toArray();
        return array_reverse($category);
        }
        /**
        * Store a newly created resource in storage.
        *
        * @param \Illuminate\Http\Request $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
        $Category = new Category([
        'title_categ' => $request->input('title_categ'),

        ]);
        $Category->save();
        return response()->json('Creat category !');
        }
        /**
        * Display the specified resource.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
        $category = Category::find($id);
        return response()->json($category);
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
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json('update category !');
        }
        /**
        * Remove the specified resource from storage.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
        $category = Category::find($id);
        $category->delete();
        return response()->json('delete category  !');
        }
}
