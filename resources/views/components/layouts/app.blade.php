<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Tag pembuka HTML dengan atribut bahasa yang diambil dari pengaturan aplikasi -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Pengaturan meta untuk karakter dan viewport -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Token CSRF untuk keamanan -->

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Judul halaman yang diambil dari pengaturan aplikasi -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Link ke font eksternal -->

    <!-- Scripts -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke CSS Bootstrap terbaru -->

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Link ke JavaScript Bootstrap terbaru -->
</head>

<body>
    <div id="app">
        <!-- Elemen utama aplikasi -->

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <!-- Brand navbar yang mengarah ke halaman utama -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Tombol toggle untuk navbar pada tampilan mobile -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Bagian navbar yang dapat di-collapse -->

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/kendaraan">Jenis Kendaraan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/inputparkir">Input Parkir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/bayarParkir">Bayar Parkir</a>
                        </li>
                    </ul>
                    <!-- Link navigasi di sisi kiri navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <!-- Dropdown untuk user yang sudah login -->

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <!-- Link untuk logout -->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <!-- Form untuk logout -->
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <!-- Link navigasi di sisi kanan navbar -->
                </div>
            </div>
        </nav>

        <main class="py-4">
            {{ $slot }}
        </main>
        <!-- Bagian utama konten halaman -->
    </div>
</body>

</html>
<!-- Tag penutup HTML -->
