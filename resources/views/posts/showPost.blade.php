@extends('layouts.app')
@extends('header')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
<div class="container">
  <div class="row" id="showPost">
    <img src="/storage/{{$post->image}}" class="col col-8">
    <div class="col col-4" id="left">
      <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->user->image}}" id="user_image_in_post">{{$post->user->username}}</a>
      <p id="caption">{{$post->caption}}</p>
      <form  action="/post" method="post">
        <div class="input-group input-group-lg">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-lg">Comment</span>
    </div>
    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
  </div>
  <button type="button" class="btn btn-outline-success" id="addComment">Add Comment</button>
      </form>

    </div>
  </div>
</div>
@endsection
