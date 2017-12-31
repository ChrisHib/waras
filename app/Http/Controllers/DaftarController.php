<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar;

class DaftarController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        //Create New Message
        $daftar = new Daftar;
        $daftar->name = $request->input('name');
        $daftar->email = $request->input('email');
        $daftar->kelas = $request->input('message');

        //save meesage
        $daftar->save();

        //redirect
        return redirect('/kelas')->with('success', 'Pesan Terkirim');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required',
        ]);

        //Create New Account
        $daftar = new daftar;
        $daftar->nama = $request->nama;
        $daftar->email = $request->email;
        $daftar->kelas = $request->kelas;


        //save meesage
        $daftar->save();

        //resirect
        return redirect('/')->with('success', 'Pesan Terkirim');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
