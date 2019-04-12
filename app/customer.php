<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
  protected $primaryKey = 'customer_id ';
  protected $fillable = ['customer_status'];
}
