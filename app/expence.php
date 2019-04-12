<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expence extends Model{

  protected $primaryKey = 'expence_id ';
  protected $fillable = ['expence_status'];
}
