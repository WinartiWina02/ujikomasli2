<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sensive Blog - Home</title>
	<link rel="icon" href="{{asset('assets/frontend/ img/Fevicon.png') }}" type="{{ asset('assets/frontend/image/png') }}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('assets/frontend/img/logo.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="archive.html">Archive</a></li>
              <li class="nav-item"><a class="nav-link" href="category.html">Category</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
              <li><a href="#"><i class="ti-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <main class="site-main">
    <!--================Hero Banner start =================-->
    <section class="mb-30px">
      <div class="container">
        <div class="hero-banner">
          <div class="hero-banner__content">
            <h3>kampus Negeri Yang Ada di Bandung</h3>
            <h3>Barang siapa yang menempuh suatu jalan untuk menuntut ilmu, Allah akan memudahkan baginya jalan ke surga</h3>
            <h3> (HR Muslim)</h3>
            <h4>January 16, 2020</h4>
          </div>
        </div>
      </div>
    </section>
    <!--================Hero Banner end =================-->

    <!--================ Blog slider start =================-->
    <section>
      <div class="container">
        <div class="owl-carousel owl-theme blog-slider">
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{asset('assets/frontend/img/blog/blog-slider/itb.jpg')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Insitut Teknologi Bandung</a>
              <h3><a href="#">Institut Teknologi Bandung (ITB), didirikan pada tanggal 2 Maret 1959.
                Kampus utama ITB saat ini merupakan lokasi dari sekolah tinggi teknik pertama di Indonesia.</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{asset('assets/frontend/img/blog/blog-slider/k upi.jpg')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Universitas Pendidikan Indonesia</a>
              <h3><a href="#">Universitas Pendidikan Indonesia (UPI) salah satu Perguruan Tinggi Negeri di Indonesia yang berdiri sejak tahun 1954.
                UPI berawal dari sebuah Perguruan Tinggi Pendidikan Guru yang telah mengalami metamorfosis
                 hingga menjadi salah satu Perguruan Tinggi Negeri Berbadan Hukum di Indonesia.</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{asset('assets/frontend/img/blog/blog-slider/k unpad.jpg')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Universitas Padjajaran</a>
              <h3><a href="#">Universitas Padjadjaran atau dikenal dengan singkatan Unpad merupakan salah satu perguruan tinggi negeri yang ada di Indonesia.
                Unpad berdiri pada 11 September 1957, dengan lokasi kampus di Bandung.
                Saat ini, Unpad berstatus sebagai Perguruan Tinggi Negeri Badan Hukum.</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{asset('assets/frontend/img/blog/blog-slider/k uin.png')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Universitas Islam Negri</a>
              <h3><a href="#">Sejarah berdirinya Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung tidak lepas dari IAIN
                Sunan Gunung Djati Bandung karena UIN merupakan kelanjutan dan pengembangan dari IAIN SGD Bandung.
                IAIN SGD Bandung didirikan pada tanggal 8 April 1968 M bertepatan dengan 10 Muharram 1388 H berdasarkan Keputusan Menteri Agama RI Nomor 56 Tahun 1968.</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{asset('assets/frontend/img/blog/blog-slider/k isbi.png')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Institut Seni Budaya Indonesia Bandung</a>
              <h3><a href="#">Institut Seni Budaya Indonesia Bandung (ISBI) adalah gudangnya generasi muda yang ingin mempelajari kebudayaan di nusantara. Kalau kamu punya bakat di bidang seni, bisa mencoba masuk ke kampus ini.
                Siapa tahu, kelak kamu menjadi artis terkenal atau seniman ternama seperti Rina Nose, Sule, dan Irfan Hakim.</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{asset('assets/frontend/img/blog/blog-slider/s tinggi pariwisata.jpg')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Sekolah Tinggi Pariwisata Bandung</a>
              <h3><a href="#">Kamu ingin berkarier di dunia perhotelan atau travel? Masuklah ke Sekolah Tinggi Pariwisata Bandung.
                 Kampus ini melahirkan banyak alumni yang sukses di bidangnya.
                Bahkan, rata-rata bisa bekerja di hotel bintang 5 di dalam maupun luar negeri.</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Blog slider end =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="{{asset('assets/frontend/img/blog/unbk.jpg')}}" alt="">
                {{-- <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul> --}}
              </div>
              <div class="details mt-20">
                <a href="singleblog">
                  <h3>Beberapa Jalur Untuk Masuk PTN</h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p><br> SNMPTN merupakan salah satu bentuk jalur seleksi penerimaan mahasiswa baru Perguruan Tinggi Negeri yang dilaksanakan secara serentak seluruh Indonesia.
                <br><br>SBMPTN Seleksi Bersama Masuk Perguruan Tinggi Negeri (SBMPTN)  merupakan seleksi bersama penerimaan mahasiswa baru di lingkungan Perguruan Tinggi Negeri dengan menggunakan pola ujian tertulis secara nasional yang mana selama dilaksanakan mampu menunjukkan berbagai keuntungan serta keunggulan, baik bagi calon mahasiswa, Perguruan Tinggi Negeri, maupun bagi kepentingan nasional. Bagi calon mahasiswa, Ujian Tertulis sangatlah menguntungkan karena lebih efisien, murah dan juga fleksibel. Hal tersebut dikarenakan adanya mekanisme lintas wilayah.
                Meskipun jalur kuota jalur ini tidak sebanyak SNMPTN, namun jalur SBMPTN diandalkan oleh banyak orang karena hanya dijalur inilah kita bisa bersaing dengan adil.<br>
               <br>Ujian mandiri merupakan sebuah sistem seleksi dengan ujian yang dilakukan oleh calon mahasiswa baru yang diselenggarakan oleh pihak PTN terkait. Seleksi jalur ujian mandiri ini diselenggarakan oleh pihak institusi dalam rangka memberikan alternatif pilihan kepada mereka yang tidak lolos tes jalur SNMPTN maupun SBMPTN agar tetap bisa melanjutkan studi ke PTN.</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="{{asset('assets/frontend/img/blog/unbk2.jpg.png')}}" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="singleblog">
                  <h3>Tips Lulus UNBK.</h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Ketahui Tips Dasar Lulus UNBK
                    <br>1. Persiapan Mental
                    <br> 2. Jaga Kesehatan Tubuh
                    <br> 3. Atur Jadwal Senyaman Mungkin
                    <br> 4. Rajin Berlatih dengan Soal Ujian dan latihan Soal
                    <br> 5. Mengikuti Bimbel dan Kelompok Belajar
                    <br> 6. Jangan Memaksakan Diri
                    <br> 7. Berdo’a dan minta restu kepada kedua orang tua
                </p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="{{asset('assets/frontend/img/blog/blog3.png')}}" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="blog-single.html">
                  <h3>Tourist deaths in Costa Rica jeopardize safe dest
                    ination reputation all time. </h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="{{asset('assets/frontend/img/blog/blog4.png')}}" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="blog-single.html">
                  <h3>Tourist deaths in Costa Rica jeopardize safe dest
                    ination reputation all time.  </h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>



            <div class="row">
              <div class="col-lg-12">
                  <nav class="blog-pagination justify-content-center d-flex">
                      <ul class="pagination">
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Previous">
                                  <span aria-hidden="true">
                                      <i class="ti-angle-left"></i>
                                  </span>
                              </a>
                          </li>
                          <li class="page-item active"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Next">
                                  <span aria-hidden="true">
                                      <i class="ti-angle-right"></i>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </nav>
              </div>
            </div>
          </div>

          <!-- Start Blog Post Siddebar -->
          {{-- <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget newsletter-widget">
                  <h4 class="single-sidebar-widget__title">Newsletter</h4>
                  <div class="form-group mt-30">
                    <div class="col-autos">
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'">
                    </div>
                  </div>
                  <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                </div>


                <div class="single-sidebar-widget post-category-widget">
                  <h4 class="single-sidebar-widget__title">Catgory</h4>
                  <ul class="cat-list mt-20">
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Technology</p>
                        <p>(03)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Software</p>
                        <p>(09)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Lifestyle</p>
                        <p>(12)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Shopping</p>
                        <p>(02)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Food</p>
                        <p>(10)</p>
                      </a>
                    </li>
                  </ul>
                </div> --}}

                {{-- <div class="single-sidebar-widget popular-post-widget">
                  <h4 class="single-sidebar-widget__title">Popular Post</h4>
                  <div class="popular-post-list">
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="{{asset('assets/frontend/img/blog/thumb/thumb1.png')}}" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                          <h6>Accused of assaulting flight attendant miktake alaways</h6>
                        </a>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="{{asset('assets/frontend/img/blog/thumb/thumb2.png')}}" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                          <h6>Tennessee outback steakhouse the
                            worker diagnosed</h6>
                        </a>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="{{asset('assets/frontend/img/blog/thumb/thumb3.png')}}" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                          <h6>Tennessee outback steakhouse the
                            worker diagnosed</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="single-sidebar-widget tag_cloud_widget">
                    <h4 class="single-sidebar-widget__title">Popular Post</h4>
                    <ul class="list">
                      <li>
                          <a href="#">project</a>
                      </li>
                      <li>
                          <a href="#">love</a>
                      </li>
                      <li>
                          <a href="#">technology</a>
                      </li>
                      <li>
                          <a href="#">travel</a>
                      </li>
                      <li>
                          <a href="#">software</a>
                      </li>
                      <li>
                          <a href="#">life style</a>
                      </li>
                      <li>
                          <a href="#">design</a>
                      </li>
                      <li>
                          <a href="#">illustration</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> --}}
          <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
  </main>

  <!--================ Start Footer Area =================-->
  <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
              magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>Stay update with our latest</p>
            <div class="" id="mc_embed_signup">

              <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="form-inline">

                <div class="d-flex flex-row">

                  <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                    required="" type="email">


                  <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                  <div style="position: absolute; left: -5000px;">
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                  </div>

                  <!-- <div class="col-lg-4 col-md-4">
                        <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                      </div>  -->
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Instragram Feed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="{{asset('assets/frontend/img/instagram/i1.jpg')}}" alt=""></li>
              <li><img src="{{asset('assets/frontend/img/instagram/i2.jpg')}}" alt=""></li>
              <li><img src="{{asset('assets/frontend/img/instagram/i3.jpg')}}" alt=""></li>
              <li><img src="{{asset('assets/frontend/img/instagram/i4.jpg')}}" alt=""></li>
              <li><img src="{{asset('assets/frontend/img/instagram/i5.jpg')}}" alt=""></li>
              <li><img src="{{asset('assets/frontend/img/instagram/i6.jpg')}}" alt=""></li>
              <li><img src="{{asset('assets/frontend/img/instagram/i7.jpg')}}" alt=""></li>
              <li><img src="{{asset('assets/frontend/img/instagram/i8.jpg')}}" alt=""></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-dribbble"></i>
              </a>
              <a href="#">
                <i class="fab fa-behance"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </footer>
  <!--================ End Footer Area =================-->

  <script src="{{asset('assets/frontend/vendors/jquery/jquery-3.2.1.min.js')  }}"></script>
  <script src="{{asset('assets/frontend/vendors/bootstrap/bootstrap.bundle.min.js')  }}"></script>
  <script src="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.js')  }}"></script>
  <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{asset('assets/frontend/js/mail-script.js') }}"></script>
  <script src="{{asset('assets/frontend/js/main.js') }}"></script>
</body>
</html>
