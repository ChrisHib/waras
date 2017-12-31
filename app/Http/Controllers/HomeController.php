<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function edit($id) {
        $user = User::find($id);

        return view('profil', compact('user'));
    }

    public function welcomepage(){
        return view('welcome');
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name'=>'required', 
            'email'=>'required', 
            'password'=>'required', 
            'username'=>'required', 
            'tanggal'=>'required', 
            'agama'=>'required', 
            'gender'=>'required', 
            'alamat'=>'required',
        ]);

        $peserta = User::find($id);
        $peserta->name = $request->input('name');
        $peserta->email = $request->input('email');
        $peserta->username = $request->input('username');
        $peserta->tanggal = $request->input('tanggal');
        $peserta->agama = $request->input('agama');
        $peserta->gender = $request->input('gender');
        $peserta->alamat = $request->input('alamat');
        if (!is_null($request->input('password'))) {
            $peserta->password = $request->input('password'); 
        }

        $peserta->save();

        return $this->welcomepage();
    }
}
