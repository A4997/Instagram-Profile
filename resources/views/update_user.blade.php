@extends('layouts.app')
@extends('header')
@section('content')
<div class="container">

<h1 class="dislay-3">Update User</h1>
<form  action="/updated_profile/{{$update->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <label for="bio">Bio</label>
    <input type="text"  value="{{$update->bio}}" class="form-control" name="bio">
    <label for="image">Image</label>
    <input type="file"  value=""  class="form-control-file" name="image">
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="/profile/{{$update->id}}" class="btn btn-dark">Back</a>
</form>
  </div>
@endsection
