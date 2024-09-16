@extends('layout')
@section('title', '404')
@section('conteudo')
<!-- 404 area start -->
<section class="pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-404-inner text-center">
                    <div class="error-img mb-30">
                        <img src="{{ asset('assets/images/error-1.png') }}" alt="#">
                    </div>
                    <h1 class="error-404-title d-none">404</h1>
                    <h2>Page Not Found!</h2>
                    <!-- <h3>Oops! Looks like something going rong</h3> -->
                    <p>Oops! Esta página foi deletada ou modificada.</p>
                    <div class="btn-wrapper">
                        <a href="{{ route('/') }}" class="btn btn-transparent"><i class="fas fa-long-arrow-alt-left"></i> VOLTAR PARA A HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 404 area end -->
@endsection