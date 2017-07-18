<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Material Dashboard by Creative Tim</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!--  Material Dashboard CSS    -->
        <link href="css/material-dashboard.css" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="css/demo.css" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    </head>
    <body>
   
        <div class="wrapper">
             
            <div class="sidebar" data-color="green" data-image="img/sidebar-1.jpg">
                <div class="logo">
                    <a href="#" class="simple-text">
                        {E}schedule
                    </a>
                </div>

                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="active">
                            <a href="dashboard.html">
                                <i class="material-icons">dashboard</i>
                                <p>Minhas turmas</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default navbar-absolute">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <p>Olá @yield('user')!</p>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#">
                                        <i class="material-icons ">settings_power</i> Sair                                     
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="content">
                    <div class="container-fluid">
                        @yield('cards')
                        @yield('content')                    
                    </div>
                </div>
            </div>
        </div>
           
    </body>
    <script src="js/app.js" charset="utf-8"></script>
  <!--   Core JS Files   -->
    <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/material.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="js/material-dashboard.js"></script>
</html>
