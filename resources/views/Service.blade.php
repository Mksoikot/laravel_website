@extends('layout.app')
@section('title','Service Page')

@section('content')

<div class="container" style="margin-top: 75px;">
    <h2 class="text-center bg-dark text-white p-2">Service</h2>
    <div class="row mt-4">
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>
</div>

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name">
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" aria-describedby="mobile">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <input type="textarea" class="form-control" id="message" aria-describedby="mobile">
                  </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
        <div class="col-md-6">
            <h5>Address</h5>
            <p>Niloy Socaity,Station Road,Cumilla</p>
            <p>01622243117</p>
            <p>Mksoikotbhuiyan117@gmail.com</p>
        </div>
    </div>


@endsection
