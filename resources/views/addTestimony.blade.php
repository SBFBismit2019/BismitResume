@extends('layouts.masterlogin')

@section('content')
<div class="container">
</div>

<div class="container text-center mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 self-align-center">
            <h3>ADD/EDIT PROJECTS</h3>
        </div>
    </div>
    <div class="row">
    
        <div class="col">
            <div class="mt-5 align-self-start">
                <strong><p>Subject</p></strong>
            </div>
            <div class="form-group mt-2">
                <input type="subject" class="form-control" id="inputSubject">
            </div>
        </div>

        <div class="col">
            <div class="mt-5 align-self-start">
                <strong><p>Testimony</p></strong>
            </div>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" rows="5"></textarea>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-g self-align-center">
        <button type="button" class="btn btn-link btn-sm">        
            <img class="img-responsive mt-4" style="max-width:140px;" src="{{asset('images/buttonSubmit.svg')}}" alt="">
        </button>
        </div>
    </div>
</div>




@endsection