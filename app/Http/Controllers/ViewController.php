<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }
    public function migraciones(){
        return view('migraciones');
    }
    public function seeders(){
        return view('seeders');
    }
    public function mail(){
        return view('mail');
    }
}
