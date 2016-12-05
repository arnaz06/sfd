@extends('master')


    <form role="form" method="POST" action="{{ url('/kurang-point') }}"
          xmlns="http://www.w3.org/1999/html">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label> Kode anda   {{$pemain->kode}} </label><br>
        <input type="hidden" name="id" value="{{$pemain->id}}">
        <input type="hidden" name="kode" value="{{$pemain->kode}}">
        <input type="hidden" required="required" value="@if(!old('nama')){{$pemain->nama}}@endif{{ old('nama') }}" name="nama" >
        <input type="hidden" required="required" value= "@if(!old('username')){{$pemain->username}}@endif{{ old('username') }}" name="username" />
        <input type="hidden" required="required" value="@if(!old('email')){{$pemain->email}}@endif{{ old('email') }}" name="email" />
        <input type="hidden" required="required" value="@if(!old('no_hp')){{$pemain->no_hp}}@endif{{ old('no_hp') }}" name="no_hp" />
        <label>Nama Anda  {{$pemain->nama}}</label><br>
        <label>Point Anda <span style="color: white; background-color: #ef4b52ff; padding: 4px 3px;">{{$pemain->score}}</span></label><br>
        <label>Kurang Point</label>
        <input  required="required"  type="number"  name="score" />
        <div class="form-group">



        </div>
        <input type="submit" name='publish'  value = "Publish"/>
    </form>



