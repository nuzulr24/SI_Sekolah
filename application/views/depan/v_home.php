<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SDN Jember Lor 02</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <style type="text/css">
    @media only screen and (max-width: 768px) {
        .img-center {
            margin-left: 50px;
        }
        }
    </style>
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>(0331) 5102456
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>sdnjbrlordua@yahoo.co.id
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>JL. Mawar No. 70 Kode Pos. 68118, Tegal Rejo, Jember
                            Lor, Kec. Patrang, Kabupaten Jember, Jawa Timur
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button"
                            data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img
                                class="img img-responsive" width="200px;"
                                src="<?php echo base_url().'theme/images/logohitam.png'?>"></a>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Akademik
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo site_url('guru');?>">Guru</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Galeri</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Halaman
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo site_url('blog');?>">Kegiatan</a>
                                        <a class="dropdown-item" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                        <a class="dropdown-item" href="<?php echo site_url('download');?>">Download</a>
                                    </div>
                                    <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact');?>">Kontak Kami</a>
                                </li>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Akses Monitoring
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url() ?>administrator">Admin</a>
                                        <a class="dropdown-item" href="http://localhost/sims/authw">Wali Kelas</a>
                                        <a class="dropdown-item" href="http://localhost/sims/auth">Siswa</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="slider_img layout_two">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block" src="<?php echo base_url().'theme/images/AA.jpg'?>" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>Bepikir Kreaftif &amp; Inovatif</h1>
                                <h4>Bagi kami kreativitas merupakan gerbang masa depan.<br> kreativitas akan mendorong
                                    inovasi. <br> Itulah yang kami lakukan.</h4>
                                <div class="slider-btn">
                                    <a href="<?php echo site_url('artikel');?>" class="btn btn-default">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="<?php echo base_url().'theme/images/2.jpg'?>" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>Guru Bekualitas Tinggi</h1>
                                <h4>Guru merupakan faktor penting dalam proses belajar-mengajar.<br> Itulah kenapa kami
                                    mendatangkan guru-guru <br>terbaik dari berbagai penjuru.</h4>
                                <div class="slider-btn">
                                    <a href="<?php echo site_url('guru');?>" class="btn btn-default">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="<?php echo base_url().'theme/images/3.jpg'?>" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>Proses Belajar Interatif</h1>
                                <h4>Kami membuat proses belajar mengajar menjadi lebih interatif.<br> dengan demikian
                                    siswa lebih menyukai <br>proses belajar.</h4>
                                <div class="slider-btn">
                                    <a href="<?php echo site_url('galeri');?>" class="btn btn-default">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--//END HEADER -->
    <!--============================= ABOUT =============================-->
    <section class="clearfix about about-style2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <h3 style="color: #b39a6b;"> Bissmillahirrahmanirrahiim</h3>
                    <p><em>Welcome to SDN Jember Lor 2</em>
                        … Selamat datang di dunia pendidikan SDN Jember Lor 2. Kami merasa sangat bangga mendapatkan
                        perhatian dan kepercayaan dari Bapak-Ibu sekalian. Kami akan berupaya untuk dapat menjalankan
                        amanah ini dengan baik agar pertanggung jawaban di hadapan Allah SWT kelak menjadi ringan.</p>
                    <p>Di sini kami mengajak anda para orang tua siswa untuk berpartisipasi membangun masyarakat
                        pembelajar dalam rangka menyongsong era baru bagi anak-anak kita dan menjadikan anak-anak kita
                        generasi yang mampu berkompetisi tanpa kehilangan wajah budaya dan moral.</p>

                    <p>Memasuki pergaulan global yang penuh dengan kompetisi ini, kita perlu menyiapkan mental anak-anak
                        kita agar mampu bersaing dengan baik dengan memiliki moral/adab islami, kemandirian, kecerdasan,
                        juga tentunya kreatifitas-inovasi sesuai tumbuh kembangnya.</p>

                    <p>Di SDN Jember Lor 2 setiap siswa memiliki hak untuk berprestasi dan mendapatkan pelayanan yang
                        baik. Karena kami memandang ini semua adalah amanah yang akan kami pertanggung jawabkan di
                        hadapan Allah SWT. Tentu hal ini semakin terasa mudah dengan adanya kerjasama dari para orang
                        tua siswa dalam menjalankan program sekolah.</p>

                    <p>Sebagai penutup, sekali lagi kami ucapkan selamat datang di SDN Jember Lor 2. Marilah bekerjasama
                        agar anak-anak kita dapat berkembang dengan baik sehingga tumbuh menjadi generasi yang
                        berakhlakul karimah dan cerdas.</p>


                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url().'theme/images/kepsek.png'?>" class="img-fluid text-center about-img" alt="#">
                    <h4 style="padding-top:20px; padding-left: 80px" class="img-center">Hj. DAHLIYATI, S.Pd.I.</h4>
                    <p style="text-align: center;">Kepala Sekolah</p>
                </div>
            </div>
        </div>
    </section>
    <!--//END ABOUT -->
    <!--============================= OUR COURSES =============================-->
    <section class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Artikel Terbaru</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($berita->result() as $row) :?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="courses_box mb-4">
                        <div class="course-img-wrap">
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid"
                                alt="courses-img">
                        </div>
                        <!-- // end .course-img-wrap -->
                        <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                            <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div> <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--//END OUR COURSES -->
    <!--============================= EVENTS =============================-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-img2">
                        <?php foreach ($pengumuman->result() as $row) :?>
                        <div class="row">
                            <div class="col-sm-3"> <img
                                    src="<?php echo base_url().'theme/images/announcement-icon.png'?>" class="img-fluid"
                                    alt="event-img"></div><!-- // end .col-sm-3 -->
                            <div class="col-sm-9">
                                <h3><a
                                        href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a>
                                </h3>
                                <span><?php echo $row->tanggal;?></span>
                                <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>

                            </div><!-- // end .col-sm-7 -->
                        </div><!-- // end .row -->
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <?php foreach ($agenda->result() as $row):?>
                            <div class="event_date">
                                <div class="event-date-wrap">
                                    <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                    <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                                </div>
                            </div>
                            <div class="date-description">
                                <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                                <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                                <hr class="event_line">
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->
    <!--============================= DETAILED CHART =============================-->
    <div class="detailed_chart">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                    <div class="chart-img">
                        <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid"
                            alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_guru;?></span> Guru
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                    <div class="chart-img">
                        <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid"
                            alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_siswa;?></span> Siswa
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                    <div class="chart-img">
                        <img src="<?php echo base_url().'theme/images/chart-icon_3.png'?>" class="img-fluid"
                            alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_files;?></span> Download
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="chart-img">
                        <img src="<?php echo base_url().'theme/images/chart-icon_4.png'?>" class="img-fluid"
                            alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_agenda;?></span> Agenda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//END DETAILED CHART -->
    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url();?>">
                            <img src="<?php echo base_url().'theme/images/icon.png'?>" class="img-fluid"
                                alt="footer_logo">
                        </a>
                        <p><?php echo date('Y');?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">About</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Kegiatan</a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Akademik</h3>
                        <ul>
                            <li><a href="<?php echo site_url('guru');?>">Guru</a></li>
                            <li><a href="<?php echo site_url('siswa');?>">Siswa </a></li>
                            <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                            <li><a href="<?php echo site_url('download');?>">Download</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat : </span> JL. Mawar No. 70 Kode Pos. 68118, Tegal Rejo, Jember Lor, Kec.
                            Patrang, Kabupaten Jember, Jawa Timur</p>
                        <p>Email : sdnjbrlordua@yahoo.co.id
                            <p> Phone : (0331) 5102456</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
</body>

</html>