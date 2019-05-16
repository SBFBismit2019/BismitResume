@extends('layouts.masterlogin')

@section('content')
<div class="container">
</div>

<div class="container text-center mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h3>LOG IN ADMIN</h3>
            <form>
                <div class="form-group mt-5">
                    <label for="inputUsername"><strong>Username</strong></label>
                    <input type="username" class="form-control form-control-lg" id="inputUsername">
                </div>
                <div class="form-group mt-2">
                    <label for="inputPassword"><strong>Password</strong></label>
                    <input type="password" class="form-control form-control-lg" id="inputPassword">
                </div>
            </form>
            <button type="button" class="btn btn-link btn-sm">
                <img class="img-responsive mt-4" style="max-width:140px;" src="{{asset('images/buttonLogin.svg')}}" alt="">
            </button>
        </div>
    </div>
</div>




@endsection
