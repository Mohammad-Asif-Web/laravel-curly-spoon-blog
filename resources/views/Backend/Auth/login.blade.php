@extends('Backend.Auth.master')
@section('auth_title', 'Login')
@section('card-header', 'Sign In To Dashboard')

@section('card-body')
    {!! Form::open(['method'=>'post', 'route'=>'login']) !!}
    {!! Form::label('email', 'Email', ['class'=>'mt-2']) !!}
    {!! Form::email('email', null, [
        'placeholder'=>'Enter you email',
        'class'=>$errors->has('email') ? 'is-invalid form-control mt-2' : 'form-control mt-2']) 
    !!}
    @error('email')
        <p class="text-danger">{{$message}}</p>
    @enderror

    {!! Form::label('password', 'Password', ['class'=>'mt-3']) !!}
    {!! Form::password('password', [
        'placeholder'=>'Enter your password',
        'class'=>$errors->has('password') ? 'is-invalid form-control mt-2' : 'form-control mt-2']) 
    !!}
    @error('password')
        <p class="text-danger">{{$message}}</p>
    @enderror
    {!! Form::button('Sign In', ['type'=>'submit', 'class'=>'btn btn-success mt-3 form-control']) !!}
    {!! Form::close() !!}

    <p><a href="{{route('password.request')}}" class="text-success">Forgot Password?</a></p>
    <p class="h6">Not Registered? <a href="{{route('register')}}" class="text-success">Register Here</a></p>
@endsection
