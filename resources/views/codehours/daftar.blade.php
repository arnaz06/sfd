@extends('master')
@section('daftar')



<!-- file ini hanya meng extends, dimana file ini hanya perlu css dan lain-lain untuk membuat tampilannya
tapi tidak masuk content -->



    <form role="form" method="POST" action="{{ url('/daftar-codehours') }}"
          xmlns="http://www.w3.org/1999/html">

<section id="workshop" class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="section-heading">Pendaftaran Workshop</h1><br>
            @if($peserta<=35)
            <h5 class="section-subheading text-muted">Isi kolom dibawah dengan lengkap untuk daftar workshop</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{old('nama')}}"  required data-validation-required-message="Nama kamu belum diisi">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" value="{{ old('jurusan')}}"  required data-validation-required-message="jurusan masih kosong">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail" name="email" {{old('email')}} required data-validation-required-message="email masih kosong">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="NO HP"  name="no_hp" {{old('no_hp')}} required data-validation-required-message="nomer hp masih kosong">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-lg-12 text-center">
                        <!-- ini saat klik daftar dan berhasil maka akan dilempar ke thanks.blade -->
                        <input type="submit" name='publish' class="btn btn-xl" value = "Publish"/>
                        <a href="/" class="btn btn-xl">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
    </form>
    @else
    <h2>Mohon maaf kursi sudah penuh, mohon antri hingga codehours 2017 :*<h2>

@endsection