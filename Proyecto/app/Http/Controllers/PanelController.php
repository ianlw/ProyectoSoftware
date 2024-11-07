<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PanelController extends Controller
{
    //
    public function show()
    {
        $usuarios = User::where('id', '!=', Auth::id())->get();
        return view('panel', ['usuarios' => $usuarios]);
    }
}
