@extends('master')
@section('content')
<form role="form" method="POST" action="{{ url('/edit') }}"
      xmlns="http://www.w3.org/1999/html">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{$pemain->id}}">
    <input type="hidden" name="kode" value="{{$pemain->kode}}">
    <label>Nama</label>
    <input required="required" value=" @if(!old('nama')){{$pemain->nama}}@endif{{ old('nama') }}" name="nama" type="text"><br>
    <label>Username</label>
    <input required="required" value="@if(!old('username')){{$pemain->username}}@endif{{ old('username') }}" name="username" type="text"/><br>
    <label>E-mail</label>
    <input required="required" value="@if(!old('email')){{$pemain->email}}@endif{{ old('email') }}" name="email" type="email"/><br>
    <label>NO HP</label>
    <input required="required" value="@if(!old('no_hp')){{$pemain->no_hp}}@endif{{old('no_hp')}}" name="no_hp" type="text"/><br>
    <label>Score</label>
    <input required="required" value="@if(!old('score')){{$pemain->score}}@endif{{old('score')}}" name="score" type="number"/><br>

    <input type="submit" name='publish'  value = "edit"/>
</form>
    @endsection