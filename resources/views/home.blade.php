@extends('layouts.master')

@section('content')
<div class="container">
</div>

<div class="container text-center mt-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img style="max-width:200px;" class="img-responsive" src="{{ asset('images/dum.png') }}" alt="">
            <h3>Twiggsy</h3>
            <img class="img-responsive" style="max-width:60px;" src="{{asset('images/laravel.svg')}}" alt="">
            <img class="img-responsive" style="max-width:30px;" src="{{asset('images/bt.svg')}}" alt="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum illum omnis, quos tenetur rerum praesentium velit eum provident officiis facilis.</p>
        </div>
    </div>
</div>
@endsection