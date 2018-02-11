<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreOrder extends Model
{
    protected $table = 'pre_orders';
    protected $fillable = [
        'noproduct','aoorder','date','roorder','tprice'
    ];
}
