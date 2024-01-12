<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Salary_slips;
use Illuminate\Http\Request;

class SalarySlipsController extends Controller
{

    public function index()
    {
        return view('salarySlips');
    }


<<<<<<< Updated upstream
=======
    public function editpayslip()
    {
        return view('edit-payslip');
    }

    public function showSalarySlips()
    {
        $salarySlips = Salary_slips::all();
        return view('salarySlips', compact('salarySlips'));
    }

    public function generate()
    {
        return view('salarySlips');
    }
>>>>>>> Stashed changes

    public function edit($slipId)
    {
        // Fetch the salary slip data based on the slip_id
        $salarySlip = Salary_slips::find($slipId);

        // Pass the data to the view
        return view('edit-payslip', ['salarySlip' => $salarySlip]);
    }

    public function update(Request $request, $slipId)
    {
        // Find the salary slip by slip_id
        $salarySlip = Salary_slips::find($slipId);

        // Update the salary slip fields
        $salarySlip->fill([
            // Add your form fields here...
        ]);

        // Save the updated salary slip
        $salarySlip->save();

        // Redirect to the salary-slip page with a success message
        return redirect('/salary-slip')->with('success', 'Salary slip updated successfully!');
    }


}
