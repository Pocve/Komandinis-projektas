<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['users_id','total_amount','tax_amount'];
  protected $table = 'order';


  public function orders(){
    return $this->belongsTo('App\Cart');
  }
}
