<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $trains=Train::where('data_partenza','=','2022-05-27')->get();

        return view('home', compact('trains'));
    }
    
}
