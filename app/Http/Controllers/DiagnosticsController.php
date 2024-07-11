<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\PackagesController;
use App\Models\Diagnostics;
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

class DiagnosticsController extends Controller
{
   
    public function packagesList()
    {
        $packages = Packages::all();
        // return view('packages',compact('packages'));
        return view('express-diagnostics', [
            'packages'=>$packages
        ]);
    }
    
    /**
     * Display the user's profile form.
     */
    public function create(string $id)
    {
        
            $diagnostics = DB::insert('insert into * diagnostics where id = ? limit 1', [$id]);
            return response($diagnostics);
            
            // $packages= DB::select('select * from packages where id = ? limit 1', [$id]);
            // return response($packages);

    }

    /**
     * Handle an incoming diagnostics request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $diagnostics = Diagnostics::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'address' => $request->address,
            'email' => $request->email,
            'reqphysician' =>$request->reqphysician,
            'package1' =>$request->package1,
            'package2' =>$request->package2,
            'package3' =>$request->package3,
            'package4' =>$request->package4,
        ]);



        return redirect(route('express-diagnostics', absolute: false))->with('success', 'Sucessfully Saved!');
    }

    public function search(Request $request): Response
    {
        if(!empty($request->id))
        {
            $id = $request->id;
            $patientInfo = DB::select('select * from diagnostics where id = ? limit 1', [$request->id]);
            return response($patientInfo);
        }

        if(!empty($request->name))
        {
            $id = $request->id;
            $patientInfo = DB::select('select * from diagnostics where name = ? limit 1', [$request->name]);
            return response($patientInfo);
        }

        return response(''); // Return a response

       
        
    }

     /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     // $packages = DB::select('select * from packages where id = ? limit 1', [$id]);
    //     // return response($packages);

    //     $packages = Packages::where('status', 1)->get();
    //             foreach ($packages as $data){
    //                 $data->status = 0;
    //                 $data->update();
    //             }
    // }


}
