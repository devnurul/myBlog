@extends('backend.auth.layout.master')
@section('page_title', 'Register ')
    
@section('content')
    {!! Form::open(['methor'=>'post', 'route'=>'register']) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class'=> $errors->has('name') ?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    @error('name')
        <p class="text-danger m-0">{{ $message }}</p>
    @enderror
    {!! Form::label('email', 'Email', ['class'=>'mt-3'] ) !!}
    {!! Form::email('email', null, ['class'=> $errors->has('email') ?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    @error('email')
        <p class="text-danger m-0">{{ $message }}</p>
    @enderror
    {!! Form::label('password', 'Password', ['class'=>'mt-3']) !!}
    {!! Form::password('password', ['class'=> $errors->has('password') ?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    @error('password')
        <p class="text-danger m-0">{{ $message }}</p>
    @enderror
    {!! Form::label('password_confirmation', 'Confirm Password', ['class'=>'mt-3']) !!}
    {!! Form::password('password_confirmation', ['class'=> $errors->has('password_confirmation') ?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    <div class="d-grid">
      {!! Form::button('Login', ['type'=>'submit', 'class'=>'btn btn-info mt-3']) !!}  
    </div>
    
    {!! Form::close([]) !!}
    
    <p>Have account? <a href="{{ route('login') }}">Register</a></p>
   
@endsection
