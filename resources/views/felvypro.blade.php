<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/felvypro.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <div class="utama">
        <h1>LINCAH DAN SEHAT ADALAH KENYAMANAN SI MUNGIL</h1>
          <h2>Si Mungil akan merasa nyaman jika kita rawat dengan sepenuh hati. Kenyamanannya bisa dilihat dari tingkah lakunya yang lincah dan gesit</h2>
    </div>
    <div class="tentang_felvy">
        <header>TENTANG FELVY</header>
        <p>Hadirnya kami membantu Anda merawat SI Mungil. Percayakan tubuh lembutnya kepada kami</p>
        <h2>Membantu Anda</h1>
         <a class="btn-pelatihan" type="button" data-bs-toggle="modal" data-bs-target="#modalPelatihan">
           <img src="/img/pelatihan.png" alt="">
           <h1>Pelatihan</h1>
         </a>
                <!-- Modal pelatihan -->
                <div class="modal-dialog ">

                <div class="modal fade" id="modalPelatihan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <!-- Vertically centered modal -->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pelatihan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
                {{-- end modal pelatihan --}}
            <a class="btn-kesehatan" type="button" data-bs-toggle="modal" data-bs-target="#modalKesehatan">
            <img src="/img/kesehatan.png" alt="">
            <h1>Kesehatan</h1>
            </a>
            <!-- Modal kesehatan -->
            <div class="modal-dialog ">

                <div class="modal fade" id="modalKesehatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <!-- Vertically centered modal -->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kesehatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            {{-- end modal kesehatan --}}
         <a class="btn-penitipan" type="button" data-bs-toggle="modal" data-bs-target="#modalPenitipan">
           <img src="/img/penitipan.png" alt="">
           <h1>Penitipan</h1>
         </a>
            <!-- Modal penitipan -->
            <div class="modal-dialog ">

                <div class="modal fade" id="modalPenitipan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <!-- Vertically centered modal -->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Penitipan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
                {{-- end modal penitipan --}}
         <a  class="btn-grooming" type="button" data-bs-toggle="modal" data-bs-target="#modalGrooming">
           <img src="/img/grooming.png" alt="">
           <h1>Grooming</h1>
         </a>
                <!-- Modal Grooming -->
                <div class="modal-dialog ">

                    <div class="modal fade" id="modalGrooming" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <!-- Vertically centered modal -->
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Grooming</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                    {{-- end modal Grooming --}}





 </div>
</body>
</html>
