@extends('layouts.master')
@section('content')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    
    <style>
        .containermaster{
            background-color: #F2E4E1;
        }

        .title{
        font-family: Rubik;
        font-style: normal;
        font-weight: bold;
        font-size: 66px;
        text-align: center;
        color: #292533;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)
        }

        .title-underline{
            height: 9px;
            background: #292533;
        }

        .space{
            background-color: #F2E4E1;
        }

        .img-dec{
            width: 166px;
            height: 110px;
        }

        .img-inc{
            width:730px;
            
        }

        .scroller{
            height:550px;
            width: 210px;
            overflow:auto;
            
        }

        .back-purp{
            background:#292533;
        }

        .wrapper{
                height: 100%;
                width: 100%;
        }

        .heroslider{
            height: 0;
            width: 0;
        }

        @media only screen and (max-width:600px){
            .wrapper{
                height: 0;
                width: 0;
                overflow: hidden;
            }

            .heroslider{
                height:100%;
                width:100%;
            }
        }
    </style>
   

<body>
    

     <div class="containermaster">

        <div class=" jumbotron jumbotron-fluid text-center space" >
            <div class="container text-center">
                <h1 class="display-1 title">GALLERY</h1>
                <div class="row mb-2">
                    <div class="col"></div>
                    <div class="lead col-6 title-underline"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>

        <!-- content -->
        <div class="container text-white wrapper">
            <div class="row">
                <!-- big picture container -->
                <div class="col-8 mb-5">
                    <div class="tab-content">
                            <div class="tab-pane active" id="satu">
                                <div class="card border-0 back-purp">
                                    <span class="pb-5 space" >
                                        <img src="{{asset('images/1.jpeg')}}" alt="" class="img-fluid img-inc">
                                    </span>
                                    <div class="card-body">
                                        <h3 class="card-title text-center">Kursi</h3>
                                        <p class = "card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="dua">
                                <div class="card border-0 back-purp">
                                    <span class="pb-5 space" >
                                        <img src="{{asset('images/2.jpeg')}}" alt="" class="img-fluid img-inc">
                                    </span>
                                    <div class="card-body">
                                        <h3 class="card-title text-center">Orang</h3>
                                        <p class = "card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tiga">
                                <div class="card border-0 back-purp">
                                    <span class="pb-5 space" >
                                        <img src="{{asset('images/3.jpeg')}}" alt="" class="img-fluid img-inc">
                                    </span>
                                    <div class="card-body">
                                        <h3 class="card-title text-center">Biru</h3>
                                        <p class = "card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id = "empat">
                                <div class="card border-0 back-purp">
                                        <span class="pb-5 space" >
                                            <img src="{{asset('images/4.jpg')}}" alt="" class="img-fluid img-inc">
                                        </span>
                                        <div class="card-body">
                                            <h3 class="card-title text-center">Pink</h3>
                                            <p class = "card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id = "lima">
                                <div class="card border-0 back-purp">
                                    <span class="pb-5 space" >
                                        <img src="{{asset('images/5.jpeg')}}" alt="" class="img-fluid img-inc">
                                    </span>
                                    <div class="card-body">
                                        <h3 class="card-title text-center">Garis-Garis</h3>
                                        <p class = "card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id = "enam">
                                <div class="card border-0 back-purp">
                                    <span class="pb-5 space" >
                                        <img src={{asset('images/6.jpeg')}} alt="" class="img-fluid img-inc">
                                    </span>
                                    <div class="card-body">
                                        <h3 class="card-title text-center">Abstrak</h3>
                                        <p class = "card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- space -->
                <div class="col-1"></div>

                <!-- picture thumbnail -->
                <div class="col-3">
                <nav class="nav justify-content-center scroller">
                    <a class="nav-link active" href= "#satu" data-toggle="tab">
                        <img src="{{asset('images/1.jpeg')}}" class="img-dec" alt="">
                    </a>
                    <a class="nav-link" href= "#dua" data-toggle="tab">
                        <img src="{{asset('images/2.jpeg')}}" class="img-dec" alt="">
                    </a>
                    <a class="nav-link" href= "#tiga" data-toggle="tab">
                        <img src="{{asset('images/3.jpeg')}}" class="img-dec" alt="">
                    </a>
                    <a class="nav-link" href= "#empat" data-toggle="tab">
                        <img src="{{asset('images/4.jpg')}}" class="img-dec" alt="">
                    </a>
                    <a class="nav-link" href= "#lima" data-toggle="tab">
                        <img src="{{asset('images/5.jpeg')}}" class="img-dec" alt="">
                    </a>
                    <a class="nav-link" href= "#enam" data-toggle="tab">
                        <img src={{asset('images/6.jpeg')}} class="img-dec" alt="">
                    </a>
                </nav>
                </div>
            </div>
        </div> 

        <!-- image carousel -->
        <div class="heroslider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('images/1.jpeg')}}" class="d-block w-100 " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/2.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/3.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/4.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/5.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src={{asset('images/6.jpeg')}} class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div> 

    </div>
     
        


            


    		<!-- <div class="row" style = "background:lightblue">
    			<div class="col-md">col-md</div>
    			<div class="col-md-8">col-md</div>
    			<div class="col-md">col-md</div>
    		</div>

    		<div class="row justify-content-md-center">
    			<div class="col-md-2 order-">1 col-md-2</div>
    			<div class="col-md-2 order-1">2 col-md-2</div>
    			<div class="col-md-2 ">3 col-md-2</div>
    		</div> -->
    	



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
})
    </script>
  @endsection