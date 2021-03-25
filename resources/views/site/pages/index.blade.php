{{-- Master.Blade  --}}

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <title>NewM</title>
</head>

<body>

    @include('site.includes.header.header')
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    </body>

</html>
