<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>AgriBayani | Posts</title>

        <!-- Favicon -->
        <link
        href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

        <!-- Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Icons -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link
        rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- Soft UI Design System -->
        <link type="text/css" href="/assets/css/soft-design-system.min.css" rel="stylesheet">
        <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">

    </head>

    <body
        class="bg-light">
        <!--   Core JS Files   -->
        <script crossorigin src="/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script crossorigin src="/assets/js/core/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script crossorigin src="/assets/js/soft-design-system.min.js" type="text/javascript"></script>


        @include('layouts.navigation')
        <x-header :bottom="100"/>

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7 mt-5">
                    <div class="card-transparent">
                        <div class="rounded-top text-white d-flex flex-row transparent">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="{{ asset('storage/' . auth()->user()->picture_url) }}" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                            </div>
                        </div>
                        <div class="container p-4 pb-3 text-black">
                            <div class="row w-100 m-0">
                                <div class="col-8">
                                    <div class="row w-100">
                                        <h4 class="mb-0">{{auth()->user()->first_name}}
                                            {{auth()->user()->last_name}}</h4>
                                    </div>

                                    <div class="row w-100 m-0">
                                        <span class="w-auto badge bg-gradient-success text-uppercase text-xs font-weight-bold mb-2">
                                            <i class="bi bi-geo-alt-fill mr-4" style="margin-right: 4pt;"></i>
                                            {{auth()->user()->location}}</span>
                                    </div>
                                </div>
                                <div class="col-4 text-right">
                                    <button class="btn" style="background-color:white;">
                                        <a href="{{ route('posts.create') }}">
                                            Post
                                        </a>
                                    </button>
                                    <button class="btn" style="background-color:white;">
                                        <a href="{{ route('profile.edit') }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </button>
                                </div>
                                <div class="row w-100">
                                    <div class="progress-wrapper w-100">
                                        <div class="progress-info">
                                            <div class="progress-percentage" style="text-align: right;">
                                                <span class="text-sm font-weight-bold">₱{{auth()->user()->borrower->goal_amount-auth()->user()->borrower->amount_received}}
                                                    left</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress bg-white w-100">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{auth()->user()->borrower->amount_received*100/max(1,auth()->user()->borrower->goal_amount)}}%;"></div>
                            </div>
                        </div>
                        <div class="container p-4 pt-1 pb-0 text-black">
                            <div class="card p-4">
                                <div class="mb-3">
                                    <div class="p-4">
                                        <h4>
                                            About
                                        </h4>
                                        <br>
                                        <p class="font-italic mb-1">{{auth()->user()->borrower->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach (auth()->user()->borrower->posts()->orderBy('created_at', 'desc')->get() as $post)
                        <div class="container mt-5">
                            <div class="row w-100 m-0">
                                <div class="col-sm-12 p-0">
                                    <div class="row w-100 m-0">
                                        <div class="card m-0">
                                            <div class="card-header pb-0">
                                                <div class="row w-100 m-0">
                                                    <div class="author align-items-center p-0">
                                                        <div class="col-s-8 w-40">
                                                            <img src="{{asset('storage/' . auth()->user()->picture_url) }}" class="avatar shadow mb-4">
                                                            <div class="name ps-3 d-inline-block">
                                                                <span>
                                                                        <strong>{{auth()->user()->first_name}}
                                                                            {{auth()->user()->last_name}}</strong>
                                                                </span>
                                                                <div class="stats">
                                                                    <small>{{ $post->created_at->format('F j, Y') }}</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-s-4 w-60 text-right">
                                                            <button class="btn w-20 bg-light">
                                                                <a href="{{ route('posts.edit', $post->id) }}">
                                                                  <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                            </button>
                                                            <button class="btn w-20 bg-light">
                                                                <a href="{{ route('posts.destroy', $post->id) }}">
                                                                  <i class="bi bi-trash3-fill"></i>
                                                                </a>
                                                            </button>
                                                        </div>

                                                    </div>
                                                    <div class="card-body pb-5">
                                                        <h4><strong>{{ $post->title }}</strong></h4>
                                                         {!! $post->body !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

