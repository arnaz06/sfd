<!-- file ini hanya meng extends, dimana file ini hanya perlu css dan lain-lain untuk membuat tampilannya
tapi tidak masuk content -->

@extends('master')

<nav id="mainNav" style="background-color: #222;padding: 5px 0" class="navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only"></span>Menu<i class="fa fa-bars"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="/#detail">Detail Acara</a>
                </li>
                <li>
                    <a class="page-scroll" href="/#rundown">Rundown Acara</a>
                </li>
                <li>
                    <a class="page-scroll" href="/#pembicara">Pembicara</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<section id="gamification" class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Terima Kasih Sudah Mendaftar</h1><br>
            <h3>Silahkan simpan kode ini <span style="background-color:#ef4b52;color: white;padding: 3px 3px;"><?php echo generateRandomString(5); ?></span></h3>
        </div>
        <div class="col-lg-12 text-center">
            <a href="workshop.blade.php" class="btn btn-xl">Daftarkan yang lain</a>
        </div>
    </div>
  </section>
