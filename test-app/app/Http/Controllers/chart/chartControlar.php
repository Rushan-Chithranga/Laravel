<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class chartControlar extends Controller
{
    public function index()
    {

        // dd("sdfasd");
        
        $elections = ['Rushan' => 80,'vishwa' => 80,'kawinda' => 80,'chamika' => 80,'dilush' => 80];
        // dd($elections);
        

        return view('manager.chart', compact('elections'));
        

         
    }
}
