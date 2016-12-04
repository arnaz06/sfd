<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemains;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pemain.daftar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Pemain = new Pemains();
        $Pemain->nama = $request->get('nama');
        $acakkode = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz",3)),0,5);
        $Pemain->kode = $acakkode;
        $Pemain->username = $request->get('username');
        $Pemain->email = $request->get('email');
        $Pemain->no_hp = $request->get('no_hp');
        $Pemain->score = 0;
        $Pemain->save();

        $data = $Pemain->kode;
        return view('pemain.terimakasih')->withData($data);

    }

    public function tambahpoint(){
        return view('pemain.tambahpoint');
    }
    public function tambahpointpost(Request $request){

        $query = $request->get('query');
        $cari = Pemains::where('kode','LIKE','%'.$query.'%')->get();

        return view('pemain.hasil',['cari' => $cari]);

    }
    public function tambahpointsave(Request $request){
        $id = $request->input('id');
        $Pemain = Pemains::find($id);
        $Pemain->nama = $request->input('nama');
        $Pemain->username = $request->input('username');
        $Pemain->kode = $request->input('kode');
        $Pemain->email = $request->input('email');
        $Pemain->no_hp = $request->input('no_hp');
        $Pemain->score =$request->input('score') + $Pemain->score();
        $Pemain->save();


        return view('pemain.tambahpoint');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function show_all()
    {
        $pemains = Pemains::all();
        return view('pemain.show-all')->withPemains($pemains);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemain = Pemains::where('id',$id)->first();
        return view('pemain.edit-pemain')->withPemain($pemain);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request)
    {
        $id = $request->input('id');
        $Pemain = Pemains::find($id);
        $Pemain->nama = $request->input('nama');
        $Pemain->username = $request->input('username');
        $Pemain->kode = $request->input('kode');
        $Pemain->email = $request->input('email');
        $Pemain->no_hp = $request->input('no_hp');
        $Pemain->score =$request->input('score') + $Pemain->score();
        $Pemain->save();

        return redirect('lihat-pemain');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemain = Pemains::find($id);
        $pemain->delete();

        return redirect('lihat-pemain');

    }


    public function dimulai(){
        return view('admin.sfdmulai');
    }
}
