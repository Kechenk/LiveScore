<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karateka;

class KaratekaController extends Controller
{
    public function index($title = 'Dashboard')
    {
        $karatekas = Karateka::all(); // Retrieve all records from the karatekas table
        return view('projects', ['title' => $title, 'karatekas' => $karatekas]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'belt' => 'required|string',
            'sex' => 'required|string'
        ]);

        // Create a new Karateka instance using the validated data
        Karateka::create($validatedData);

        return redirect()->back()->with('success', 'Karateka has been successfully added!');
    }
}
