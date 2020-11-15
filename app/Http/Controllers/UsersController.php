<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function edit($id)
    {
      $update=User::findOrFail($id);
      return view('update_user',compact('update'));
    }
    public function save(Request $request)
    {
      $user = User::findOrFail(auth()->user()->id);
    $user->bio = $request->get('bio');
    $imagepath=request('image')->store('profile','public');
    $user->image=$imagepath;
    $user->image = $imagepath;
    $user->save();
//
// // $data=request()->validate([
// // 'bio'=>'same',
// // 'image'=>'same'
// // ]);
// // auth()->user()->update($data);
    return redirect('/updated_profile/'.$user->id);
    }
}
