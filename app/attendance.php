<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
  protected $primaryKey = 'attendance_id ';
  protected $fillable = ['attendance_status'];
}
