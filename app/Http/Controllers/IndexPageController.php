<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class IndexPageController extends Controller
{
    public function index(){
        $cats=Cat::all();
        return view('index',['cats'=>$cats]);
    }
}
