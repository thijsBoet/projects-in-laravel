@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">Go Back</a>
  <h1 class="card-title"><a href="/todo/{{ $todo->id }}">{{ $todo->text }}</a></h1>
  <div class="badge badge-danger"> {{ $todo->due }} </div>
  <hr>
  <p>{{ $todo->body }}</p>
  <hr>
  <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
  {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
@endsection