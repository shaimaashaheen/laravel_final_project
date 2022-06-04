<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\contact;
use App\Models\comment;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function showhome(){
        $posts = post::select('*')->orderBy('created_at','desc')->limit(4)->get();
        return view('front.index',compact('posts'));
    }
    public function single(){
        $posts = post::select('*')->orderBy('created_at','desc')->limit(4)->get();
        return view('front.Single',compact('posts'));
    }

    public function category(){
        $categories = category::select('*')->orderBy('created_at','desc')->limit(4)->get();
        return view('front.category',compact('categories'));
    }

    public function comment(){
        $comments = comment::select('*')->get();
        return view('front.comment',compact('comments'));
    }

    public function contact(){
        //$categories = category::select('*')->orderBy('created_at','desc')->limit(4)->get();
        return view('front.contact');
    }

    public function storeContact(Request $request){
        $contact = new contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->back();
    }
}
