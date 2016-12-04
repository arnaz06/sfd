
@extends('master')
<form role="form" method="POST" action="{{ url('/tambah-point') }}"
      xmlns="http://www.w3.org/1999/html">
    <section id="gamification" class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Jangan Sembarangan Ngasih Nilai !!!!</h3>
            </div>
            <br>
            <div class="col-lg-12 text-center">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div align="center" class="col-md-6">
                        <form>
                            <table class="table table-responsive">
                                <tr>
                                    <td>
                                        <h5>Cari Kode</h5>
                                    </td>
                                    <td>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="text" class="form-control" placeholder="Kode" name="query" value="{{old('query')}}"  required data-validation-required-message="kode kamu belum diisi">
                                        <input type="submit" name='publish'  value = "Publish"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>