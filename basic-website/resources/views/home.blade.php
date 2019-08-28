@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident porro, odio sequi hic, at ipsum eligendi cupiditate omnis eaque quam alias accusamus harum totam repellat inventore quasi quidem voluptatibus reprehenderit!</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar parent</p>
@endsection