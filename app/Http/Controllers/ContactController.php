<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Mail;


class ContactController extends BaseController
{
    public function index(Request $request){
        $data = []; // Empty array
        $data = array('email'=>[
            $request->email,
            $request->message,
        ]);
        $msgg = "Bonjour vous avez un message de ".$request->email." : \n ".$request->message;
        
        Mail::send('contact', $data, function($msgg) use($request)
        {
            $msgg->to($request->email, 'Pelia')->subject($request->objet);
        }); 
        return response()->json("le mail a été envoyer avec succès", 200);
    }
}
