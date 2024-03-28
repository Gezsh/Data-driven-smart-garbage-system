<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

//use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        //$drivers = Driver::all();
        
        return view('driver.showDrivers', ['drivers'=>Driver::latest()->filter(request(['search']))->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $drivers = Driver::all();
        return view('driver.register', ['drivers'=>$drivers]);
        
    }
         
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $driver = new Driver();
        // $driver->reg = $request->input('reg');
        // $driver->firstName = $request->input('firstName');
        // $driver->lastName = $request->input('lastName');
        // $driver->email = $request->input('email');
        // $driver->phonenumber = $request->input('phonenumber');
        // $driver->save();

        $formFields=$request->validate([
            
            'reg'=>['required',Rule::unique('drivers','reg')],
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>['required','email'],
            'phonenumber'=>'required'

        ]);

        
        Driver::create($formFields);

        return redirect('/')->with('message','Driver registerd sucessfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = Driver::find($id);
        $drivers = Driver::all();
        return view('driver.show', ['drivers'=>$drivers, 'driver'=>$driver]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        $drivers = Driver::all();
        return view('driver.edit', ['drivers'=>$drivers, 'driver'=>$driver]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $driver = Driver::find($id);
        $driver->reg = $request->input('reg');
        $driver->firstName = $request->input('firstName');
        $driver->lastName = $request->input('lastName');
        $driver->email = $request->input('email');
        $driver->phonenumber = $request->input('phonenumber');
        $driver->save();
        return redirect('/')->with('message','Driver updated sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect('/')->with('message','Driver deleted sucessfully');
    }
}


