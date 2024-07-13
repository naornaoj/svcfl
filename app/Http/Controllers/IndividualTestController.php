<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Users;
use App\Models\Individual;
use App\Models\Packages;
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


class IndividualController extends Controller
{

    /**
     * Display the user's profile form.
     */
    public function create(string $id)
    {
        
            $individual= DB::insert('insert into * individualTest where id = ? limit 1', [$id]);
            return response($individual);
        
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

        $individualTest = Individual::create([
            'individualTest' => $request->individualTest,
        ]);
        
        return redirect(route('individualTest', absolute: false));
    }

     /**
     * Display the specified resource.
     */
    public function update(string $id)
    {
        //
    }

}
