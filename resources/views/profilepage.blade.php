<!doctype html>
<html>
<head>

<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0" id="viewport" name="viewport">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="{{ asset('js/profilepage.js') }}"></script>

<!--Link to import fonts from google-->
<link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href="./assets/css/bootstrap.min.css" rel="stylesheet"> -->

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" type="text/css"> -->
@include('layouts.partials.navbar')
<link rel="stylesheet" href="{{ asset('css/profilepage.css') }}">
<title>About Us | Bismit</title>

</head>

<body>


<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="{{ asset('images/up-arrow.png') }}" width=10px height=10px> </button>


<div class="header" id="header">
    <h1 class="title" id="aboutus">ABOUT <span id="us"></span></h1>
    <!-- <span class="element" data-text1="US" data-text2="BISMIT" data-loop="true" data-backdelay="3000">Berlin</span> -->
    <!-- <hr> -->


</div>



<div class="section">
        
  <div class="text-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4" >
                <div class="title-area" data-aos="fade-right">
                <a href= "https://bem.cs.ui.ac.id/bismit-final/"><h5 class="subtitle text-gray">bem.cs.ui.ac.id</h5></a>
                    <h2>Who we are</h2>
                    
                </div>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="description" style="padding:2em;" data-aos="fade-left">
                    Biro Bisnis dan Kemitraan adalah Biro di <b>BEM Fasilkom UI 2019</b> yang
                    bertugas untuk memenuhi kebutuhan keuangan BEM Fasilkom UI.
                  <br> Program kerja utama kami adalah <b>Project IT. </b><br/>
                </div>
            </div>
        </div>
    </div>
  </div>
    
</div>






<div class="container-fluid" id="team" style="border: none !important;">

  <h1 class="title" style="text-align: center; padding-top:2em; padding-bottom:0;">TEAM MEMBERS</h1>
  <div class="row">
    <div class="col-md-16">
      <div class="col-sm-4" id="membersize"></div>
      <div class="col-sm-4" id="membersize" >
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
                <img class="imagemember" src="{{ asset('images/nata.jpg') }}" alt="Nata"> 
            
            </div>
            <h4 id="thumbnail-label">M. Fachry Nataprawira</h4>
            <p id="job">&nbsp;Project Leader</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-md-16" >
      <div class="col-sm-4" id="membersize">
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
              <img class="imagemember" src="{{ asset('images/ray.jpg') }}" alt="Ray Azrin"/>
            </div>
            <h4 id="thumbnail-label">Ray Azrin Karim</h4>
            <p id="job">&nbsp;Front End Engineer</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-16" >
      <div class="col-sm-4" id="membersize">
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
              <img class="imagemember" src="{{ asset('images/dhafin.png') }}" alt="Dhafin"/>
            </div>
            <h4 id="thumbnail-label">Razaqa Dhafin Hafiyyan</h4>
            <p id="job">&nbsp;Front End Engineer</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-16" >
      <div class="col-sm-4" id="membersize">
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
              <img class="imagemember" src="{{ asset('images/alis.jpg') }}" alt="Alya Isti"/>
            </div>
            <h4 id="thumbnail-label">Alya Isti Safira</h4>
            <p id="job">&nbsp;Front End Engineer</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="row">

    <div class="col-md-16" >
      <div class="col-sm-4" id="membersize">
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
              <img class="imagemember" src="{{ asset('images/khalis.jpg') }}" alt="Khalis"/>
            </div>
            <h4 id="thumbnail-label">Khalis Murfid</h4>
            <p id="job">&nbsp;Front End Engineer</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-16" >
      <div class="col-sm-4" id="membersize">
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
              <img class="imagemember" src="{{ asset('images/huda.jpg') }}" alt="Huda"/>
            </div>
            <h4 id="thumbnail-label">Mushaffa Huda</h4>
            <p id="job">&nbsp;Back End Engineer</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-16" >
      <div class="col-sm-4" id="membersize">
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
              <img class="imagemember" src="{{ asset('images/zuhdi.jpg') }}" alt="Zuhdi"/>
            </div>
            <h4 id="thumbnail-label">M. Zuhdi Zamrud</h4>
            <p id="job">&nbsp;Back End Engineer</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="row">
    <div class="col-md-16" >
      <div class="col-sm-4" id="membersize">
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
              <img class="imagemember" src="{{ asset('images/ayasha.jpg') }}" alt="Ayasha"/>
            </div>
            <h4 id="thumbnail-label">Ayasha Nadira Widyadhana</h4>
            <p id="job">&nbsp;Front End Engineer</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-16" >
      <div class="col-sm-4" id="membersize">
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
              <img class="imagemember" src="{{ asset('images/afi.jpg') }}" alt="Ardiaf Rizky"/>
            </div>
            <h4 id="thumbnail-label">Ardiaf Rizky Aulia</h4>
            <p id="job">&nbsp;Front End Engineer</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-16" >
      <div class="col-sm-4" id="membersize">
        <div class="thumbnail">
          <div class="caption text-center">
            <div class="position-relative">
              <img class="imagemember" src="{{ asset('images/tolhas.jpg') }}" alt="Tolhas"/>
            </div>
            <h4 id="thumbnail-label">Tolhas Parulian Jonathan</h4>
            <p id="job">&nbsp;Front End Engineer</p>
            <!-- <hr id="memberline"> -->
            <div class="thumbnail-description smaller">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
          </div>
          <div class="caption card-footer text-center">
            <ul class="list-inline">
              <!-- <li><i class="people lighter"></i>&nbsp;7 Active Users</li> -->
              <li><a href="https://instagram.com/"><img src="{{ asset('images/instagram-logo.png') }}" alt="Instagram" width=20px height=20px  /></a></li>
              <li></li>
              <!-- <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>


  </div>

  


  


  

</div>



<!-- <div class="row">

  <div class="col-sm-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7848.43720388178!2d106.82418619072818!3d-6.363971873711031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1d3cd6ed561db12!2sPerpustakaan+Fakultas+Ilmu+Komputer!5e0!3m2!1sid!2sid!4v1539873390725" 
        id="map"  frameborder="0" allowfullscreen></iframe>
        <h2 class="title" style="color:black"> LOCATION </h2>
    <img src="{{ asset('images/placeholder.png') }}" style="object-fit: contain; width:10%; padding:5px;">
    <p style="color:black;"> Faculty of Computer Science <br>Universitas Indonesia<br/></p>
  </div>



</div> -->

<!-- <div class="container text-center mt-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img style="max-width:200px;" class="img-responsive" src="{{ asset('images/dum.png') }}" alt="">
            <h3>WEH</h3>
            <img class="img-responsive" style="max-width:60px;" src="{{asset('images/laravel.svg')}}" alt="">
            <img class="img-responsive" style="max-width:30px;" src="{{asset('images/bt.svg')}}" alt="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum illum omnis, quos tenetur rerum praesentium velit eum provident officiis facilis.</p>
        </div>
    </div>
</div> -->
</body>

<script>
AOS.init({
  duration: 1200,
})
</script>


@extends('layouts.partials.footer')
</html>




