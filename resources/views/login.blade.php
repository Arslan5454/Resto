@extends('layout')
@section('content')
<h1>User Login</h1>
@if(session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="col-sm-8">
    <form action="login" method="post">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter Email">
            @error('email')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
            @error('password')
            <p style="color:red">{{$message}}</p>
            @enderror  

        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>
@stop