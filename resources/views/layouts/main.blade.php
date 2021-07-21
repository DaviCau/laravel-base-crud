<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ asset("img/favicon.ico") }}">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.css' integrity='sha512-9LMt8yHSTC2NNj7wxs1u0wfc8JsHPz2IO3hPj5ZOVhM60uMHDhWxEzO+Yz9wBCJRoMa4UHItzgdwW4ZxVG2O4g==' crossorigin='anonymous'/> --}}
        <title>DC Comics</title>
    </head>
    <body>
        @include('partials/header')

        <main>
            @yield('main-content')
        </main>

        @include('partials/footer')

        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.js' integrity='sha512-nw7zwODD4UD9u/C/CO+03s7jXvOZDomBNFX3oOq7Xv0stAyxsxhJzVlxsRTgH3AxK3sK2ijMQou2aSIaorp19g==' crossorigin='anonymous'></script>
    </body>
</html>