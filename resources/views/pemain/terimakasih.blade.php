@extends('layout')
@section('content')

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper warnaku">
                <a href="#" class="brand-logo center">Sofware Freedom Day</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="/sfdmulai" class="brand-logo"><img src="img/sfdlogo.png" alt="sfdlogo" class="responsive-img homelogo"></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <h3><center>Terima Kasih sudah Mendaftar Kode anda <span style="background-color:#ef4b52ff;color: white;padding: 3px 3px;">{{$data}}</span></center></h3><br>
    <h4><center>Selamat Bermain :)</center></h4>

    @endsection


