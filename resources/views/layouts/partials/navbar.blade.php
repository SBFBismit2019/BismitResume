

<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<script src="{{ asset('js/navbar.js') }}"></script> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">


    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->


    
    </head>
    <body>
    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="100" >
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container" >
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <div class="logo">
                        <img src="{{ asset('images/Biro Bisnis dan Kemitraan.png') }}" alt="Bismit" width=20px height=20px  />
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li >
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="profilepage">About</a>
                    </li>
                    <li>
                        <a href="pricing.html">Projects</a>
                    </li>
                    <li>
                        <a href="pricing.html">Gallery</a>
                    </li>
                    <li>
                        <a href="pricing.html">BEM</a>
                    </li>
                    <li>
                        <a href="/" class="btn btn-danger btn-fill" style="color: white;">Hire Us!</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>



   




</body>

<!--   core js files    -->
<!-- <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.js" type="text/javascript"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <!-- js library for devices recognition
<script type="text/javascript" src="../assets/js/modernizr.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<!-- <script type="text/javascript" src="../assets/js/gaia.js"></script> -->
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>


</html>
