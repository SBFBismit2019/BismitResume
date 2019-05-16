@extends('layouts.master')
@section('content')
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
<style type="text/css">

	.title{
		position: absolute;
		width: 368px;
		height: 293px;
		left: 536px;
		top: 157px;
		font-family: Rubik;
		font-style: normal;
		font-weight: bold;
		font-size: 66px;
		line-height: normal;
		text-align: center;
		color: #292533;
		text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)
}

	.title-underline{
		position: absolute;
		width: 570px;
		height: 9px;
		left: 435px;
		top: 248px;
		background: #292533;
	}

	.image-container{
		position: absolute;
		width: 739px;
		height: 488px;
		left: 118px;
		top: 304px;
	}

	.desc-box{
		position: absolute;
		width: 730px;
		height: 248px;
		left: 118px;
		top: 832px;
		background: #292533;
		border: 3px solid #292533;
		box-sizing: border-box;
	}
	.desc-title{
		position: relative;
		/*width: 739px;
		height: 64px;
		left: 118px;
		top: 862px;*/
		font-family: Muli;
		font-style: normal;
		font-weight: bold;
		font-size: 36px;
		line-height: normal;
		text-align: center;
		color: #FFFFFF;	
	}

	.desc-content{
		position: absolute;
		/*width: 499px;
		height: 197px;
		left: 232px;
		top: 941px;*/
		font-family: Muli;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		line-height: normal;
		text-align: center;color: #FFFFFF;

	}
	
</style>

<!-- <div style="background-color: lightblue;" class=" --><!-- gallery-container"> -->
<h1 class="title">Gallery</h1>

<div class="title-underline"></div>

<div ><img class="image-container" src="{{asset('images/1.jpeg')}}"></div>

<div class="desc-box">
	<h2 class="desc-title">Welcoming Staff</h2>>	
	<p class="desc-content">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
	</p>
</div>



<!-- </div> -->
@endsection