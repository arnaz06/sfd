<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Codehours;
class CodehoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('codehours.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peserta = Codehours::all()->count();
            return view('codehours.daftar')->withPeserta($peserta);


    }

    /**
     * Store a newly created resource in storage.
     *1
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codehours = new Codehours();
        $codehours->nama = $request->get('nama');
        $codehours->email = $request->get('email');
        $codehours->no_hp = $request->get('no_hp');
        $codehours->jurusan = $request->get('jurusan');
        $acakkode = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz",3)),0,3);
        $codehours->kode_codehours = $acakkode;
        $codehours->confirmed = 0;

        $codehours->save();

        $data = $codehours->kode_codehours;
        return view('codehours.terimakasih')->withData($data);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $codehours = Codehours::where('id',$id)->first();
        return view('codehours.edit-codehours')->withCodehours($codehours);
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $codehours = Codehours::find($id);
        $codehours->nama = $request->input('nama');
        $codehours->email = $request->input('email');
        $codehours->no_hp = $request->input('no_hp');
        $codehours->jurusan = $request->input('jurusan');
        $codehours->kode_codehours = $request->input('kode_codehours');

        $codehours->confirmed = $request->input('confirmed');
        $codehours->save();

        return redirect('home');
    }
    public function search(){

            return view('codehours.cari-admin');


    }
    public function searchpost(Request $request){

        $query = $request->get('query');
        $hasil = Codehours::where('kode_codehours','LIKE','%'.$query.'%')->orderBy('id')->get();
        return view('codehours.hasil-admin',['hasil' => $hasil]);

    }
    public function updateconfirmed(Request $request){
        $id = $request->input('id');
        $hasils = Codehours::find($id);
        $hasils->nama = $request->input('nama');
        $hasils->email = $request->input('email');
        $hasils->no_hp = $request->input('no_hp');
        $hasils->jurusan = $request->input('jurusan');
        $hasils->kode_codehours = $request->input('kode_codehours');
        $hasils->confirmed = $request->input('confirmed');
        $hasils->save();

        return view('codehours.cari-admin');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
