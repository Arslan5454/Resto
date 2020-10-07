@extends('layout')
@section('content')
    <h1>User Registration</h1>
    <div class="col-sm-8">
    <form action="register" method="post">
  @csrf
    <div class="form-group">
      <label>Name</label>
       <input type="text" name="name" class="form-control" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email"  class="form-control" placeholder="Enter Email">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter Password">
    </div>
    <div class="form-group">
      <label>Contact Number</label>
      <input type="text" name="contactno" class="form-control" placeholder="Enter Number">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
    
    </div>
@stop
