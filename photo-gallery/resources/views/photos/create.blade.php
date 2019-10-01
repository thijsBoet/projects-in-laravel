@extends('layouts.app')

@section('content')

  <h2>Upload new Photo</h2>

  <form method="POST" action="{{ route('photo-store') }}" enctype="multipart/form-data">
  @method('POST')
  @csrf
  
    <div class="form-group">
      <label for="name">Title</label>
      <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
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
      <button type="submit" class="btn btn-warning btn-block">Upload photo</button>
    </div>
  </form>
@endsection