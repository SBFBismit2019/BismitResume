<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700,700i|Rubik:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="images/home/bem.png" />
    <title>Bismit</title>
</head>

<body>
    @include('layouts.partials.upBtn')
    <section class="main-page">
        <div class="main-page-in m-0 p-0">
            <nav class="navbar navbar-expand-md bg-transparent">
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                <div class="collapse navbar-collapse justify-content-end" id="main-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3 active">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="/project" class="nav-link inactive">Projects</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="/gallery" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="#" class="nav-link">BEM</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="#" class="nav-link">Hire US!</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="main-title d-flex flex-column justify-content-center align-items-center container-fluid">
                <a href="https://bem.cs.ui.ac.id/bismit-final/"><img class="mb-2" src="images/home/bem.png" alt="" srcset=""></a>
                <h1 class="mb-2">BUSINESS AND PARTNERSHIP BUREAU</h1>
                <h2 class="mb-3">BEM Fasilkom UI 2019</h2>
                <a href="">
                    <button class="btn-lg btn-warning">
                            HIRE US
                        </button>
                </a>
            </div>
        </div>
        <div id="main-carousel" class="carousel slide" data-ride='carousel'>
            <ul class="carousel-indicators">
                <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#main-carousel" data-slide-to="1"></li>
                <li data-target="#main-carousel" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/home/mainpage.png" alt="" srcset="">
                </div>
                <div class="carousel-item">
                    <img src="images/home/mainpage.png" alt="" srcset="">
                </div>
                <div class="carousel-item">
                    <img src="images/home/mainpage.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <section class="who-are-we">
        <div class="who-are-we-in">
            <h1>WHO ARE WE?</h1>
            <div class="who-quote d-flex align-items-center">
                <img class="who-left" src="images/home/quote-left-2.png" alt="" srcset="">
                <h2>We are a group of web developers from Faculty of Computer Science University of Indonesia. As a part of BEM Fasilkom UI, we have created various websites for our happy clients.</h2>
                <img class="who-right" src="images/home/quote-right-2.png" alt="" srcset="">
            </div>
        </div>
    </section>
    <section class="finished-projects">
        <div class="finished-in container d-flex flex-column align-items-center">
            <h1>10+</h1>
            <h2>Finished Projects</h2>
            <h2 id="finished-special">10+ Finished Projects</h2>
            <div class="finished-logo d-flex justify-content-around">
                <img src="images/home/logo-bem.png" alt="" srcset="">
                <img src="images/home/logo-bem (1).png" alt="" srcset="">
                <img src="images/home/logo-bem (2).png" alt="" srcset="">
                <img src="images/home/logo-bem (3).png" alt="" srcset="">
                <img src="images/home/logo-bem (4).png" alt="" srcset="">
            </div>
        </div>
    </section>
    <section class="why-us">
        <div class="container">
            <div class="why-us-title d-flex flex-row justify-content-center">
                <h1>WHY US?</h1>
            </div>
            <div class="row why-us-in d-flex justify-content-center align-items-center m-0 p-0">
                <div class="col-sm- m-0 circle circle-1 rounded-circle d-flex justify-content-center align-items-center">
                    <h2>Strict to Deadline</h2>
                </div>
                <div class="line col-xl-2 col-lg-1 col-md-2 col-sm-1 p-0">
                    <div class="line-in"></div>
                </div>
                <div class="col-sm- m-0 circle circle-2 rounded-circle d-flex justify-content-center align-items-center">
                    <h2>Experienced Developer</h2>
                </div>
                <div class="line col-xl-2 col-lg-1 col-md-2 col-sm-1 p-0">
                    <div class="line-in"></div>
                </div>
                <div class="col-sm- m-0 circle circle-3 rounded-circle d-flex justify-content-center align-items-center">
                    <h2>Lowest Price</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="testimonials-in d-flex flex-column align-items-center">
            <div class="testimonials-title">
                <h1>TESTIMONIALS</h1>
            </div>
        </div>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/home/testimonial1.png" alt="First slide">
                    <div class="quotes">
                        <div class="carousel-caption d-md-block quotes-in d-flex flex-column justify-content-center">
                            <h2>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/home/testimonial1.png" alt="Second slide">
                    <div class="quotes">
                        <div class="carousel-caption d-md-block quotes-in d-flex flex-column justify-content-center">
                            <h2>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/home/testimonial1.png" alt="Third slide">
                    <div class="quotes">
                        <div class="carousel-caption d-md-block quotes-in">
                            <h2>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</h2>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-testimonials" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-testimonials" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="our-skills">
        <div class="our-skills-in">
            <div class="our-skills-title d-flex justify-content-center">
                <h1>OUR SKILLS</h1>
            </div>
            <div class="d-flex justify-content-around our-skills-content">
                <div class="card">
                    <div class="card-body">
                        <img src="images/home/html-5.png" alt="" srcset="" class="card-img-top">
                        <div class="card-title">HTML</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="images/home/css-3.png" alt="" srcset="" class="card-img-top">
                        <div class="card-title">CSS</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="images/home/js.png" alt="" srcset="" class="card-img-top">
                        <div class="card-title">JavaScript</div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-around our-skills-content">
                <div class="card">
                    <div class="card-body">
                        <img src="images/home/laravel-512.png" alt="" srcset="" class="card-img-top">
                        <div class="card-title">Laravel</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="images/home/fi-swluxx-php.png" alt="" srcset="" class="card-img-top">
                        <div class="card-title">PHP</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="images/home/React.js_logo-512.png" alt="" srcset="" class="card-img-top">
                        <div class="card-title">ReactJS</div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-around our-skills-content">
                <div class="card">
                    <div class="card-body">
                        <img src="images/home/bootstrap-7-1175254.png" alt="" srcset="" class="card-img-top">
                        <div class="card-title">Bootstrap</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="images/home/django-icon-0.jpg" alt="" srcset="" class="card-img-top">
                        <div class="card-title">Django</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="images/home/1024px-Python-logo-notext.svg.png" alt="" srcset="" class="card-img-top">
                        <div class="card-title">Python</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="interested m-0 p-0">
        <div class="container d-flex flex-column justify-content-around align-items-center h-100">
            <h1 class="font-weight-bold text-center h1 mb-3 title pb-2">INTERESTED?</h1>
            <div class="row interested-in w-100 d-flex justify-content-center align-items-stretch">
                <div class="col-sm-5 wa">
                    <img class="w-sm-60 w-30 h-auto mx-auto mb-md-3 d-block" src="images/home/phone.png" alt="">
                    <br>
                    <button class="btn-lg btn-light mx-auto d-block px-auto"><a href="https://api.whatsapp.com/send?phone=62812345678&text=Halo%20saya%20ingin%20bekerja%20sama">Nata (+62) 812345678</a></button>
                </div>
                <div class="col-sm-5 www">
                    <img class="w-sm-60 w-30 h-auto mx-auto mb-md-3 d-block" src="images/home/www.png" alt="">
                    <br>
                    <button class="btn-lg btn-light mx-auto d-block px-auto"><a href="#">Hire through website</a></button>
                </div>
            </div>
        </div>
    </section> -->
    @include('layouts.partials.contact')
    @include('layouts.partials.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>

</html>