<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome()
    {
    	return view('home');
    }

    public function getLogin()
    {
    	return view('login');
    }

    public function getWelcome()
    {
        return view('welcome');
    }

    public function getSignup()
    {
        return view('signup');
    }

    public function getContact()
    {
    	return view('contact');
    }

    public function getProfil()
    {
        return view('profil');
    }

    public function getWorkshop()
    {
        return view('workshop');
    }

    public function getKelas()
    {
        return view('kelas');
    }

    public function getDaftar()
    {
        return view('daftar');
    }
}
