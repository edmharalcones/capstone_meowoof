<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
      <div class="navbar-brands" >
        <a class="nav-link" href="{{ route('welcome') }}" ><img src="resources/logo.png" class="logo"></a>
      </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown"  style="margin-right: 40px;">
          <ul class="navbar-nav" style="display:flex; justify-content:end;">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('pets') }}">Pets</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('petcare') }}">Pet Care</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('donate') }}" >Donate</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('review') }}" >Review</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About the Shelter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('faq') }}" >FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}" >Contact</a>
              </li>
              <li class="nav-item">
                <div class="container">
                  <div class="row">
                    <div class="col-1 p-0"><img src="resources/pin.png" class="navimg"></div>
                      <div class="col p-0 text-nowrap"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#mymodal">Location</a></div>
                  </div>
                </div>
              </li>
          </ul>
      </div>
  </div>
</nav>