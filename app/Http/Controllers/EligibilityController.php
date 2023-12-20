<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EligibilityController extends Controller
{
    public function list()
    {
        return view('student.eligibility-check');
    }

    public function saveEligibility(Request $request)
    {
        // Validate and save the data to the database
        // You can use Eloquent models to create records in the database

        // Example: Assuming you have an Eligibility model
        // Eligibility::create($request->all());

        return redirect()->route('eligibility-check')->with('success', 'Eligibility check completed!');
    }
}
