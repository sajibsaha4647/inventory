<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salari extends Model{

  protected $primaryKey = 'salary_id ';
  protected $fillable = ['salary_status'];

  public function getEmployee(){
    return $this->belongsTo('App\employee','employee_id','employee_id');
  }


}
