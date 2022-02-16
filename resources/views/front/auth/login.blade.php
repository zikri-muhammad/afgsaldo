@extends('front.main')

@section('content')
    <div class="container mt-5">
        <img src="{{asset('assets/img/logo.png')}}" style="width: 182px" alt="">
    </div>
    <div class="col-12">
        <div class="row mt-5">
            <div class="col-4">
                <div class="sidebg">
                    <img src="{{asset('assets/img/sidebg.png')}}" style="width: 420px;" alt="">
                </div>
            </div>
            <div class="col-8">
                <div class="col-6">

                    <h4>Login</h4>
                    <p>Please enter the required credentials to continue</p>
                </div>
                <div class="">

                    <form>
                        <div class="form-group col-6">
                            <label for="email">Registered Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <div class="col-6 text-center mt-3">
                            <p>Don’t have an account yet? <a href=""> Sign Up </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('custom-style')
    <style>
        .sidebg{
            background-image: url('assets/img/sidebg.png');
        }
    </style>
@endpush --}}
