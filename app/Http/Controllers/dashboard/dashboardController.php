<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
   public function index(){
       $posts = post::all();
       $categories = category::all();
       return view('admin.index',compact('categories','posts'));
   }
}
