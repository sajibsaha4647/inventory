<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paysalary extends Model{

  protected $primaryKey = 'pay_id ';
  protected $fillable = ['pay_status'];

  public function getEmployee(){
    return $this->belongsTo('App\employee','employee_id','employee_id');
  }
  public function getsalary(){
    return $this->belongsTo('App\salari','salary_id','salary_id');
  }
}
