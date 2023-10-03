<?php

namespace App\Http\Controllers;

use App\Models\airlines;
use Illuminate\Http\Request;

class AirlinesController extends Controller
{
    public function index()
    {
        $airlines = Airlines::all();
        return view('airlines.index', compact('airlines'));
    }

    public function create()
    {
        return view('airlines.create');
    }

    public function store(Request $request)
    {
        // Validate and store the data
        $validatedData = $request->validate([
            'country' => 'required',
            'name' => 'required',
        ]);

        airlines::create($validatedData);

        return redirect()->route('airlines.index')->with('success', 'Airline created successfully');
    }

    public function edit(airlines $airline)
    {
        return view('airlines.edit', compact('airline'));
    }

    public function update(Request $request, airlines $airline)
    {
        // Validate and update the data
        $validatedData = $request->validate([
            'country' => 'required',
            'name' => 'required',
        ]);

        $airline->update($validatedData);

        return redirect()->route('airlines')->with('success', 'Airline updated successfully');
    }

    public function destroy(airlines $airline)
    {
        $airline->delete();

        return redirect()->route('airlines.index')->with('success', 'Airline deleted successfully');
    }
}
