<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_uses';
    protected $fillable = [
        'cname','cemail','cphoneNo','creason','question','details'
    ];
}
