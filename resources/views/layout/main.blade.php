<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .mynavbar {
            background-color: red;
            padding: 16px;
            text-align: center;
        }

        .mynavbar span {
            color: white;
            font-weight: bold;
        }

        .myfooter {
            background-color: black;
            padding: 16px;
            text-align: center;
        }

        .myfooter span {
            color: white;
            font-weight: bold;
        }

        .mycontents {
            padding: 16px;
        }
    </style>
</head>

<body>

    @include('layout.navbar')

    <main class="mycontents">
        @yield('mycontents')
    </main>

    @include('layout.footer')

</body>

</html>
