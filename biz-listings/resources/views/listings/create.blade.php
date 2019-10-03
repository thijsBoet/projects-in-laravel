@extends('layouts.app')

@section('title', 'Create Listings')

@section('content')

<div class="form-group row">
  <div class="col-sm-2"></div>
  <div class="col-sm-10">
    <h1 class="display-4 my-3">Create Listings</h1>
  </div>
</div>

<form post="POST" action="/listings/store">
@method('POST')
@csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="street" class="col-sm-2 col-form-label">Street</label>
    <div class="col-sm-6">
      <input name="street" type="text" class="form-control" id="street" placeholder="Street">
    </div>
    <div class="col-sm-2">
      <input name="number" type="text" class="form-control" id="number" placeholder="Number">
    </div>
    <div class="col-sm-2">
      <input name="addition" type="text" class="form-control" id="addition" placeholder="Addition">
    </div>
  </div>
  <div class="form-group row">
    <label for="phonenumber" class="col-sm-2 col-form-label">Phone number</label>
    <div class="col-sm-10">
      <input name="phonenumber" type="text" class="form-control" id="phonenumber" placeholder="Phone number">
    </div>
  </div>
    <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-2"></div>
  <div class="col-sm-10">
    <button class="btn btn-block btn-dark" type="submit">Create</button>
  </div>
</div>
</form>

@endsection('content')