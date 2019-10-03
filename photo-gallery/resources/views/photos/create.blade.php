@extends('layouts.app')

@section('content')

  <h2>Upload new Photo</h2>

  <form method="POST" action="{{ route('photo-store') }}" enctype="multipart/form-data">
  @method('POST')
  @csrf
  <input type="hidden" name="album-id" value="{{ $album_id }}">
    <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input name="description" type="text" class="form-control" id="description" placeholder="Enter description">
    </div>
    <div class="form-group">
      <label for="photo">Photo</label>
      <input name="photo" type="file" class="form-control p-1" id="photo">
    </div>
    <div>
      <button type="submit" class="btn btn-primary btn-block">Upload photo</button>
    </div>
  </form>
@endsection