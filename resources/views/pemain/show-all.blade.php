@extends('layout')

@section('content')
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper warnaku">
        <a href="#" class="brand-logo center">Para Pemain</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="/sfdmulai" class="brand-logo"><img src="img/sfdlogo.png" alt="sfdlogo" class="responsive-img homelogo"></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <header class="header center warnaku">
    <!-- <img src="img/sfdlogo.png" alt="sfdlogo" class="logosfd "> -->
    <h1></h1>
  </header>
  <table class="striped highlight">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th>Kode</th>
        <th>Score</th>
        <th>Edit</th>
      </tr>

    </thead>
    @foreach($pemains as $pemain)
      <tbody>
        <tr>
          <td>{{$pemain->id}}</td>
          <td>{{$pemain->nama}}</td>
          <td>{{$pemain->username}}</td>
          <td>{{$pemain->email}}</td>
          <td>{{$pemain->kode}}</td>
          <td>{{$pemain->score}}</td>
          <td><a href="/edit/{{$pemain->id}}">Edit</a></td>
        </tr>
      </tbody>
    @endforeach

  </table>

@endsection
