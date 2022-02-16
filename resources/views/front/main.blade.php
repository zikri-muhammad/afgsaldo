<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @include('front.layouts.header')
    <title>{{}}</title>
</head>

<body>

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    @include('front.layouts.script')
</body>

</html>
