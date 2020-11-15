@extends('layouts.app')
@extends('header')
@section('content')
<div class="container">
    @csrf
  <!-- <div class="card-body">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
  </div> -->
<div id="about">
  <div class="row">
    <div class="col col-4">
      <img src="/img/{{$user->image}}" id="user" >
    </div>
    <div class="col col-8">
<div class="">
  <p id="username">{{ $user->username }}</p>
<a href="/profile/{{$user->id}}/edit">Edit Profile</a>
<img src="/img/settings.png" id="settings">
  <a href="/post/create" class="btn btn-outline-primary ml-5"  >Add new post</a>
</div>
<div id="second">
  <p>{{$user->posts->count()}} Posts</p>
  <a href="#">98 Followers</a>
  <a href="#">534 Following</a>
</div>
<div id="bio">
  <p>{{$user->bio}}</p>
</div>
    </div>
  </div>
</div>
<div id="links" class="text-center">
<a href="#" id="post">Posts</a>
<a href="#" id="igtv">IGTV</a>
<a href="#" id="saved">Saved</a>
<a href="#" id="tagged">Tagged</a>
</div>
<div id="posts">
  <div class="row">
      @foreach ($user->posts as $post)
    <div class="col col-4">
      <!-- <img src="/img/p2.jpg" id="sp"> -->
<a href="/post/show/{{$post->id}}"><img src="/storage/{{$post->image}}" id="sp" class="pb-4"></a>
    </div>
    @endforeach
    </div>
  </div>
</div>
</div>
@endsection
