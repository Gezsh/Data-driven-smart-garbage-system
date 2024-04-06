<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dustbin;
use Illuminate\Http\Request;

class DustbinController extends Controller
{
    

    public function index()
    {
        $query = Dustbin::query()->orderBy('level', 'desc');
    
        if (request()->has('search')) {
            $query->filter(request(['search']));
        }
    
        $dustbins = $query->get();
    
        return view('dustbin.index', compact('dustbins'));
    }

    public static function getAllDustbin()
    {
        $dustbins = Dustbin::all();
        $response = [
            'success' => true,
            'data' => $dustbins,
        ];
        return response()->json($response);
    }
    
     
    public static function create()
    {
        return view('dustbin.create');
    }

    public static function store(Request $request)
    {
        // dd($request);
        $formfields = $request->validate([
            'location' => 'required',
            'capacity' => 'required',
        ]);
        Dustbin::create($formfields);

        return redirect('/dustbin')->with('message', 'Dustbin saved sucessfully!');
    }
    public static function show($id)
    {
        $dustbin = Dustbin::find($id);
        return view('dustbin.show', ['dustbin' => $dustbin]);
    }
    public function destroy($id)
    {
        $dustbin = Dustbin::find($id);
        $dustbin->delete();
        return redirect('/dustbin')->with('message','Dustibin deleted sucessfully');
    }
    public function edit($id)
    {
        $dustbin = Dustbin::find($id);
        return view('dustbin.edit', ['dustbin' => $dustbin]);
    }

    public function update($id, Request $request)

    {
        $dustbin = Dustbin::find($id);
        $dustbin->location = $request->input('location');
        $dustbin->capacity = $request->input('capacity');
        // $formfields = $request->validate([
        //     'location' => 'required',
        //     'capacity' => 'required',
        // ]);
        $dustbin->save();
        return redirect('/dustbin')->with('message', 'Dustbin updated sucessfully!');
    }
}

