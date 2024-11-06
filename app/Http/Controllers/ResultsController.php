<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\IndivualTestController;
use App\Models\Packages;
use App\Models\IndividualTest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Results;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class ResultsController extends Controller
{
    /**
     * Store the express-diagnostics's input form.
     */
    public function create(string $id)
    {
        
            $results = DB::insert('insert into * results where id = ? limit 1', [$id]);
            return response($results);

    }

    /**
     * Handle an incoming diagnostics request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        //$results = $request->input('selectedIndividualId');
        // $selectedIndividualId = IndividualTest::first()->IndividualId;
        $usermail = $request->email;

        $results = Results::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'address' => $request->address,
            'email' => $usermail,
            'reqphysician' =>$request->reqphysician,
            'package1' =>$request->package1,
            'package2' =>$request->package2,
            'package3' =>$request->package3,
            'package4' =>$request->package4,
            'individualTest1' =>$request->individualTest1,
            'individualTest2' =>$request->individualTest2,
            'individualTest3' =>$request->individualTest3,
            'individualTest4' =>$request->individualTest4,
            'individualTest5' =>$request->individualTest5,
            'individualTest6' =>$request->individualTest6,
            'individualTest7' =>$request->individualTest7,
        ]);
         
        
        if (DB::table('users')->where('email', $usermail)->doesntExist()) {
            $users = User::create([
                'name' => $request->name,
                'email' => $usermail
            ]);
        }

        return redirect(route('express-diagnostics', absolute: false))->with('success', 'Sucessfully Saved!');
    }

    public function packagesList()
    {
    
        $packages = DB::table('packages')->select('id', 'packageName')->get();
        $individualTest = DB::table('individualtest')->select('id', 'individualTest')->get();

        return view('express-diagnostics', [
            'packages'=>$packages, 'individualTest'=>$individualTest
        ]);

    }

    public function individualTestList()
    {
        $individualTest = DB::table('individualtest')->select('id', 'individualTest')->get();

        return view('express-diagnostics', [
            'individualTest'=>$individualTest
        ]);

    }

    /**
     * Display the packages list.
     */
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
    public function show(string $id)
    {
        // $packages = DB::select('select * from packages where id = ? limit 1', [$id]);
        // return response($packages);

        // $packages = Packages::where('status', 1)->get();
        //         foreach ($packages as $data){
        //             $data->status = 0;
        //             $data->update();
        //         }
    }

}
