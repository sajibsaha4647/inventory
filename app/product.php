<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model{

  protected $primaryKey = 'catagory_id';
  protected $fillable = ['catagory_status'];


  public function getproductcatagory(){
    return $this->belongsTo('App\productcatagory','catagory_id','catagory_id');
  }
  public function getsupplier(){
    return $this->belongsTo('App\supplier','supplier_id','supplier_id');
  }

}
