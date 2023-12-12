<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="clearfix">
                <img src="{{ asset('storage/posts/'.$post->image) }}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
                <h4>{{ $post->title }}</h4>
                <br/>
                <p class="tmt-3">
                    {!! $post->content !!}
                </p>
                <a href="/destination" class="btn btn-dark">Back</a>
              </div>
        </div>
    </div>

    {{-- <div class="container mt-5 mb-5">
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                <hr>
                <h4>{{ $post->title }}</h4>
                <p class="tmt-3">
                    {!! $post->content !!}
                </p>
                <a href="/destination" class="btn btn-dark">Back</a>
            </div>
        </div>
    </div> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


