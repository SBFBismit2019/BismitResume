@extends('layouts.masterlogin')

@section('content')
<div class="container">
</div>

<div class="container text-center mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 self-align-center">
            <h3>LOG IN ADMIN</h3>
            <div class="mt-5">
                <strong><p>Username</p></strong>
            </div>
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="mt-2 align-self-start">
                <strong><p>Password</p></strong>
            </div>
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>
            <img class="img-responsive mt-4" style="max-width:140px;" src="{{asset('images/buttonLogin.svg')}}" alt="">
        </div>
    </div>
</div>




@endsection