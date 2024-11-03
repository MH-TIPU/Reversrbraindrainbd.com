<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;

use PragmaRX\Countries\Package\Countries;




class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $humans = Human::paginate(20);

        $humansAll = Human::all();

        $countryPopularity = $humansAll->groupBy('country')->map(function ($group) {
            return $group->count(); // Count the number of occurrences
        });

        // Convert the result to an array for Google Charts
        $countryData = [];
        foreach ($countryPopularity as $country => $popularity) {
            $countryData[] = [$country, $popularity];
        }

        return view('home', ['humans' => $humans, 'humanAll' => $humansAll, 'countryData' => $countryData]);
    }


    public function search(Request $request)
{
    $query = $request->input('search');

    // Fetch and sort the humans based on name similarity to the search query
    $humans = Human::where('name', 'LIKE', "%{$query}%")
        ->orderByRaw("CASE
                        WHEN name LIKE '{$query}%' THEN 1
                        WHEN name LIKE '%{$query}%' THEN 2
                        ELSE 3
                      END")
        ->paginate(20);

    // Append the search query to pagination links
    $humans->appends(['search' => $query]);

    return view('search', compact('humans'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $human = Human::findOrFail($id);
        return view('details', ['human' => $human]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
