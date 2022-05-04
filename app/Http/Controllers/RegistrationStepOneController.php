<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationStepOneController extends Controller
{
    public function create()
    {
        return view('auth1.step-one');
    }

    public function store(Request $request)
    {
        $request->validate([
            'city' => ['required', 'max:50'],
            'CAP' => ['required', 'size:5', 'integer'],
            'address' => ['required', 'max:60'],
        ]);

        auth()->user()->update([
            'city' => $request->input('city'),
            'CAP' => $request->input('CAP'),
            'address' => $request->input('address'),
        ]);

        return redirect()->route('step-two.create');
    }
}
