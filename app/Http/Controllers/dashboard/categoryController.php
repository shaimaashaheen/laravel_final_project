<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   $categories = category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'title'=>'required|unique:posts|max:50|min:5',
            'code'=>'required',
        ];

        $validator=Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $category=new category();
        $category->title=$request->title;
        $category->code=$request->code;
        $category->save();
        return redirect()->route('category.index')->with('successadd','Category has been added successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('admin.categories.updateCategory',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $category->title=$request->title;
        $category->code=$request->code;
        $category->save();
        return  redirect()->route('category.index')->with('successadd','Category has been updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $category->delete();
        return  redirect()->route('category.index')->with('delete','Category has been deleted successfully !');
    }
}
