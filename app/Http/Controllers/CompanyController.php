<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CompanyController;

use Illuminate\Http\Request;


class CompanyController extends Controller
    {
        /**
         * Show the form for creating a new company.
         */
        public function create()
        {
            return view('createcompany');
        }
    
        /**
         * Store a newly created company in the database.
         */
        public function store(Request $request)
        {
            // Validate the incoming request data
            $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'logo' => 'nullable|image|max:2048', // Assuming 'logo' is an image upload field
                'phone' => 'nullable|string|max:20',
                'profile' => 'nullable|string|max:255',
                'url' => 'nullable|url|max:255',
            ]);
    
            // Handle file upload for the logo
            $logo_path = null;
            if ($request->hasFile('logo')) {
                $logo_path = $request->file('logo')->store('logos', 'public');
            }
    
            // Create a new company instance
            $company = new Company();
            $company->name = $request->name;
            $company->address = $request->address;
            $company->logo = $logo_path; // Save the file path to the logo field
            $company->phone = $request->phone;
            $company->profile = $request->profile;
            $company->url = $request->url;
    
            // Save the company to the database
            $company->save();
    
            // Redirect back with success message
            return redirect()->route('company')->with('success', 'Company created successfully.');
        }
    }
    

