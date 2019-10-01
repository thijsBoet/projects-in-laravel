@extends('layouts.app')

@section('content')
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">{{ $album->name }}</h1>
      <p class="lead text-muted">{{ $album->description }}</p>
      <p>
        <a href="/photos/create/{{ $album->id }}}" class="btn btn-primary my-2">Upload photo</a>
        <a href="#" class="btn btn-secondary my-2">Go Back</a>
      </p>
    </div>
  </section>
@endsection