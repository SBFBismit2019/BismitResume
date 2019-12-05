<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>Gallery</title>
    <link rel="icon" type="image/ico" href="/images/gallery/logoBisMitSmall.png" />
    <!-- File CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/98e0600324.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap OVERRIDE CSS -->
    <!-- <link rel="stylesheet" href="bootstrap-override.css" type="text/css"/> -->
    <!-- BOOTSTRAP TRIAL -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body style="background-color: #f3e4e1;">
    @include('layouts.partials.navbar')
    @include('layouts.partials.upBtn')
    <!--Gallery Header-->
    <section class="gallery">
        <div class="header1 h-100">
            <div class="header2_text">
                <p id="header2_heading">GALLERY</p>
                <hr class="hr1 mt-2" width="400px" >
            </div>
        </div>
        <div class="empty">
        </div>

        <!--gallery-->
        <div class="container container_main">
            <div class="row">
                <!--expanded image and description -->
                <div class="col col-lg-8">
                    <div class="row">
                        <img id="expandedImg" style="width: 80%;" src="/images/gallery/img_nature.jpg">
                    </div>
                    <div class="row empty3"></div>
                    <div class="row">
                        <div class="imgtext">
                            <h2 id="imgtext">Nature</h2>
                            <p id="tulisan" >Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam 1</p>
                        </div>
                    </div>
                </div>
                <!--slider-->
                <div class="container1 col col-lg-4" id="scrollbar">
                    <div class="row justify-content-md-center">
                        <img href="#" class="gambar float-center" src="/images/gallery/img_nature.jpg" title="Nature"
                        alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam"
                        onclick="myFunction(this);">
                    </div>
                    <div class="row justify-content-md-center">
                        <img href="#" class="gambar float-right" src="/images/gallery/img_snow.jpg" title="Snow"
                        alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam 1"
                        onclick="myFunction(this);">
                    </div>
                    <div class="row justify-content-md-center">
                        <img href="#" class="gambar float-right" src="/images/gallery/img_mountains.jpg" title="Mountains"
                        alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam 2"
                        onclick="myFunction(this);">
                    </div>
                    <div class="row justify-content-md-center">
                        <img href="#" class="gambar float-center" src="/images/gallery/img_lights.jpg" title="Lights"
                        alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam 3"
                        onclick="myFunction(this);">
                    </div>
                    <div class="row justify-content-md-center">
                    <img href="#" class="gambar float-center" src="/images/gallery/img_snow.jpg" title="Snow"
                    alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam 4"
                        onclick="myFunction(this);">
                    </div>
                    <div class="row justify-content-md-center">
                    <img href="#" class="gambar float-center" src="/images/gallery/img_nature.jpg" title="Nature"
                    alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam 5"
                    onclick="myFunction(this);">
                    </div>
                </div>
            </div>
        </div>
        <div class="empty2"></div>
    </section>
    @include('layouts.partials.footer')
</body>

<!-- scripts -->
<script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
