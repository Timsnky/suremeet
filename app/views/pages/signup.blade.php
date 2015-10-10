@extends('layouts.template')

@section('content')
    <div class="login">
        <div class="row">
            <div class="col-sm-12">
                <img src="img/logo.jpg">
            </div>
        </div>

        <div class="col-sm-12">
            <h1>Register</h1>
            @include('layouts.partials.errors')
        </div>

        {{ Form::open(['route' => 'signup_path']) }}
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('firstname', 'First Name:') }}
                    {{ Form::text('firstname', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('lastname', 'Last Name:') }}
                    {{ Form::text('lastname', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('organisation', 'Organisation:') }}
                    {{ Form::text('organisation', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Confirm Password:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                </div>
            </div>
        </div>

        <div class="col-sm-offset-5">
            <div class="form-group">
                {{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
            </div>
        </div>

        {{ Form::close() }}
        </div>

    </div>

@stop