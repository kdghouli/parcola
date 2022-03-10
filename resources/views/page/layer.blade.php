<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    {{-- <link href="{{ mix('css/theme.css') }}" type="text/css" rel="stylesheet"/> --}}
    <title>KATEC</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> --}}


</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">PARC MMR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('vhl.index') }}">Flotte
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/agence">Agence</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cumul">Cumul</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vhl/create">Ajouter</a>
                    </li>

                    <li class="nav-item register-btn reg-login-btn" data-toggle="modal" data-target="#register-modal">
                        <a class="btn btn-info nav-link" href="" data-toggle="modal"
                            data-target="#register-modal">Register</a>
                    </li>
                    <li class="nav-item reg-login-btn" data-toggle="modal" data-target="#login-modal">
                        <a class="btn btn-primary text-weight nav-link" href="#">login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container intro-container mt-5">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-9">



                @yield('content')

            </div>
            <!-- Blog Post -->


            <!-- Sidebar Widgets Column -->
            <div class="col-md-3">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Camion </a>
                                    </li>
                                    <li>
                                        <a href="#">Voiture</a>
                                    </li>
                                    <li>
                                        <a href="#">Velomoteur </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Chariots</a>
                                    </li>
                                    <li>
                                        <a href="#">Autre</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; KATEC 2021</p>
        </div>
        <!-- /.container -->
    </footer>
    <!--modals-->
    <!--register-->
    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form action="/examples/actions/confirmation.php" method="post">
                            <h2 class="text-center">Create New Account</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="firstname" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="lastname" required="required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="email" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                            </div>
                            <div class="clearfix">
                                <a href="#" class="pull-right">Forgot Password?</a>
                            </div>
                        </form>
                        <p class="text-center">having account ?
                            <strong class="switch-tologin-modal"><a href="#">Login</a></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login-->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form action="/examples/actions/confirmation.php" method="post">
                            <h2 class="text-center">Log in</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Log in</button>
                            </div>
                            <div class="clearfix">
                                <a href="#" class="pull-right">Forgot Password?</a>
                            </div>
                        </form>
                        <p class="text-center"><a class="switch-toregister-modal" href="#">Create an Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modals-->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

    {{-- <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('.switch-tologin-modal').on('click', function() {
                $('#register-modal').modal('hide');
                $('#login-modal').modal('show');
            });
            $('.switch-toregister-modal').on('click', function() {
                $('#login-modal').modal('hide');
                $('#register-modal').modal('show');
            })
        });
    </script>
</body>

</html>
