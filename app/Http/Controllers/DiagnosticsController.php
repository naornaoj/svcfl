<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Diagnostics;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class DiagnosticsController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function create(Request $request): View
    {
        $packages = Users::where('user_id', '=', Auth::user()->id)->get();
        return view('auth.diagnostics');
    }

    /**
     * Handle an incoming diagnostics request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'integer', 'max:255'],
            'address' => ['required', 'integer', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'physician' => ['required', 'string', 'max:255'],
        ]);

        $diagnostics = Diagnostics::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'address' => $request->address,
            'email' => $request->email,
            'physician' => $request->physician
        ]);

        return redirect(route('express-diagnostics', absolute: false));
    }

}
