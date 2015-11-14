<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    {{--<link href="css/all.css" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ elixir('css/all.css')}}" rel="stylesheet" type="text/css">--}}

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
            integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
            crossorigin="anonymous"></script>
    <script src="/assets/bower/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/app.js"></script>
    {{--    <script src="{{ elixir('js/app.js')}}"></script>--}}
</head>
<body>
<header role="navigation" class=" row navbar navbar-inverse">
    <div class="container">
        <div class="row">
            <div class="text-muted">
                <a href="/"><div class="navbar-brand">{{Lang::get('Jobs.project')}}</div></a>
                <div>
                    <ul class="nav navbar-nav">
                        <li {{ Request::is('jobs') ? "class=active" : null }}><a href="/jobs">{{Lang::get('Jobs.list_jobs')}}</a></li>
                        <li {{ Request::is('jobs/add') ? " class=active" : null }}><a href="/jobs/add">{{Lang::get('Jobs.add_job')}}</a></li>
                    </ul>

                    <ul class="nav navbar-nav">
                        <li {{ Session::get('lang') == 'en' ? " class=active" : null }}><a href="/{{ Request::path() }}?lang=en">{{Lang::get('Jobs.en')}}</a></li>
                        <li {{ Session::get('lang') == 'ru' ? " class=active" : null }}><a href="/{{ Request::path() }}?lang=ru">{{Lang::get('Jobs.ru')}}</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

</header>
<div class="row content">
    <div class=" row jumbotron">

        <div class="container text-center">
            <div class="span12">
                <h1>@yield('title')</h1>

                <div class="row text-center">
                    <small>{{Lang::get('Jobs.jobs')}} <span class="badge">@yield('count_jobs')</span></small>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="content"> @yield('content')
        </div>
    </div>
</div>

<footer class="footer row navbar navbar-inverse">
    <a href="http://vk.com/bug512"><div class="row text-center text-muted">
        {{Lang::get('Jobs.project_footer')}}
    </div>
    <div class="row text-center text-muted">{{Lang::get('Jobs.created_by')}}
    </div></a>
</footer>
</body>
</html>
