<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">SureMeet</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/schedules">Schedules</a></li>
                @if ($currentUser)
                    <li><a href="/register_presentation">Register Presentation</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if ($currentUser)
                    @if($currentUser->access_level < 1)
                        <li><a href="/dashboard">Dashboard</a> </li>
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">{{ $currentUser->firstname }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/mypresentations">My Presentations</a></li>
                            @if($currentUser->access_level < 2)
                                <li><a href="/settings">Settings</a> </li>
                            @endif
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="/login">Login</a> </li>
                @endif
            </ul>
        </div>
    </div>
</nav>