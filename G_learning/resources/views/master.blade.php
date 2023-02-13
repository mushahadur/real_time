<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>G-Learning @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}student/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}student/css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}student/css/style.css"/>
</head>
<body>

<header>
    <section class="py-2" style="background-color: #A3D2BE;">
        <div class="container">
            <div class="row text-secondary ">
                <div class="col-md-6">
                    <ul class="nav">
                        <li class=" border-end pe-3 border-white"><a href=""><img  src="{{asset('/')}}student/img/logo.png" alt="logo" style="height:50px;"> </a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="nav float-end" >
                        <li class="nav-item py-2">



                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</header>
<section class="">
    <div class="container bg-secondary" style="height: 500px; width: auto">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <h1 class="text-center">THis si slider</h1>
                </div>
            </div>
        </div>
    </div>

</section>

<h3 class="text-center pt-5">বদলে যাক </h3>
<h3 class="text-center">নতুন কিছু শিখার অবিজ্ তা </h3>

<div class="text-center py-5">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#studentModal">
      শিখতে শুরু করি !
    </button>

</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <form action="">
                        <input type="text" placeholder="Enter the Name" id="name" name="name">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<h3 class="text-center">নতুন কিছু শিখার অবিজ্ তা </h3>



@yield('body')

<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-4">
                <div class="card card-body h-100 bg-dark border-0">
                    <h1>MRK</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet at commodi, consequuntur delectus, deleniti dolorum ea eius facere fuga in laborum nisi nostrum, obcaecati ratione recusandae saepe sit suscipit ut.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-body bg-dark h-100 border-0">
                    <h3>Terms & Conditions</h3>
                    <ul class="navbar-nav">
                        <li><a href="" class="nav-link">PHP With Laravel Framework</a></li>
                        <li><a href="" class="nav-link">Mobile App Development</a></li>
                        <li><a href="" class="nav-link">Responsive Web Design</a></li>
                        <li><a href="" class="nav-link">Professional Digital Marketing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-dark h-100 border-0">
                    <h3>Contact With US</h3>
                    <address>
                        House No - 420, Road No - 520, Dhanmondi, Dhaka - 1215.
                    </address>
                    <h3>Follow Us</h3>
                    <ul class="nav">
                        <li><a href="" class="nav-link"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fa-brands fa-square-twitter"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="text-white mt-4"/>
        <div class="row">
            <div class="col">
                <p class="text-white text-center mb-0">copyright@mushahedur all right reserved.</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('/')}}student/js/jquery-3.6.1.js"></script>
<script src="{{asset('/')}}student/js/bootstrap.bundle.js"></script>

</body>
</html>

