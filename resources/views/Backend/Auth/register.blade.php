@extends('Backend.Auth.master')
@section('auth_title', 'Login')
@section('card-header', 'Register a New Account')

@section('card-body')
    {!! Form::open(['method'=>'post', 'route'=>'register']) !!}
    {!! Form::label('name', 'Name', ['class'=>'mt-2']) !!}
    {!! Form::text('name', null, [
        'placeholder'=>'Enter you name',
        'class'=>$errors->has('name') ? 'is-invalid form-control mt-2' : 'form-control mt-2'
        ]) 
    !!}
    @error('name')
        <p class="text-danger">{{$message}}</p>
    @enderror

    {!! Form::label('email', 'Email', ['class'=>'mt-3']) !!}
    {!! Form::email('email', null, [
        'placeholder'=>'Enter you email',
        'class'=>$errors->has('email') ? 'is-invalid form-control mt-2' :'form-control mt-2'
        ]) 
    !!}
    @error('email')
        <p class="text-danger">{{$message}}</p>
    @enderror

    {!! Form::label('password', 'Password', ['class'=>'mt-3']) !!}
    {!! Form::password('password', [
        'placeholder'=>'Enter your password',
        'class'=>$errors->has('password') ? 'is-invalid form-control mt-2' : 'form-control mt-2'
        ]) 
    !!}
    @error('password')
        <p class="text-danger">{{$message}}</p>
    @enderror

    {!! Form::label('password_confirmation', 'Password Confirmation', ['class'=>'mt-3']) !!}
    {!! Form::password('password_confirmation', [
        'placeholder'=>'Confirm password',
        'class'=>$errors->has('password_confirmation') ? 'is-invalid form-control mt-2' : 'form-control mt-2'
        ]) 
    !!}
    @error('password_confirmation')
        <p class="text-danger">{{$message}}</p>
    @enderror

    {!! Form::button('register', ['type'=>'submit', 'class'=>'btn btn-success mt-3 form-control']) !!}
    {!! Form::close() !!}

    {{-- <p><a href="{{route('password.request')}}" class="text-success">Forgot Password?</a></p> --}}
    <p class="h6 mt-3 text-center">Already Registerd? <a href="{{route('login')}}" class="text-success">Sign In Here</a></p>
@endsection