@extends('Backend.Auth.master')
@section('auth_title', 'Forgot Password')
@section('card-header', 'Forgot Password')

@section('card-body')
    {!! Form::open(['method'=>'post', 'route'=>'password.email']) !!}
    {!! Form::label('email', 'Email', ['class'=>'mt-2']) !!}
    {!! Form::email('email', null, [
        'placeholder'=>'Enter you email',
        'class'=>$errors->has('email') ? 'is-invalid form-control mt-2' : 'form-control mt-2']) 
    !!}
    @error('email')
        <p class="text-danger">{{$message}}</p>
    @enderror

    {!! Form::button('Password reset link', ['type'=>'submit', 'class'=>'btn btn-success mt-3 form-control']) !!}
    {!! Form::close() !!}

@endsection