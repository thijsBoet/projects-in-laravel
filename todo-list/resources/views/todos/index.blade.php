@extends('layouts.app')

@section('content')
  @if(count($todos) > 0)
    @foreach($todos as $todo)
      <div class="card mt-3">
        <div class="card-body">
          <h3 class="card-title"><a href="todo/{{ $todo->id }}"> {{ $todo->text }}</a> <span class="badge badge-danger"> {{ $todo->due }} </span></h3>
        </div>
      </div>
    @endforeach
  @endif
@endsection