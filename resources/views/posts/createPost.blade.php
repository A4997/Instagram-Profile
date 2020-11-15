@extends('layouts.app')
@extends('header')
@section('content')
<div class="container">
  <form  action="/post" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="caption"  id="postLables">Post Caption</label>
    <input type="text" name="caption" class="form-control" >
    @error('caption')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
    <div class="form-group" id="postLables">
    <label for="image">Post Image</label>
    <input type="file" name="image" class="form-control-file">
    @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
<button type="submit" class="btn btn-primary btn-lg" value="submit">Add Post</button>
  </form>
</div>
@endsection
