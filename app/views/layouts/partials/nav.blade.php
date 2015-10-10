<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="row">
        <div class="col-sm-12">

        </div>
    </div>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SureMeet</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Schedules</a></li>
                @if ($currentUser)
                    <li><a href="#">Register Presentation</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if ($currentUser)
                    <li><a href="/login">Dashboard</a> </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">{{ $currentUser->firstname }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Presentations</a></li>
                            <li><a href="/login">Settings</a> </li>
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