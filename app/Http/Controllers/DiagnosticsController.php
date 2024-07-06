<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Users;
use App\Models\Diagnostics;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class DiagnosticsController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function create(string $id)
    {
        
            $diagnostics = DB::insert('insert into * diagnostics where id = ? limit 1', [$id]);
            return response($diagnostics);
        
    }

    /**
     * Handle an incoming diagnostics request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
   
    //    $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'age' => ['required', 'integer', 'max:255'],
    //         'gender' => ['required', 'string', 'max:255'],
    //         'contact' => ['required', 'integer', 'max:255'],
    //         'address' => ['required', 'String', 'max:255'],
    //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    //         'reqphysician' => ['required', 'string', 'max:255'],
    //     ]); 

        $diagnostics = Diagnostics::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'address' => $request->address,
            'email' => $request->email,
            'reqphysician' =>$request->reqphysician,
        ]);

        

        return redirect(route('express-diagnostics', absolute: false));
    }

     /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }

}
