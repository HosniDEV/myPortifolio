<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

 public function store(Request $request){
$formfield=$request->validate([
    'name'=>'required',
    'email'=>'required',
    'content'=>'required',
]);
Post::create($formfield);
 return back()->with('message','sent successfully');
 }
}
