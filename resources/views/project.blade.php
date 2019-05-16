@extends('layouts.master')

@section('content')

<div class="container">
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-5 mb-4 ml-3">
            <h5 class="font_desc" style="color:white;font-weight:normal;">&#8592 Back to Projects</h5>
        </div>      
    </div>
     
<div class="container mb-5">
    <div class="row">
        <div class="col-md-auto" id="main image">
            <img class="img-responsive" src="images/hmik.JPG" width="566" height="389" 
            style="border:1px solid black;box-shadow: 0px 4px 4px #000000;">
        </div>
        <!-- <div class="col-md-2"></div> -->

        <div class="col-md-5 bg-white" style="border:2px solid #FFFFFF;box-sizing:border-box">
            <h1 class="font_title" style="font-size:36px;">Himpunan Mahasiswa Ilmu Komunikasi FISIP UI</h1>
            <hr style="border:2px solid black;margin-left:0;width:50%;">
            <h5 class="font_desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum debitis nesciunt ut aliquid a quas nobis dolores, facilis alias. Molestias est praesentium ullam. Aperiam soluta quaerat culpa quibusdam animi. Molestiae.<h5>
            <br><br><br>
            <h5 class="font_desc"> http://hmik.fisip.ui.ac.id</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 mt-4 ml-3" id="image1">
            <img class="img-responsive" src="images/profil.png" width="149" height="102" alt="image 1">
        </div>
        <div class="col-md-2 mt-4" id="image2">
            <img class="img-responsive" src="images/hmik.JPG" width="149" height="102" alt="image-2">
        </div>
        <div class="col-md-2 mt-4" id="image3">
            <img class="img-responsive" src="images/hmik.JPG" width="149" height="102" alt="image-3">
        </div>
</div>


@endsection