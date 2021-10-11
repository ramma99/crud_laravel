@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-uppercase">{{ __('Hallo! Selamat Datang Di Website Kami') }}</div>

                <div class='card-body'>
                    <div class="portfolio-caption">
                        <div class="text-center portfolio-caption-heading">LEGREK.COM</div>
                        <div class="text-center portfolio-caption-subheading text-muted mt-3">
                            Untuk Melihat Fitur-Fitur Yang Lainnya Silahkan Melakukan Login Terlebih Dahulu, Jika Belum Mempunyai Akun
                            Silahkan Registrasi
                        </div>
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="btn btn-primary">Lanjut</a>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>

    @endsection