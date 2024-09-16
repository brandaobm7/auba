@extends('layout')
@section('title', '500')
@section('conteudo')
<!-- 500 area start -->
<section class="pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-404-inner text-center">
                    <div class="error-img mb-30">
                        <img src="{{ asset('assets/images/error-2.png') }}" alt="#">
                    </div>
                    <h1 class="error-404-title d-none">500</h1>
                    <h2>Server Error!</h2>
                    <!-- <h3>Oops! Looks like something going rong</h3> -->
                    <p>Oops! Estamos com algum problema interno, volte mais tarde.</p>
                    <div class="btn-wrapper">
                        <a href="{{ route('/') }}" class="btn btn-transparent"><i class="fas fa-long-arrow-alt-left"></i> VOLTAR PARA A HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 500 area end -->
@endsection