<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Cat;

class KotinderController extends Controller
{
    /* public function index()
    {
        $cats = Cat::all();
        return view('adminpages.dashboard',['cats'=>$cats]);
    } */

    public function store(Request $request): RedirectResponse
    {
        $name = $request->input('name');
        $birthday = $request->date('birthday');
        if ($request->hasFile('photo')) {
            $file = $request->photo->isValid();
            $extension = $request->photo->extension();
            $path = $request->photo->storeAs('images', 'filename.jpg');


        }


        if (Auth::user()->role_id == 1) {
            return redirect()->intended(route('admin-dashboard', absolute: false));
        } else {
            return redirect()->intended(route('dashboard', absolute: false));
        }
    }
}
