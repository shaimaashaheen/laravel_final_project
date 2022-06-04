<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = post::all();
       return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::all();
        return view('admin.posts.addPosts',compact('categories'));
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
            'body'=>'required|string'    ,
            'email'=>'email',
            'category_id'=>'required|integer'
        ];
//        $messages=['title.required'=>'the title of the post should bne entered ',
//            'title.unique'=> 'the title of the post should be unque or already exist in the database',
//            'body.required'=> ' please enter body'];

        $validator=Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $post=new post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->category_id=$request->category_id;
        $post->email=$request->email;
        $post_image=$request->file('post_image');
        $filename=$post->title.time().'.'.$post_image->extension();
        $post_image->move('post_images', $filename);
        $post->feature_image=$filename;
        $post->large_image=$filename;
        $post->save();
        return  redirect()->route('post.index')->with('successadd','Post has been added successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $categories=category::all();
        return view('admin.posts.updatePosts',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $post->title=$request->title;
        $post->body=$request->body;
        $post->category_id=$request->category_id;
        $post_image=$request->file('post_image');
        $filename=$post->title.time().'.'.$post_image->extension();
        $post_image->move('post_images', $filename);
        $post->feature_image=$filename;
        $post->large_image=$filename;
        $post->save();
        return  redirect()->route('post.index')->with('successadd','Post has been updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return  redirect()->route('post.index')->with('delete','Post has been deleted');
    }
}
