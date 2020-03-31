<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\News;


class NewsController extends Controller
{
    
    public function index(Request $request){
       $news =new News;
       $news->email = $request->email;
       $news->save();
       return response()->json("l'email a été bien enregistrer", 200);
    }
}
