@extends('frontend.layouts.app')

@section('content')
<   <section class="error-section">
    <img src=" {{ asset('frontend/Brandflaire/assest/images/errro-bg-img.png')}}" alt="" class="img-fluid bg-image d-none d-lg-block d-md-block">
    <img src=" {{ asset('frontend/Brandflaire/assest/images/errro-bg-img-mo.png')}}" alt="" class="img-fluid bg-image d-block d-lg-none d-md-none">
    <div class="container">
        <div class="col">
            <div class="error-content">
                <h1>404</h1>
                <h5>something went wrong...</h5>
                <p>Try reload this page or go back to homepage.</p>
                <a href="{{ route('home') }}" class="btn btn-red">Go Back Home</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
    <style>
        .error-template {
            padding: 40px 15px;
        }

        .error-template .display-1 {
            font-size: 8rem;
            font-weight: 700;
            color: #dc3545;
        }

        .error-actions {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .error-actions .btn {
            margin-right: 10px;
        }
    </style>
@endsection
