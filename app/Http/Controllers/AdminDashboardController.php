<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cat;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $cats = Cat::all();
        return view('adminpages.dashboard',['cats'=>$cats]);
    }
}
