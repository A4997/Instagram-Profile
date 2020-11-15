<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
class ProfileController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');//any one want to enter a profile should be the authenticated user
  }
  public function index($id)
  {
    $user=User::find($id);
    return view('profile',compact('user'));
  }
  public function updated_profile($id)
  {
    $user=User::find($id);
    return view('updated_profile',compact('user'));
  }
}
