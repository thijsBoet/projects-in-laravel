@extends('layouts.app')

@section('content')

  <h2>Create new Album</h2>

  <form method="POST" action="{{ route('album-store') }}" enctype="multipart/form-data">
  @method('POST')
  @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input name="description" type="text" class="form-control" id="description" placeholder="Enter description">
    </div>
    <div class="form-group">
      <label for="cover_image">Password</label>
      <input name="cover_image" type="file" class="form-control p-1" id="cover_image">
    </div>
    <div>
      <button type="submit" class="btn btn-warning btn-block">Create Album</button>
    </div>
  </form>
@endsection