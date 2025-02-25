@extends('base.main')

@section('title')
    App Dsahboard
@endsection

@section('content')
    <div class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                    <h3 class="mb-3">Hello,</h3>
                    <h4 class="mb-3">Welcome, {{ $name }}</h4>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-primary btn-sm" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
