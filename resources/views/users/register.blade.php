@extends('frontend.layouts.master')
@section('title','Login Page')
@section('slider')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="signup-form"><!--sign up form-->
                <h2>New User Signup!</h2>
                <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <input type="text" placeholder="Name" name="name" value="{{old('name')}}"/>
                    <span class="text-danger">{{$errors->first('name')}}</span>

                    <input type="email" placeholder="Email Address" name="email" value="{{old('email')}}"/>
                    <span class="text-danger">{{$errors->first('email')}}</span>

                    <input type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
                    <span class="text-danger">{{$errors->first('password')}}</span>

                    <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                    <span class="text-danger">{{$errors->first('password_confirmation')}}</span>

                    <button type="submit" class="btn btn-default">Signup</button>
                </form>
            </div><!--/sign up form-->
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

@endsection