@extends('layouts.app')

@section('content')
  <div>
    <h3>{{ $photo->title }}</h3>
    <p>{{ $photo->description }}</p>
    
    <form action="{{ route('photo-destroy', $photo->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" name="button" class="btn btn-danger float-right">DELETE</button>
    </form>
    <a href="{{ route('album-show', $photo->album->id) }}" class="btn btn-info">Go Back</a>
    <hr>
    <img src="/storage/albums/{{ $photo->album->id }}/{{ $photo->photo }}" alt="{{ $photo->photo }}" width="100%">
    <hr>

    <small>Size: {{ $photo->size }}</small>
  </div>
@endsection