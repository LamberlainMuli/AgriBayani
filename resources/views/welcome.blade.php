<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>AgriBayani</title>

  <!-- Favicon -->
  <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Soft UI Design System -->
  <link type="text/css" href="/assets/css/soft-design-system.min.css" rel="stylesheet">
  <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">

  <!-- for fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>

<body class="bg-light">
  <!--   Core JS Files   -->
  <script crossorigin src="/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script crossorigin src="/assets/js/core/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script crossorigin src="/assets/js/soft-design-system.min.js" type="text/javascript"></script>
  <div class="page-header" style="bottom: 100pt;z-index:-1;"></div>
  <div class="position-absolute w-100 bottom-0 bg-light" style="top: 480pt; bottom: 0; z-index:-1"></div>
  <div class="position-absolute w-100" style="bottom: 100pt; z-index: -1;">
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="moving-waves">
        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(233,236,239,0.40"></use>
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(233,236,239,0.35)"></use>
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(233,236,239,0.25)"></use>
        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(233,236,239,0.20)"></use>
        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(233,236,239,0.15)"></use>
        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(233,236,239,1"></use>
      </g>
    </svg>
  </div>

  <nav class="navbar bg-white navbar-expand-lg fixed-top">
    <a class="navbar-brand h4" href="/"><img src="/assets/img/logo-dark.svg" height=20
        style="margin-right: 5pt;">AgriBayani</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
      aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-sm m-1 bg-gradient-success" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Log In</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="pt-7">
    <div class="masthead mt-6" style="z-index:1;">
      <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-8 align-self-end">
            <img src="/assets/img/logo-dark.svg" alt="Example SVG" width=150 height=auto>
            <h1 class="text-black font-weight-bold mb-3"
              style="font-family: 'Montserrat', sans-serif; font-weight: 900; margin-top: 10px; font-size: 8vw;">
              AgriBayani</h1>
            <p style="font-family: 'Open Sans'; sans-serif; font-size: 1.5vw; font-weight: 500; letter-spacing: 2px;">
              EMPOWERING FARMERS,
              ELEVATING
              ECONOMY</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section pt-0" id="services">
    <div class="container px-4 px-lg-5 mb-5">
      <hr class="divider" />
      <div class="row gx-lg-3 justify-content-center">
        <div class="col-lg-3 col-md-4 text-center">
          <div class="mt-5">
            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
            <h3 class="h4 mb-2">Give life-changing opportunities.</h3>
            <p class="text-muted mb-0">Be an investor and help small-scale farmers grow their business.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <div class="mt-5">
            <!-- <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div> -->
            <h3 class="h4 mb-2">Contribute to economic development.</h3>
            <p class="text-muted mb-0">Be an agent of change and help provide decent work for all.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <div class="mt-5">
            <!-- <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div> -->
            <h3 class="h4 mb-2">Foster connection through growth.</h3>
            <p class="text-muted mb-0">Come together and be a part of our story.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section pt-0" id="about" style="z-index: 1;">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-center mt-5 mb-5">Join our community and become an AgriBayani!</h2>
          <a class="btn btn-lg m-1 bg-gradient-success" href="/register">Get Started!</a>
        </div>
      </div>
    </div>
  </section>



</body>

</html>