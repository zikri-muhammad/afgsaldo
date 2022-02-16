<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @include('admin.layouts.header')
    <title>saldo.ai</title>
</head>

<body>

    <!-- Side navigation -->
    <div class="sidenav">
        <div class="container ml-2 mt-3">
            <img src="{{ asset('assets/img/logo2.png') }}" style="width: 150px" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="list-group" id="myList" role="tablist">
                        <a class="active" data-toggle="list" href="#home" role="tab">Home</a>
                        <a class="" data-toggle="list" href="#profile" role="tab">Profile</a>
                        <a class="" data-toggle="list" href="#messages" role="tab">Messages</a>
                        <a class="" data-toggle="list" href="#settings" role="tab">Settings</a>
                      </div>
                      
                </div>
            </div>
        </div>
    </div>


    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    @include('admin.layouts.script')
</body>

</html>
