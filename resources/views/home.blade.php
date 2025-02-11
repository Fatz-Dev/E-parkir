@extends('layouts.app') <!-- Menggunakan layout 'app' sebagai template utama -->

@section('content')
    <!-- Mendefinisikan bagian 'content' dari template -->
    <div class="container"> <!-- Membuat container untuk konten -->
        <div class="row justify-content-center"> <!-- Membuat baris yang kontennya di tengah -->
            <div class="col-md-8"> <!-- Membuat kolom dengan lebar 8 dari 12 grid -->
                <div class="card"> <!-- Membuat card -->
                    <div class="card-header">{{ __('Dashboard') }}</div> <!-- Header card dengan teks 'Dashboard' -->

                    <div class="card-body"> <!-- Body card -->
                        @if (session('status'))
                            <!-- Mengecek apakah ada status di session -->
                            <div class="alert alert-success" role="alert"> <!-- Jika ada, tampilkan alert sukses -->
                                {{ session('status') }} <!-- Menampilkan status dari session -->
                            </div>
                        @endif

                        {{ __('You are logged in!') }} <!-- Menampilkan teks 'You are logged in!' -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection <!-- Menutup bagian 'content' -->
