<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>About Us</title>
    <link rel="icon" type="image/ico" href="./images/logoBisMitSmall.png" />
    <!-- File CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/98e0600324.js" crossorigin="anonymous"></script>
    <!-- CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap OVERRIDE CSS -->
    <link rel="stylesheet" href="{{asset('css/aboutus-override.css')}}" type="text/css"/>
    <!-- BOOTSTRAP TRIAL -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    @include('layouts.partials.navbar')
    @include('layouts.partials.upBtn')
    <!-- Header Section -->
    <div style="height: 500px;" >
            <div class="parallax h-100">
                <div id="header1_text">
                    <p id="header1_heading">ABOUT US</p>
                    <hr class="mt-2" width="400px">
                    <br>
                    <p class="row col-lg-5 col-md-8 col-sm-12 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra, ipsum eget vulputate varius, lorem ex hendrerit sem, aliquet condimentum est lorem non odio. Mauris non nisi vel ex auctor congue. </p>
                </div>
            </div>
    </div>

    <!-- Team Member Section -->
    <div class="team-member h-100 ">
        <h1 class="content-text" id="team-member">TEAM MEMBER</h1>
        <hr width="370px" noshade>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">

                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-4 mb-4">
                            <div class="card bg-dark card1 bg-dark1 text-white " style="width: 22rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQtN0Z2KxKDuLOHqZaEAI4XPjIiLi5vkhrkRJWzhIP4SFM67bmP" class="card-img-top border1 rounded-circle rounded-circle1 img-fluid center" alt="...">
                                <div class="card-body card-body1">
                                    <p id="nama">Lorem Ipsum</p>
                                    <p id="jabatan">Jabatan</p>
                                    <hr id="garis-card">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-4 mb-4">
                            <div class="card bg-dark card1 bg-dark1 text-white " style="width: 22rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTtFH3uCS0H6bviLyXT-mCN7s3lDfS-SpP7UR_qytf504GjY5P_" class="card-img-top border1 rounded-circle rounded-circle1 img-fluid center" alt="...">
                                <div class="card-body card-body1">
                                    <p id="nama">Lorem Ipsum</p>
                                    <p id="jabatan">Jabatan</p>
                                    <hr id="garis-card">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-4 mb-4">
                            <div class="card bg-dark card1 bg-dark1 text-white " style="width: 22rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSoq5cKc1oL6g3hQ6C6euie2TLbaEK0WqLn8n1yMmsrlxYShFmY" class="card-img-top border1 rounded-circle rounded-circle1 img-fluid center" alt="...">
                                <div class="card-body card-body1">
                                    <p id="nama">Lorem Ipsum</p>
                                    <p id="jabatan">Jabatan</p>
                                    <hr id="garis-card">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-4 mb-4">
                            <div class="card bg-dark card1 bg-dark1 text-white " style="width: 22rem;">
                                <img src="http://nikah1.themesawesome.com/wp-content/uploads/sites/96/2017/11/h1-team-member-6.jpg" class="card-img-top border1 rounded-circle rounded-circle1 img-fluid center" alt="...">
                                <div class="card-body card-body1">
                                    <p id="nama">Lorem Ipsum</p>
                                    <p id="jabatan">Jabatan</p>
                                    <hr id="garis-card">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-4 mb-4">
                            <div class="card bg-dark card1 bg-dark1 text-white " style="width: 22rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLpcZutZJy2ni445NTwoGuQJlcm1Gr56hfZizgW2dQMy1ZkuXY" class="card-img-top border1 rounded-circle rounded-circle1 img-fluid center" alt="...">
                                <div class="card-body card-body1">
                                    <p id="nama">Lorem Ipsum</p>
                                    <p id="jabatan">Jabatan</p>
                                    <hr id="garis-card">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-4 mb-4">
                            <div class="card bg-dark card1 bg-dark1 text-white " style="width: 22rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTeYCURP_EXSTkR-eSYgN41BnOP4kJJCQQEF91yJnSXIKmQw3QX" class="card-img-top border1 rounded-circle rounded-circle1 img-fluid center" alt="...">
                                <div class="card-body card-body1">
                                    <p id="nama">Lorem Ipsum</p>
                                    <p id="jabatan">Jabatan</p>
                                    <hr id="garis-card">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
            
    </div>
    @include('layouts.partials.footer')
</body>

<!-- scripts -->
<script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
