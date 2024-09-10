<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hcp;

class HcpController extends Controller
{
    public function showHcpForm()
    {
        return view('hcp_details'); // This returns the Blade view created earlier
    }

    public function submitHcpForm(Request $request)
    {
        $validated = $request->validate([
            'hcp_name' => 'required|string',
            'hcp_city' => 'required|string',
            'hcp_qualification' => 'nullable|string',
        ]);

        // Create a new HCP record in the database
        Hcp::create($validated);

        return redirect()->route('introduction')->with('status', 'HCP details submitted successfully!');
    }

    public function showDoctorRegistration()
    {
        // Return the doctor registration view
    }

    public function showDoctorsList()
    {
        // Return the doctors list view
    }
    public function introduction()
    {
        return view('introduction');
    }
}
