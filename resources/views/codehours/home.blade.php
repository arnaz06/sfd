@extends('master')
@section('home')

    <body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>Menu<i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Software Freedom Day</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#detail">Detail Acara</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#rundown">Rundown Acara</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#pembicara">Pembicara</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">It's time to freedom</div>
                <div class="intro-heading">Software Freedom Day</div>
                <a href="#daftar" class="page-scroll btn btn-xl">Daftar</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Detail Acara</h2>
                    <h3 class="section-subheading text-muted">Berikut ini detail acara SFD</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <div class="timeline-image">
                        <img class="img-circle img-responsive" src="img-workshop/icon/workshop.jpg">
                      </div>
                    </span>
                    <h4 class="service-heading">WORKSHOP</h4>
                    <p class="text-muted">Workshop yang mengadakan sebuah event yang sudah ada diluar negeri sana, yaitu hour of code dan code moji</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <div class="timeline-image">
                        <img class="img-circle img-responsive" src="img-workshop/icon/speaker.png">
                      </div>
                    </span>
                    <h4 class="service-heading">TALKSHOW</h4>
                    <p class="text-muted">Talkshow yang akan diisi oleh teman-teman dari doscom yang kece-kece, mereka pernah menjadi firefox student ambasador </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <div class="timeline-image">
                        <img class="img-circle img-responsive" src="img-workshop/icon/festival.png">
                      </div>
                    </span>
                    <h4 class="service-heading">FESTIVAL</h4>
                    <p class="text-muted">Pameran software FOSS yang akan diisi teman-teman kita dari doscom untuk langsung mendemokannya
                        secara langsung untuk semua pengunjung, selain itu akan ada gamification untuk mendapatkan poin yang bisa ditukar dengan sovenir</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="rundown">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Rundown Acara</h2>
                    <h3 class="section-subheading text-muted">Berikut rundown acara selama acara berlangsung</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img-workshop/icon/workshop.jpg">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Workshop</h3>
                                    <h4 class="subheading">3 Desember 2016 di Lab HW</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Regis Ulang</p>
                                    <p class="text-muted">Hour of Code</p>
                                    <p class="text-muted">Code Moji</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img-workshop/icon/speaker.png">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Talkshow & Festival</h3>
                                    <h4 class="subheading">5 Desember 2016 di Gedung H lantai 1</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Talkshow</p>
                                    <p class="text-muted">Pameran</p>
                                    <p class="text-muted">Gamification</p>
                                    <p class="text-muted">Market</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img-workshop/icon/festival.png">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Festival & Game</h3>
                                    <h4 class="subheading">6 Desember 2016 di Gedung H lantai 1</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Pameran</p>
                                    <p class="text-muted">Game</p>
                                    <p class="text-muted">Gamification</p>
                                    <p class="text-muted">Market</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="pembicara" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Pembicara TalkShow</h2>
                    <h3 class="section-subheading text-muted">Pembicara-pembicara kece</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img width="200px" height="200px" src="img-workshop/pembicara/dikyarga.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diky Arga Anggara</h4>
                        <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/dikyarga"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/dikyargaID"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/dikyargaid"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="team-member">
                        <img width="200px" height="200px" src="img-workshop/pembicara/rezafaizarahman.png" class="img-responsive img-circle" alt="">
                        <h4>Reza Faiz A Rahman</h4>
                        <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/rezafaizarahman"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://plus.google.com/+rezafaizarahman"><i class="fa fa-plus"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/rezafaizarahman/"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="daftar" class="row text-center">
                    <div class="col-lg-12">
                        <h3>DAFTAR WORKSHOP & DAFTAR GAMIFICATION</h3>

                    </div>
                    <div class="col-lg-12">
                        <a href="/daftar-codehours" class="btn btn-xl">Daftar Workshop</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/daftar-mampir" class="btn btn-xl">Daftar Gamification</a>
                    </div>
                </div>
            </div>
    </section>
    <!-- <section id="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Register</h2>
                    <h3 class="section-subheading text-muted">Register form for Workshop</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Nomer Handphone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Apa yang kamu ketahui tentang FOSS" id="message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Clients Aside -->
    <aside id="sponsor" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="section-subheading text-muted">Acara keren ini didukung oleh</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="http://dinus.ac.id">
                        <img style="width:80px;height:80px" src="img-workshop/logos/dinus_fik.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="http://www.clowordistro.com/">
                        <img style="width:220px;height:80px" src="img-workshop/logos/clowor.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="http://tealinuxos.org">
                        <img style="width:200px;height:100px" src="img-workshop/logos/tea_linux.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    @endsection