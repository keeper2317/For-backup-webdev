<?php

namespace App\Http\Controllers;

use App\Models\Salaries;
use Illuminate\Http\Request;
use App\Models\Salary_Slips;

class SalariesController extends Controller
{
    public function generateSalarySlip(Request $request)
    {
<<<<<<< Updated upstream
        // Retrieve data from the request
        $data = $request->all();
=======
        // Extract data from the form
        $employeeCode = $request->input('employeeCode');
        $employeeName = $request->input('employeeName');
        $title_position = $request->input('title_position');
        $code = $request->input('code');
        $basicSalary = $request->input('basicSalary');
        $late = $request->input('late');
        $overtime = $request->input('overtime');
        $absent = $request->input('absent');
        $incentives = $request->input('incentives');
        $incomeTax = $request->input('incomeTax');
        $allowances = $request->input('allowances');
        $withholdingTax = $request->input('withholdingTax');
        $bonuses = $request->input('bonuses');
        $sss = $request->input('sss');
        $commissions = $request->input('commissions');
        $philhealth = $request->input('philhealth');
        $paidLeaves = $request->input('paidLeaves');
        $pagIbig = $request->input('pagIbig');
>>>>>>> Stashed changes

        // You may want to validate the data here before processing

        // Calculate net salary payable (for demonstration purposes, you can customize this logic)
        $netSalaryPayable = $data['totalEarnings'] - $data['totalDeductions'];

        // Save the salary slip record
        $salarySlip = new Salary_slips([
            'employee_code' => $data['employeeCode'],
            'total_earnings' => $data['totalEarnings'],
            'total_deductions' => $data['totalDeductions'],
            'net_salary_payable' => $netSalaryPayable,
        ]);

        // Create a new Salary instance
        $salary = new Salaries([
            'employee_code' => $employeeCode,
            'employee_name' => $employeeName,
            'title_position' => $title_position,
            'code' => $code,
            'basic_salary' => $basicSalary,
            'overtime' => $overtime,
            'incentives' => $incentives,
            'allowances' => $allowances,
            'bonuses' => $bonuses,
            'commissions' => $commissions,
            'paid_leaves' => $paidLeaves,
            'late' => $late,
            'absent' => $absent,
            'income_tax' => $incomeTax,
            'withholding_tax' => $withholdingTax,
            'sss' => $sss,
            'philhealth' => $philhealth,
            'pag_ibig' => $pagIbig,
            'net_salary_current' => $netSalaryPayable
        ]);

        $salarySlip->save();
        $salary->save();

        // Return a response (you can customize this based on your needs)
        return response()->json(['message' => 'Salary slip generated successfully']);
    }
}
