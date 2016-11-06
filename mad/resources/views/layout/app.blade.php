<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen" title="no title">

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"> AppName</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">

                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul>
                                <a href="#"><li>Teste</li></a>
                                <a href="#"><li>Teste</li></a>
                                <a href="#"><li>Teste</li></a>
                                <a href="#"><li>Teste</li></a>
                                <a href="#"><li>Teste</li></a>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <div id="wrapper">
                                    @yield('content')
                                </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </body>
</html>
