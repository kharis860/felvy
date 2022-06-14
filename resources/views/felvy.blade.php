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
                <div class="navbar-nav">
                    <ul class="navbar-nav">
                    <a class="nav-link" href="#aboutus" >
                        About us
                    </a>
                    <a class="nav-link" href="#jenis">
                        General
                    </a>
                    <a class="nav-link" href="#kucinghilang">
                        Kucing Hilang
                    </a>
                    <a class="nav-link" href="#adopsi">
                        Adopsi
                    </a>
                    <a class="nav-link" href="#donasi">
                        Donasi
                    </a>
                </ul>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                    </ul>
                </div>
            </div>
        </nav>
        <section class="utama">
            <div class="container-fluid">
                    <h1>LINCAH DAN SEHAT ADALAH KENYAMANAN SI MUNGIL</h1>
                    <h2>Si Mungil akan merasa nyaman jika kita rawat dengan sepenuh hati. Kenyamanannya bisa dilihat dari tingkah lakunya yang lincah dan gesit</h2>
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" type="button"class="text-sm text-gray-700 underline">Home</a>
                        @else
                        <button class="open-button">
                            <a href="{{ route('login') }}" class="clear" type="button">Login</a>
                        </button>

                            @if (Route::has('register'))
                                <button class="open-button-reg">
                                <a href="{{ route('register') }}" class="clear" type="button">Register</a>
                                </button>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </section>
        <section class="tentang_felvy" id="aboutus">
            <div class="container-fluid">
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
                            <div class="modal-body" style="text-align: justify">
                                Kucing secara alami memiliki insting sebagai hewan pemburu yang liar dan sulit untuk diatur. Oleh karena itu Felvy menyediakan layanan Pelatihan untuk memperbaiki perilaku kucing Anda  agar menjadi kucing yang penurut, tidak liar, dapat berinteraksi dengan manusia dan dapat hidup berdampingan dengan manusia sesuai aturan yang kita tentukan. Pelatihan ini dilakukan oleh orang yang mahir di bidangnya dan menggunakan metode yang sudah dibuktikan benar.

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
                            <div class="modal-body" style="text-align: justify">
                                Felvy menawarkan layanan kesehatan bagi Anda yang menemukan kucing kesayangan Anda sakit atau menemukan kucing Anda terluka. Jangan khawatir, kami memiliki dokter yang berpengalaman dalam menangani semua masalah kucing. Kami juga menawarkan layanan konsultasi dokter hewan jika Anda memiliki pertanyaan tentang kesehatan kucing Anda.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
                            <div class="modal-body" style="text-align: justify">
                                Felvy menawarkan Jasa Penitipan Kucing Harian dengan harga murah dengan pelayanan yang baik. Kesehatan, kenyamanan dan kebahagiaan kucing merupakan hal terpenting yang sangat kami utamakan dan perhatikan. ­­­Kami memberikan tingkat pelayanan maksimal sehingga Anda tidak akan khawatir jika Anda tidak dapat membawa kucing peliharaan Anda untuk waktu yang lama. Kami hadir untuk Anda dan memastikan keamanan kucing Anda selama berada di bawah pengawasan kami.

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
                                <div class="modal-body" style="text-align: justify">
                                    Memiliki kucing yang bersih tentu menyenangkan, baik untuk Anda sebagai pemilik maupun bagi kucing itu sendiri. Menjaga kebersihan kucing dengan grooming bisa Anda lakukan setiap saat. Felvy menyediakan pelayanan Grooming yaitu memandikan, menyisir bulu, memotong kuku, membersihkan telinga dan memberikan obat jamur atau kutu pada kucing. Selain membantu menjaga kucing Anda terlihat bersih, melakukan grooming kucing secara teratur memungkinkan Anda untuk menghabiskan waktu berkualitas dengan kucing kesayangan Anda.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                            {{-- end modal Grooming --}}
            </div>
        </section>

        <section class="jenis_kucing" id="jenis">
            <div class="container-fluid">
                <div class="container">
                    <header>JENIS - JENIS KUCING</header>
                        <div class="carousel-kucing">
                            <div id="carouselJenis" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="9" aria-label="Slide 10"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="10" aria-label="Slide 11"></button>
                                <button type="button" data-bs-target="#carouselJenis" data-bs-slide-to="11" aria-label="Slide 12"></button>
                                </div>
                                <div class="carousel-inner">
                                <div class="carousel-item active" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/charteux cat.jpg" class="d-block w-100" alt="..." >
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Chartreux Cat</h5>
                                    <p>Domestik prancis, bulu pendek, badan besar berotot, bulu abu-abu dan silver, mata jingga.</p>

                                </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/bombay cat.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Bombay cat</h5>
                                    <p>Domestik India, Bulu berwarna hitam, kepala bundar, hidungnya yang pendek, Tubuhnya yang berotot namun tidak kekar.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/siberian cat.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Siberian cat</h5>
                                    <p>Kucing hutan Rusia,  bulu lebat serta tubuh yang kuat, bentuk moncong pendek dan agak melengkung, sorot mata bulat dengan warna yang cerah.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/havana brown cat.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Havana brown cat</h5>
                                    <p>Bulu abu-abu pendek dan berkilau, tubuh ramping dan berotot, mata hijau, Wajah simetris, wajah berbentuk segitiga.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/russian blue cat.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Russian blue </h5>
                                    <p>Asal Rusia, Bulu biru tebal, leher pendek, badan panjang dan ramping, warna mata hijau mencolok.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/manx cat.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Manx cat</h5>
                                    <p>Berasal dari Britania Raya, tidak memiliki ekor, mata besar dan bulat,  dada lebar dan tulang punggung melengkung sampai pinggul.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/scottish fold cat.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Scottish fold</h5>
                                    <p>Domestik Skotlandia, kepala bulat lucu, telinga terlipat ke bawah, mata lebar dan besar, leher pendek, bulunya sedang serta tidak begitu lebat
                                    .</p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/somali cat.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Somali cat</h5>
                                    <p>Domestik somalia, abyssinian, semi long hair, telinga lebar, ekor lebat, tubuh sedang dan otot.
                                    </p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/sphynx cat.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Sphynx cat</h5>
                                    <p>Domestik kanada, tanpa bulu, perawakan ramping namun berotot, kaki panjang dan ramping, mata besar dan bulat  aktif dan penyayang.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/ragdoll.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Ragdoll cat</h5>
                                    <p>Domestik AS, bulu tidak terlalu panjang, tubuh relatif besar, wajah bulat, mata berwarna biru, bulu terang dengan bagian wajah, telinga, kaki, dan ekor yang cenderung gelap.
                                    </p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/maine coon.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Maine coon cat</h5>
                                    <p>Domestik Persia, giant cat, wajah mirip singa, bulu lebat, ekor panjang, tulang kuat dan besar.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" id="bg-jenis">
                                    <div id="overlay">
                                    <img src="img/cat/himalayan.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Himalayan cat</h5>
                                    <p>Persilangan ras persia dan siam, warna bulu yang berubah seiring bertambahnya usia, ras kucing bermata biru.</p>
                                    </div>
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselJenis" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                  </button>
                                  <button class="carousel-control-next" type="button" data-bs-target="#carouselJenis" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                  </button>
                            </div>
                            {{-- <button class="carousel-control-prev" id="btnNext" type="button" data-bs-target="#carouselJenis" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselJenis" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> --}}

                    </div>
                </div>
            </div>
    </section>
<section class="kucing_hilang" id="kucinghilang">
    <div class="container-fluid">
        <h1>BANTU MEREKA KEMBALI KE RUMAH</h1>

            {{-- modal kucing hilang --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Kucing Hilang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="nm_kucing_hilang" class="col-form-label">Nama Kucing:</label>
                            <input type="text" class="form-control" id="nm_kucing_hilang">
                        </div>
                        <div class="mb-3">
                            <label for="nm_pemilik_hilang" class="col-form-label">Nama Pemilik:</label>
                            <input type="text" class="form-control" id="nm_pemilik_hilang">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_hilang" class="col-form-label">Tanggal Hilang:</label>
                            <input type="text" class="form-control" id="tgl_hilang">
                        </div>
                        <div class="mb-3">
                            <label for="nomor_pemilik" class="col-form-label">Nomor yang Dapat Dihubungi:</label>
                            <input type="text" class="form-control" id="nomor_pemilik">
                        </div>
                        <div class="mb-3">
                            <label for="Keterangan" class="col-form-label">Keterangan:</label>
                            <input type="text" class="form-control" id="ket_hilang">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btn-addItem" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal" id="">Save</button>
                    </div>
                    </div>
                </div>
            </div>
            {{-- end modal kucing hilang --}}

            {{-- card carousel kucing hilang --}}
            <div id="slideKucingHlng" class="carousel slide" data-bs-ride="carousel" style="margin-top: 110px">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#slideKucingHlng" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#slideKucingHlng" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#slideKucingHlng" data-bs-slide-to="2"></button>

                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner" id="carousel-inner">
                    <div class="carousel-item active" id="carousel-item1">
                    <div class="row" id="row1">

                        <div class="col-md-4 mb-3">
                        <div class="card" >
                            <img class="card-img" src="img/anonim-cat.png" alt="Card image">
                            <div class="card-body">
                            <h4 class="card-title">25 Mei 2022</h4>
                            <p class="card-text">kurang pengawasan, kemungkinan besar kabur dari rumah lewat jendela</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalKucingHilang1">
                                Detail
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="ModalKucingHilang1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Kucing Hilang</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <p class="card-text" style="text-align: left">Nama Kucing&emsp;&emsp;&nbsp;:</p>
                                    <p class="card-text" style="text-align: left">Nama Pemilik&emsp;&emsp;:</p>
                                    <p class="card-text" style="text-align: left">Tanggal Hilang&emsp;&nbsp;:</p>
                                    <p class="card-text" style="text-align: left">Nomor HP&emsp;&emsp;&emsp;&nbsp;:</p>
                                    <p class="card-text" style="text-align: left">Keterangan&emsp;&emsp;&emsp;:</p>
                                    </div>
                                    <div class="modal-footer">
                                    {{-- end modal --}}

                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4 mb-3">
                        <div class="card" >
                            <img class="card-img" src="img/anonim-cat.png" alt="Card image">
                            <div class="card-body">
                            <h4 class="card-title">01 Mei 2022</h4>
                            <p class="card-text">Hilang di daerah sekaran, di sekitar area UNNES</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalKucingHilang1">
                                Detail
                            </button>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                            <img class="card-img" src="img/anonim-cat.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">04 Juni 2022</h4>
                                <p class="card-text">Ciri-ciri kucing berbulu hitam pekat dan memakai kalung berwarna biru</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalKucingHilang1">
                                Detail
                                </button>

                            </div>
                            </div>
                        </div>

                    </div>
                    </div>
                    <div class="carousel-item" id="carousel-item2">
                    <div class="row" id="row2">

                        <div class="col-md-4 mb-3">
                        <div class="card" >
                            <img class="card-img" src="img/anonim-cat.png" alt="Card image">
                            <div class="card-body">
                            <h4 class="card-title">07 Juni 2022</h4>
                            <p class="card-text">Hilang saat kami sekeluarga bertamasya, kucing anggora warna silver mata biru</p>
                            <a href="#" class="btn btn-success">Temukan</a>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4 mb-3">
                        <div class="card" >
                            <img class="card-img" src="img/anonim-cat.png" alt="Card image">
                            <div class="card-body">
                            <h4 class="card-title">10 juni 2022</h4>
                            <p class="card-text">Tidak sengaja tertinggal ketika sedang bepergian di pantai Marina</p>
                            <a href="#" class="btn btn-success">Temukan</a>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>

                </div>

              </div>
              <button class="carousel-control-prev" id="control-prev" type="button" data-bs-target="#slideKucingHlng" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" id="control-next" type="button" data-bs-target="#slideKucingHlng" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>
              <!-- Left and right controls/icons -->

            {{-- end card carousel kucing hilang --}}


        </div>
</section>
<section class="adopsi" id="adopsi">
    <div class="container-fluid">
        <h1>ADOPSI KUCING</h1>
        {{-- button modal adopsi --}}
        <div class="wrapper">
            <button class="open-button-add" data-bs-toggle="modal" data-bs-target="#ModalAdopsi">add</button>
        </div>
        {{-- modal adopsi --}}
        <div class="modal fade" id="ModalAdopsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Kucing Hilang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">info kucing:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">info kucing:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
                </div>
            </div>


    </div>
</section>

    <section class="donasi" id="donasi">
        <div class="container-fluid">
            <div class="jumbotron">
                <div class="container-jumbotron">
                <h1>Salurkan Donasi Anda</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id accusamus rem cupiditate, accusantium soluta nulla, quidem repudiandae magni vel natus quam aliquam corporis inventore</p>
                <hr class="my-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod perferendis tenetur repudiandae voluptatibus magni tempore nulla obcaecati dolore totam nemo!</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" role="button" data-bs-toggle="modal" data-bs-target="#ModalDonasi">Donasi</a>
                </p>
                <div class="modal fade" id="ModalDonasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Donasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Done</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </section>
</div>


</body>
</html>
