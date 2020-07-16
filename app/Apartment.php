<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{

    protected $fillable = ['name', 'number'];

    public function payment() {
        return $this->hasMany("App\Payment", "apartment_number", "number");
    }
}
