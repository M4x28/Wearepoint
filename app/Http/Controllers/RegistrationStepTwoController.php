<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationStepTwoController extends Controller
{
    public function create()
    {
        return view('auth1.step-two');
    }

    public function store(Request $request)
    {
        $request->validate([
            'birthday' => ['required', 'date'],
            'CF' => ['required', 'size:16'],
            'phone' => ['required', 'size:18'],
        ]);

        auth()->user()->update([
            'birthday' => $request->input('birthday'),
            'CF' => $request->input('CF'),
            'phone' => $request->input('phone'),
        ]);

        return redirect()->route('dashboard');
    }
}
