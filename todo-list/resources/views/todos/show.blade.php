@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">Go Back</a>
  <h1 class="card-title"><a href="todo/{{ $todo->id }}">{{ $todo->text }}</a></h1>
  <div class="badge badge-danger"> {{ $todo->due }} </div>
  <hr>
  <p>{{ $todo->body }}</p>
@endsection