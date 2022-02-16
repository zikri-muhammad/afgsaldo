@extends('admin.main')

@section('content')
    <!-- Page content -->
    <div class="main">

        <div class="header-dashboard">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8">
                        <h3 class="" style="color: blue">Dashboard</h3>
                        <small style="color: blue"> Welcome, Phintech Pte Ltd</small>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                                <form class="">
                                    <input class="input-search" type="search" placeholder="Search">
                                    {{-- <input type="text" class="input-search" name="search" placeholder="search"> --}}
                                    <a href="#" class="ml-2">
                                        <img style="width: 40px;" src="{{ asset('assets/img/ci_notification-dot.png') }}" alt="">
                                    </a>
                                    <a href="#" class="ml-2">
                                        <img style="width: 40px;" src="{{ asset('assets/img/ic_sharp-account-circle.png') }}" alt="">
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-dashboard">
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin-style')
    <style>
        .input-search {
            width: 230px;
            height: 28px;
            background-color: #FFFFFF;
            border: 1px solid #3F80FD;
            box-sizing: border-box;
            border-radius: 30px;
            font-size: 20px;
            background-image: url('assets/img/search.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 40px;
        }

    </style>
@endpush
