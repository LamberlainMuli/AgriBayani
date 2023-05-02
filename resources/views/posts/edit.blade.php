<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>AgriBayani | Create Post</title>

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


        <div class="container">
            <div class=" text-center mt-7 ">
                <h1>Edit Post</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mx-auto card mt-2 mx-auto p-4 bg-light">
                    <div class="container">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="_method" value="PUT">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>
                                        Title
                                    </label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter the Title" value="{{ $post->title }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>
                                        Body
                                    </label>
                                    <textarea class="form-control" id="body" placeholder="Enter the Description" name="body">{{ $post->body }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        ClassicEditor.create(document.querySelector('#body')).catch(error => {
            console.error(error);
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>

<!-- 
<!doctype html>
<html lang="en">
    <head>
        <title>
            Create Post</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-12 text-right">
                    <a href="{{ url('posts') }}" class="btn btn-danger">
                        Back
                    </a>
                </div>
            </div>
            <form action="{{route('posts.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ Session::get('success') }}
                        </div>
                        @elseif(Session::has('failed'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ Session::get('failed') }}
                        </div>
                        @endif
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Create Post</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>
                                        Title
                                    </label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter the Title">
                                </div>
                                <div class="form-group">
                                    <label>
                                        Body
                                    </label>
                                    <textarea class="form-control" id="body" placeholder="Enter the Description" name="body"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </body>
</html> -->
