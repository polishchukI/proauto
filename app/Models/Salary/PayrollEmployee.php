<?php

namespace App\Models\Salary;

use Illuminate\Database\Eloquent\Model;

class PayrollEmployee extends Model
{
    protected $table = 'payroll_employees';
	
    protected $primaryKey = 'id';
	
    protected $guarded = ['id'];
    	
    public function curency()
    {
        return $this->belongsTo('App\Models\Inventory\Currency', 'currency_id','id');
    }

	public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
