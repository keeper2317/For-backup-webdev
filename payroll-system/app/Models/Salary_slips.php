<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary_slips extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_code',
        'emp_name',
        'payment_period_start',
        'payment_period_end',
        'earnings',
        'deductions',
        'net_salary'
    ];

    public $timestamps = false;


    protected $primaryKey = 'slip_id';

    public function salaries()
    {
        return $this->belongsTo(Salaries::class);
    }
}
