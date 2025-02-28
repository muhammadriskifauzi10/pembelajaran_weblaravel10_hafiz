<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>

    @include('layout.navbar')

    <main class="mycontents">
        @yield('mycontents')
    </main>

    @include('layout.footer')

</body>

</html>
