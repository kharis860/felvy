<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/felvypro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Felvy</title>
  </head>
  <body>
      <section class="utama">
    <div class="container-fluid">

          <h1>LINCAH DAN SEHAT ADALAH KENYAMANAN SI MUNGIL</h1>
          <h2>Si Mungil akan merasa nyaman jika kita rawat dengan sepenuh hati. Kenyamanannya bisa dilihat dari tingkah lakunya yang lincah dan gesit</h2>
          <!-- Button Login -->

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
<section class="tentang_felvy">
    <div class="container-fluid">
        <header>TENTANG FELVY</header>
        <p>Hadirnya kami membantu Anda merawat SI Mungil. Percayakan tubuh lembutnya kepada kami</p>
                <h2>Membantu Anda</h1>
                    <a class="btn-pelatihan" type="button" data-bs-toggle="modal" data-bs-target="#Pelatihan">
                    <img src="/img/pelatihan.png" alt="">
                    <h1>Pelatihan</h1>
                    </a>
                        <!-- Modal pelatihan -->
                        <div class="modal-dialog ">

                        <div class="modal fade" id="Pelatihan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <section class="jenis_kucing">
                <div class="container-fluid">
                    <header>JENIS - JENIS KUCING</header>
                    <div class="carousel-kucing">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13"></button>
                            </div>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/cat/charteux cat.jpg" class="d-block w-100" alt="..." >
                                <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/bombay cat.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/siberian cat.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/havana brown cat.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>fourth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/russian blue cat.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>fifth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/manx cat.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>sixth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/scottish fold cat.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>sixth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/somali cat.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>sixth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/sphynx cat.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>sixth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/ragdoll.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>sixth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/maine coon.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>sixth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/himalayan.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>sixth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/cat/munchkin.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>sixth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
    </section>
    <section class="kucing_hilang">
        <div class="container-fluid">
            <h1>BANTU MEREKA KEMBALI KE RUMAH</h1>
            <div class="carousel-kucing-hilang">
                <div id="slideKucingHlng" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#slideKucingHlng" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#slideKucingHlng" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#slideKucingHlng" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#slideKucingHlng" data-bs-slide-to="3"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                            <img class="card-img" src="img/cat/bengal cat.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Kucing 1</h4>
                                <p class="card-text">Ilang gatau kemana gada kabar. Dah seminggu ga balek. Moga ga kenapa - kenapa</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                            <img class="card-img" src="img/cat/bombay cat.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Kucing 1</h4>
                                <p class="card-text">Ilang gatau kemana gada kabar. Dah seminggu ga balek. Moga ga kenapa - kenapa</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                                <img class="card-img" src="img/cat/havana brown cat.jpg" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Kucing 1</h4>
                                <p class="card-text">Ilang gatau kemana gada kabar. Dah seminggu ga balek. Moga ga kenapa - kenapa</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                            <img class="card-img" src="img/cat/bengal cat.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Kucing 1</h4>
                                <p class="card-text">Ilang gatau kemana gada kabar. Dah seminggu ga balek. Moga ga kenapa - kenapa</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                            <img class="card-img" src="img/cat/bombay cat.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Kucing 1</h4>
                                <p class="card-text">Ilang gatau kemana gada kabar. Dah seminggu ga balek. Moga ga kenapa - kenapa</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                                <img class="card-img" src="img/cat/havana brown cat.jpg" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Kucing 1</h4>
                                <p class="card-text">Ilang gatau kemana gada kabar. Dah seminggu ga balek. Moga ga kenapa - kenapa</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                            <img class="card-img" src="img/cat/bengal cat.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Kucing 1</h4>
                                <p class="card-text">Ilang gatau kemana gada kabar. Dah seminggu ga balek. Moga ga kenapa - kenapa</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                            <img class="card-img" src="img/cat/bombay cat.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Kucing 1</h4>
                                <p class="card-text">Ilang gatau kemana gada kabar. Dah seminggu ga balek. Moga ga kenapa - kenapa</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card" >
                                <img class="card-img" src="img/cat/havana brown cat.jpg" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title">Kucing 1</h4>
                                <p class="card-text">Ilang gatau kemana gada kabar. Dah seminggu ga balek. Moga ga kenapa - kenapa</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                    </div>

                </div>

                <!-- Left and right controls/icons -->

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slideKucingHlng" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slideKucingHlng" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>


</html>
