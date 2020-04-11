<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaksi Berhasil</title>
        <link rel="stylesheet" href="{{ url('libraries/bootstrap/css/bootstrap.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('style/main.css') }}">
    </head>

    <body>

        <!-- Navbar -->
        <div class="container">
            <nav class="row navbar navbar-expand-lg navbar-light bg-white">
                <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                    <a href="#" class="navbar-brand">
                        <img src="{{ url('images/LOGO.png') }}" alt="">
                    </a>
                </div>
                <ul class="navbar-nav mr-auto d-none d-lg-block">
                    <li>
                        <span class="text-muted">
                       | &nbsp; Bersantailah dan rilex
                    </span>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- end Navbar -->

        <!-- Tidak perlu Header -->

        <!-- Main content -->
        <main>
            <section class="section-success d-flex align-items-center">
                <div class="col text-center">
                    <img src="{{ url('images/success.png') }}" class="pt-5 ml-5 pb-4" width="250px">
                    <h1>Yay! Success</h1>
                    <p>
                        We have sent you email for trip instruction
                        <br> please read it as wel
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-success mt-3 px-5">
                        Home Page
                    </a>
                </div>
            </section>
        </main>
        <!-- end Main content -->


        <script src="{{ url('libraries/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ url('libraries/bootstrap/js/bootstrap.js') }}"></script>

    </body>

</html>

       

