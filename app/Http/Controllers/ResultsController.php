<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Results;

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
            'id' => $request->id,
            'patientNo' => $request->patientNo,
            'requestNo' => $request->requestNo,
            'hematocrit' => $request->hematocrit,
            'hgb' => $request->hgb,
            'neutro' => $request->neutro,
            'lympho' => $request->lympho,
            'mono' => $request->mono,
            'eosino' => $request->eosino,
            'baso' => $request->baso,
            'cbcWbc' => $request->cbcWbc,
            'cbcRbc'=> $request->cbcRbc, 
            'platelet' => $request->platelet, 
            'bloodType' => $request->bloodType,
            'cbcRemarks' => $request->cbcRemarks, 
            'uaColor' => $request->uaColor, 
            'transparency' => $request->transparency, 
            'ph' => $request->ph,
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
