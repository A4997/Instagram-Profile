<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;
class PostsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');//any one want to enter a profile should be the authenticated user
  }
    public function create()
    {
      return view('/posts/createPost');
    }
    public function save(Request $request)
    {
      $data=$request->validate([
        'image'=>['required','image'],
        'caption'=>'required',
      ]);
      $imagepath=request('image')->store('uploads','public');//awl file da pa7ot fih el swar bta3ty gwa el puplic bta3t el storage w el tany el mkan elly by4eel el images
    //   $image=Image::make($request->file('image')->getRealPath())->fit(120,120);;//by3ml ay image 1200*1200
    // $image->save('save');
      auth()->user()->posts()->create([
        'caption'=>$data['caption'],
        'image'=>$imagepath,
      ]);
      return redirect('/profile/'.auth()->user()->id);
    }
    public function save2(Request $request)
    {
      $data=$request->validate([
        'image'=>['required','image'],
        'caption'=>'required',
      ]);
      $imagepath=request('image')->store('uploads','public');//awl file da pa7ot fih el swar bta3ty gwa el puplic bta3t el storage w el tany el mkan elly by4eel el images
    //   $image=Image::make($request->file('image')->getRealPath())->fit(120,120);;//by3ml ay image 1200*1200
    // $image->save('save');
      auth()->user()->posts()->create([
        'caption'=>$data['caption'],
        'image'=>$imagepath,
      ]);
      return redirect('/updated_profile/'.auth()->user()->id);
    }
    public function show($id)
    {
      $post=Post::findOrFail($id);
      return view('posts.showPost',compact('post'));
    }
}
