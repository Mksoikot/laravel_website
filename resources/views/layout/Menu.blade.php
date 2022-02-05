<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <a href="{{url('/')}}"><img style="width:50px; height:50px;margin-left: 30px;" src="{{asset('images/logo.png')}}" alt="LOGO"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          <a class="nav-link" href="{{url('/about')}}">About</a>
          <a class="nav-link" href="{{url('/service')}}">Service</a>
          <a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a>
        </div>
      </div>
    </div>
  </nav>
