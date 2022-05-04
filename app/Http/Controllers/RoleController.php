<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /* Redirect by User Role
        0 = User
        1 = Agente
        2 = Admin
    */
    public function index()
    {
        if (auth()->user()) {
            $role = Auth::user()->role;
            if ($role === 0) {
                return view('user');
            } else if ($role === 1) {
                return view('agente');
            } else if ($role === 2) {
                return view('admin');
            } else return abort(404);
        } else return redirect()->route('index');
    }
}
