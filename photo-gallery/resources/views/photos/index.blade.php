@extends('layouts.app')

@section('content')
  <h2>Albums</h2>
  @if(count($albums)>0)
    <div class="row">
      @foreach($albums as $album)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="/storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->name }}" height="200px">
            <div class="card-body">
              <p class="card-text">{{ $album->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <small class="text-muted">{{ $album->name }}</small>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <h3>No Albums yet.</h3>
  @endif
@endsection
