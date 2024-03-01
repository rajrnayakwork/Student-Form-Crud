<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- Nav-Bar Start -->
    <nav class="navbar navbar-expand-lg" style="background-color: #cff4fc;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">Page Changer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact_us') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('calculate_numbers') }}">Calculate Numbers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nav-Bar End -->
    <div class="alert alert-info d-flex mt-1" role="alert">
        <span class="h4">
            We are on Home Page.
        </span>
        <a href="{{ url()->previous() }}"><button type="button" class="btn btn-info ms-3">Go
                Back</button></a>
    </div>
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Names</li>
        @foreach ($array1 as $row)
            <li class="list-group-item">{{ $row }}</li>
        @endforeach
    </ul>
    <!-- JS Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- JS End -->
</body>

</html>
