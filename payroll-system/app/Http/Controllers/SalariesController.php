<?php

namespace App\Http\Controllers;

use App\Models\Salaries;
use Illuminate\Http\Request;
use App\Models\Salary_Slips;

class SalariesController extends Controller
{

    public function generateSalarySlip(Request $request)
    {
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

        // Calculate total earnings and total deductions based on form inputs
        $totalEarnings = $basicSalary + $overtime + $incentives + $allowances + $bonuses + $commissions + $paidLeaves;
        $totalDeductions = $late + $absent + $incomeTax + $withholdingTax + $sss + $philhealth + $pagIbig;

        // Calculate net salary payable
        $netSalaryPayable = $totalEarnings - $totalDeductions;

        // Store data in the salary_slips table
        $salarySlip = new Salary_slips([
            'emp_code' => $employeeCode,
            'emp_name' => $employeeName,
            'payment_period_start' => now(),
            'payment_period_end' => now(),
            'earnings' => $totalEarnings,
            'deductions' => $totalDeductions,
            'net_salary' => $netSalaryPayable,
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

        // Redirect to /salary-slip
        return redirect('/salary-slip')->with('success', 'Salary slip generated successfully!');
    }


}
