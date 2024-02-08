<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Say Goodbye!</title>
</head>

<body>
    <header class="main-header fixed-top mb-5" style="background:white;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light" style="margin-top: 5px;">
                <img src="assets/img/topz.png" width="90">
                <!-- <span style="font-size:30px;font-weight: 500;margin-top: 5px;">AI</span>&nbsp;<span class="text-primary" style="font-size:30px;font-weight: 500;margin-top: 5px;">Scribbler</span> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto topnav">
                        <li class="nav-item">
                            <a class="nav-link p-4" href="{{url('/')}}" style="font-weight: 700;color: #000000;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-4" href="{{url('/feature')}}" style="font-weight: 700;color: #000000;">FEATURE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-4" href="{{url('/pricing')}}" style="font-weight: 700;color: #000000;">PRICING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-4" href="{{url('/usecase')}}" style="font-weight: 700;color: #000000;">USE CASE</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn  btn-primary text-white" type="button" href="{{url('/login')}}" style="color:black;font-weight:600;margin-top:12px;margin-left:10px;">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary text-white" type="button" href="{{url('/login')}}" style="margin-left:10px; margin-top: 12px;font-weight:600;">TRY FOR FREE</a>
                        </li>

                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>

    <section class="content mt-5">
        <div class="container mt-5">
            <div class="row">
                <h2 class="text-center mb-5" style="font-weight:700;">Your Bestfriend Awaits You On The Other Side !</h2>
                <div class="col-md-2">

                    <img src="assets/img/AI.jpeg" style="margin-top: 200px;" alt="" height=200px width=200px;>
                </div>
                <div class="col-md-8">

                    <form action="" method="POST" style="width: 70%; display:block; margin-left:auto;margin-right:auto;background-color:#ffffff;border: radius 20px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);padding:20px;">
                        <h3 class="text-center" style="font-weight:500;">Create an Account</h3>
                        <div class="row">

                            <div class="col-md-6">
                                <label for="Name" class="form-label">First Name</label><br>
                                <input type="text" class="form-control" placeholder="First Name" id="Name">
                            </div>
                            <div class="col-md-6">
                                <label for="Name-2" class="form-label">Last Name</label><br>
                                <input type="text" class="form-control" placeholder="Last Name" id="Name-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="Email" class="form-label">Email</label><br>
                                <input type="email" class="form-control" placeholder="Email" id="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="Password" class="form-label">Password</label><br>
                                <input type="password" class="form-control" placeholder="Password" id="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for=" Confirm Password" class="form-label">Confirm Password</label><br>
                                <input type="password" class="form-control" placeholder=" Confirm Password" id="Confirm Password ">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-md-2">
                    <img src="assets/img/rr.jpeg" style="margin-top: 200px;" alt="" height=200px width=200px;>
                </div>
            </div>
        </div>

    </section>
</body>

</html>