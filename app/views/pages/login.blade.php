@extends('layouts.template')

@section('content')
    <div class="login">
        <div class="row">
            <div class="col-sm-12">
                <img src="img/logo.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Login</h1>
                @include('layouts.partials.errors')
                {{ Form::open(['route' => 'login_path']) }}

                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password',  ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('remember', 'Remember Me')}}
                    {{ Form::checkbox('remember', true)}}
                </div>

                <div class="form-group">
                    {{ Form::submit('Login', ['class' => 'btn btn-primary'])}}
                    {{ link_to('signup', 'Create an Account', array('class' => 'btn btn-primary'))}}
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>

@stop