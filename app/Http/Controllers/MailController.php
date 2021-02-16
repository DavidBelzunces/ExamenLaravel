<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Maileable;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request){
       $mensaje = request()->validate([
            'nombre'=> 'required',
            'email'=> 'required|email',
            'titulo'=> 'required',
            'contenido'=> 'required|min:3'
        ]);

        Mail::to('mmuntaner@iessonferrer.net')->send(new Maileable($mensaje));
        return view('mailRecibido');
    }
}
