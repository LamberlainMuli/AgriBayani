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

</head>

<body class="bg-light">
  <!--   Core JS Files   -->
  <script crossorigin src="/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script crossorigin src="/assets/js/core/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script crossorigin src="/assets/js/soft-design-system.min.js" type="text/javascript"></script>
  <div class="page-header" style="bottom: 100pt;z-index:-1;"></div>
  
  <x-header :bottom="100"/>

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
          <a class="btn btn-sm m-1 bg-gradient-success" href="/register/">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login/">Log In</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-8">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-bold fs-5">Sign In</h5>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="password">Password</label>
              </div>

              <div class="form-check mb-3">
                <input name="remember_me" class="form-check-input" type="checkbox" value="" id="rember_me">
                <label class="form-check-label" for="remember_me">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn bg-gradient-success" type="submit">Sign
                  in</button>
              </div>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
