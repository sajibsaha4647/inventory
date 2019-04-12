<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
  protected $primaryKey = 'employee_id ';
  protected $fillable = ['employee_status'];


  public function getsalary(){
    return $this->belongsTo('App\salari','employee_id','employee_id');
  }

  public function getattendance(){
    return $this->hasOne('App\attendance','employee_id','employee_id');
  }
}
