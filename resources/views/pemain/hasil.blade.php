@extends('master')

@foreach($cari as $caris)
    <form role="form" method="POST" action="{{ url('/tambahpoint-save') }}"
          xmlns="http://www.w3.org/1999/html">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label> Kode anda   {{$caris->kode}} </label><br>
        <input type="hidden" name="id" value="{{$caris->id}}">
        <input type="hidden" name="kode" value="{{$caris->kode}}">
        <input type="hidden" required="required" value="@if(!old('nama')){{$caris->nama}}@endif{{ old('nama') }}" name="nama" >
        <input type="hidden" required="required" value= "@if(!old('username')){{$caris->username}}@endif{{ old('username') }}" name="username" />
        <input type="hidden" required="required" value="@if(!old('email')){{$caris->email}}@endif{{ old('email') }}" name="email" />
        <input type="hidden" required="required" value="@if(!old('no_hp')){{$caris->no_hp}}@endif{{ old('no_hp') }}" name="no_hp" />
        <label>Nama Anda  {{$caris->nama}}</label><br>
        <label>Point Anda <span style="color: white; background-color: #ef4b52ff; padding: 4px 3px;">{{$caris->score}}</span></label><br>
        <label>Tambah Point</label>
        <input  required="required"  type="number"  name="score" />
        <div class="form-group">



        </div>
        <input type="submit" name='publish'  value = "Publish"/>
    </form>



    @endforeach
