<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_code',
        'employee_name',
        'title_position',
        'code',
        'basic_salary',
        'overtime',
        'incentives',
        'allowances',
        'bonuses',
        'commissions',
        'paid_leaves',
        'late',
        'absent',
        'income_tax',
        'withholding_tax',
        'sss',
        'philhealth',
        'pag_ibig',
        'net_salary',
        'net_salary_current',
    ];

    public $timestamps = false;

    public function salary_slips()
    {
        return $this->hasMany(Salary_slips::class);
    }
}
