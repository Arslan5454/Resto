@extends('layout')
@section('content')
<h1>User Registration</h1>
<div class="col-sm-8">
    <form action="register" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name">
            @error('name')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter Email">
            @error('email')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password" value="{{old('password')}}">
            <p style="color:red">{{$errors->first('password')}}</p>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password" value="{{old('cpassword')}}">
            <p style="color:red">{{$errors->first('cpassword')}}</p>
        </div>
        <div class="form-group">
            <label>Contact Number</label>
            <input type="text" name="contactno" class="form-control" onkeyup="if (/\D/g.test(this.value)) 
            this.value = this.value.replace(/\D/g,'')" onKeyPress="if(this.value.length==11) return false;"  placeholder="Enter Number" value="{{old('cpassword')}}">
            <p style="color:red">{{$errors->first('contactno')}}</p>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>

</div>
@stop