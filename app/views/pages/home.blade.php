@extends('layouts.default')

@section('content')

    <div class="jumbotron">
        <h1>Welcome to SureMeet</h1>
        <p>
            The place to get information on upcoming presentations by set diginified presenters.
            You can sign up to register to present.
        </p>

        @if (! $currentUser)
            <p>
                {{ link_to_route('signup_path', 'Sign Up', null, ['class' => 'btn btn-lg btn-primary']) }}
            </p>
        @endif
    </div>
@stop
