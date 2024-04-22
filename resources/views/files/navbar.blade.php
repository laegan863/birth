<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <a class="navbar-brand" href="#">
      <img src="img/logo.svg" alt="Bootstrap" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="{{route('index')}}">Home</a>
        <a class="nav-link" href="{{route('birthcertificate')}}">Birth Certificate</a>
        <a class="nav-link" href="{{route('deathcertificate')}}">Death Certificate</a>
        <a class="nav-link" href="#">Contact Us</a>
        <a class="nav-link" href="{{route('faqs')}}">FAQs</a>
      </div>
    </div>
  </div>
</nav>