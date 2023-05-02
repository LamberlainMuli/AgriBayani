<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Favicon -->
        <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        
        <!-- Icons -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <!-- Soft UI Design System -->
        <link type="text/css" href="/assets/css/soft-design-system.min.css" rel="stylesheet">
        <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">
        
        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    </head>
    <body class="font-sans antialiased bg-light">
        <!--   Core JS Files   -->
        <script crossorigin src="/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script crossorigin src="/assets/js/core/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script crossorigin src="/assets/js/soft-design-system.min.js" type="text/javascript"></script>

    <x-header :bottom="100"/>
    <div class="container mt-6">
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-8">
            <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-bold fs-5">Register</h5>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input name="first_name" type="text" class="form-control" id="first_name" placeholder="firstName">
                    <label for="first_name">First Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input name="last_name" type="text" class="form-control" id="last_name" placeholder="lastName">
                    <label for="last_name">Last Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input name="phone_number"  type="number" class="form-control" id="phone_number" placeholder="phoneNumber">
                    <label for="phone_number">Phone Number</label>
                </div>

                <div class="form-floating mb-3">
                    <input name="location" type="text" class="form-control" id="location" placeholder="location">
                    <label for="location">Location</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" name="is_borrower" id="is_borrower" aria-label="Floating label select example">
                    <option selected>Select an account type</option>
                    <option value="1">Borrower</option>
                    <option value="0">Lender</option>
                    </select>
                    <label for="is_borrower">Select an account type</label>
                </div>


                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="PasswordConfirm">
                    <label for="password_confirmation">Confirm Password</label>
                </div>

                <div class="d-grid">
                    <button class="btn bg-gradient-success" type="submit">Register</button>
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

