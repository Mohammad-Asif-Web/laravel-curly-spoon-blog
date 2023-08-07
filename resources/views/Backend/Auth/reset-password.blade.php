@extends('Backend.Auth.master')
@section('auth_title', 'Reset Password')
@section('card-header', 'Reset Your Password')

@section('card-body')
    {!! Form::open(['method'=>'post', 'route'=>'password.store']) !!}

    <!-- Password Reset Token -->
    {{-- <input type="hidden" name="token" value="{{ $request->route('token') }}"> --}}
    {!! Form::hidden('token', $request->route('token')) !!}

    {{-- email --}}
    {!! Form::label('email', 'Email', ['class'=>'mt-2']) !!}
    {!! Form::email('email', $request->email, [
        'placeholder'=>'Enter you email',
        'class'=>$errors->has('email') ? 'is-invalid form-control mt-2' : 'form-control mt-2']) 
    !!}
    @error('email')
        <p class="text-danger">{{$message}}</p>
    @enderror
    {{-- password --}}
    {!! Form::label('password', 'New Password', ['class'=>'mt-3']) !!}
    {!! Form::password('password', [
        'placeholder'=>'Enter new password',
        'class'=>$errors->has('password') ? 'is-invalid form-control mt-2' : 'form-control mt-2']) 
    !!}
    @error('password')
        <p class="text-danger">{{$message}}</p>
    @enderror
    {{-- confirm password --}}
    {!! Form::label('password_confirmation', 'Password Confirmation', ['class'=>'mt-3']) !!}
    {!! Form::password('password_confirmation', [
        'placeholder'=>'Confirm password',
        'class'=>$errors->has('password_confirmation') ? 'is-invalid form-control mt-2' : 'form-control mt-2'
        ]) 
    !!}
    @error('password_confirmation')
        <p class="text-danger">{{$message}}</p>
    @enderror

    {!! Form::button('Reset Password', ['type'=>'submit', 'class'=>'btn btn-success mt-3 form-control']) !!}
    {!! Form::close() !!}

@endsection
