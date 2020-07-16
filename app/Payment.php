<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function apartment() {
        return $this->hasOne("App\Apartment", "number", "apartment_number");
    }
}
