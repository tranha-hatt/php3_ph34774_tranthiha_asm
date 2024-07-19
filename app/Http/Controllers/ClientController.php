<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function details(){
        return view('client.details');
    }
    public function posts(){
        return view('client.post');
    }
}
