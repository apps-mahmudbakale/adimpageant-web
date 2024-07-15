<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contestants = Contestant::all();

        return view('contestants.index', compact('contestants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contestants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'firstname' => 'required|string|max:255',
//            'lastname' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:contestants',
//            'phone' => 'required|string|max:255',
//            'address' => 'required|string|max:255',
//            'city' => 'required|string|max:255',
//            'state' => 'required|string|max:255',
//            'date_of_birth' => 'required|string|max:255',
//            'about' => 'required|string|max:255',
//            'picture' => 'required|string',
//        ]);

        $contestant = Contestant::create($request->all());

        return redirect()->route('contestants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contestant $contestant)
    {
        return view('contestants.show', compact('contestant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contestant $contestant)
    {
        return view('contestants.edit', compact('contestant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contestant $contestant)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:contestants',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'about' => 'required|string|max:255',
            'picture' => 'required|string',
        ]);

        $contestant->update($request->all());
        return redirect()->route('contestants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contestant $contestant)
    {
        $contestant->delete();
        return redirect()->route('contestants.index');
    }
}
