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
            'email'=> 'required',
            'titulo'=> 'required',
            'contenido'=> 'required'
        ]);

        $mensaje2 = new Maileable;
        Mail::to('mmuntaner@iessonferrer.net')->send($mensaje2);
        return view('mailRecibido');
    }
}
