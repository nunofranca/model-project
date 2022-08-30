<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../assets/images/logo-blue.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Dashboard minimal</title>

    <!-- bundle -->
    @vite('resources/css/app.css')
    @yield('css')

</head>

<body>
<main>
    <div class="box-general">
        <div class="header">
            @include('layout.__partials.header')
        </div>
        <div class="sidebar">
            @include('layout.__partials.sidebar')
        </div>
        <div class="container">
            @yield('content')
            @include('layout.__partials.modal-token')
        </div>
    </div>
</main>

@vite('resources/js/app.js')
@yield('js')
</body>

</html>
