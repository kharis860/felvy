<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/felvy1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/slick/slick.css"/>

    <title>Felvy</title>
  </head>
  <body>
    <div class="utama">

          <h1>LINCAH DAN SEHAT ADALAH KENYAMANAN SI MUNGIL</h1>
          <h2>Si Mungil akan merasa nyaman jika kita rawat dengan sepenuh hati. Kenyamanannya bisa dilihat dari tingkah lakunya yang lincah dan gesit</h2>
          <!-- Button Login -->

          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth

                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                    <button class="open-button">
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                    </button>

                        @if (Route::has('register'))
                            <button class="open-button-reg">
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            </button>
                        @endif
                    @endif
                </div>
            @endif
          {{-- <button class= "open-button" >
          <a href="{{ route('login') }}" class="text-sm text-gray-700 ">Login</a>
          </button>
            <!-- Button Register -->
          <button class="open-button-reg">
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Register</a>
          </button> --}}
          <!-- Form -->
          <div class="form-popup" id="formLogin">
            <p>Login</p>

            <form action="" class="form-container">

              <label for="emailLog"><b>Email</b></label>
              <!-- <input type="text" placeholder="Enter Email" name="email" required> -->
              <input type="text" placeholder="Enter Email" name="emailLog" required>

              <label for="pswLog"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pswLog" required>

              <button type="submit" class="btn-submit" name="submitLog">Login</button>
              <button type="button" class="cancel-login" onclick="closeForm()">Cancel</button>
            </form>
          </div>
          <div class="form-popup-reg" id="formRegister">
            <p>Register</p>
            <form action="" class="form-container" method="GET">
              <label for="username"><b>Username</b></label>
              <!-- <input type="text" placeholder="Enter Email" name="email" required> -->
              <input type="text" placeholder="Enter Username" name="username" required>
              <label for="email"><b>Email</b></label>
              <!-- <input type="text" placeholder="Enter Email" name="email" required> -->
              <input type="text" placeholder="Enter Email" name="email" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
              <label for="repsw"><b>Re-Password</b></label>
              <input type="password" placeholder="Enter Re-Password" name="repsw" required>

              <button type="submit" class="btn-submit" name="submitReg">Register</button>
              <button type="button" class="cancel-login" onclick="closeFormReg()">Cancel</button>
            </form>
          </div>
        {{-- <img src="img/background_1.jpg" alt=""> --}}

    </div>
    <div class="tentang_felvy">
           <header>TENTANG FELVY</header>
           <p>Hadirnya kami membantu Anda merawat SI Mungil. Percayakan tubuh lembutnya kepada kami</p>
           <h2>Membantu Anda</h1>
            <a class="btn-pelatihan" href="#">
              <img src="/img/pelatihan.png" alt="">
              <h1>Pelatihan</h1>
            </a>
            <a class="btn-kesehatan" href="#">
              <img src="/img/kesehatan.png" alt="">
              <h1>Kesehatan</h1>
            </a>
            <a class="btn-penitipan" href="#">
              <img src="/img/penitipan.png" alt="">
              <h1>Penitipan</h1>
            </a>
            <a class="btn-grooming" >
              <img src="/img/grooming.png" alt="">
              <h1 style="color: white";>Grooming</h1>
            </a>
    </div>
    </div>
    <div class="jenis_kucing">

          <div class="container">
            <header>JENIS - JENIS KUCING</header>
            <div class="carousel">

          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner car-img">
              <div class="carousel-item active">
                <img src="img/cat/havana brown cat.jpg"  alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/cat/bengal cat.jpg"  alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/cat/british shorthair cat.jpg"  alt="...">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>
          </div>
        </div>

    </div>
    <div class="kucing_hilang">
      <h1>BANTU MEREKA KEMBALI KE RUMAH</h1>

      <!-- Start -->
      <div class="wrapper">
        <button class="open-button-add" onclick="openFormAdd()">add</button>
        <div class="form-popup" id="formAdd">
            <form action="" class="form-container">
              <h1>Add Kucing</h1>

              <label for="namaKucing"><b>Nama Kucing</b></label>
              <!-- <input type="text" placeholder="Enter Email" name="email" required> -->
              <input type="text" placeholder="Enter Cat Name" name="namaKucing" required>

              <label for="identitasKucing"><b>Identitas Kucing</b></label>
              <input type="text" placeholder="Enter Cat Identity" name="identitasKucing" required>

              <button type="submit" class="btn-submit">Login</button>
              <button type="button" class="cancel-login" onclick="closeFormAdd()">Cancel</button>
            </form>
          </div>
        <h2>----------<h2>
          <div class="carousel">
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/american shorthair cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the First slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/bengal cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Second slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/bombay cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Third slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img//cat/british shorthair cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Fourth slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/charteux cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Fifth slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/himalayan cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Sixth slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- End -->

          <!-- Start -->
          {{-- <div class="wrapper">
            <h2>----------<h2>
              <div class="carousel-left">
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/1">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the First slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/2">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Second slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/3">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Third slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/4">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Fourth slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/5">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Fifth slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/6">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Sixth slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          <!-- End --> --}}
    </div>
    <div class="adopsi">
      <h1>MEREKA BUTUH KASIH SAYANGMU</h1>
      <!-- Start -->
      <div class="wrapper">
        <h2>----------<h2>
          <div class="carousel">
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/american shorthair cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the First slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/bengal cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Second slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/bombay cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Third slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img//cat/british shorthair cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Fourth slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/charteux cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Fifth slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card">
                <div class="card-header">
                  <img src="img/cat/himalayan cat.jpg">
                </div>
                <div class="card-body">
                  <div class="card-content">
                    <div class="card-title">This is the Sixth slider</div>
                    <div class="card-text">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- End -->

          <!-- Start -->
          <div class="wrapper">
            <h2>----------<h2>
              <div class="carousel-left">
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/1">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the First slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/2">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Second slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/3">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Third slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/4">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Fourth slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/5">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Fifth slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <img src="https://lorempixel.com/200/200/abstract/6">
                    </div>
                    <div class="card-body">
                      <div class="card-content">
                        <div class="card-title">This is the Sixth slider</div>
                        <div class="card-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          <!-- End -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></>
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <script type="text/javascript" src="css/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Pop up Form Login -->
    <script>
        function openForm() {
          document.getElementById("formLogin").style.display = "block";
        }

        function closeForm() {
          document.getElementById("formLogin").style.display = "none";
        }
        function openFormReg() {
        document.getElementById("formRegister").style.display = "block";
      }

      function closeFormReg() {
        document.getElementById("formRegister").style.display = "none";
      }
      function openFormAdd() {
        document.getElementById("formAdd").style.display = "block";
      }

      function closeFormAdd() {
        document.getElementById("formAdd").style.display = "none";
      }
      </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.carousel').slick({
          speed: 500,
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          dots:true,
          centerMode: true,
          responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              // centerMode: true,

            }

          }, {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              dots: true,
              infinite: true,

            }
          },  {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          }]

        });

        // RTL
        $('.carousel-left').slick({
          // rtl: true,
          speed: 500,
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          dots:true,
          centerMode: true,
          responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,~~
              slidesToScroll: 1,
              // centerMode: true,

            }

          }, {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              dots: true,
              infinite: true,

            }
          },  {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          }]
        });
      });
    </script>

    <!--Option 2: Separate Popper and Bootstrap JS -->

  </body>
</html>
