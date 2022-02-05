@extends('layout.app')
@section('title','Home Page')


@section('content')
    <div class="container-fluid mt-3 hero-image">
        <div class="row m-0 d-flex justify-content-center">
            <div class="col-md-4 text-center topDiv">
                <h1 class="text-white">Software Engineer</h1>
                <h1 class="text-white">Mobile & Web</h1>
                <button class="btn btn-warning">See More</button>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center p-2">My Service</h2><br>
        <div class="row">
            <div class="col-md-4 p-1">
                <div class="card" style="width: 80%;">
                    <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Service Name</h5>
                      <p class="card-text"> title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card" style="width: 80%;">
                    <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Service Name</h5>
                      <p class="card-text"> title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card" style="width: 80%;">
                    <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Service Name</h5>
                      <p class="card-text">  title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-5">
       <h2 class="text-center p-2">Recent Project</h2><br>
        <div class="row">
            <div class="col-md-3 p-1">
                <div class="card" style="width: 80%;">
                    <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Project Name</h5>
                      <p class="card-text"> title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 p-1">
                <div class="card" style="width: 80%;">
                    <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Project Name</h5>
                      <p class="card-text"> title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 p-1">
                <div class="card" style="width: 80%;">
                    <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Project Name</h5>
                      <p class="card-text">  title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 p-1">
                <div class="card" style="width: 80%;">
                    <img src="{{asset('images/pc.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Project Name</h5>
                      <p class="card-text">  title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>



    <div class="container mb-5 mt-5">
        <h2 class="text-center">Contact With Me</h2><br>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.9080812141133!2d91.16567021423566!3d23.46377988473141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547ed0c3996d43%3A0xc3e77c689b856cc8!2sStation%20Rd%2C%20Comilla!5e0!3m2!1sen!2sbd!4v1644043737147!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

@endsection

