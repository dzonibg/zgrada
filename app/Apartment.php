<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Apartment
 *
 * @property int $id
 * @property int $number
 * @property string $name
 * @property int $total_paid
 * @property int $months_paid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Payment[] $payment
 * @property-read int|null $payment_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereMonthsPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereTotalPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Apartment extends Model
{

    protected $fillable = ['name', 'number'];

    public function payment() {
//        return $this->hasMany("App\Payment", "apartment_number", "number");
        return $this->hasMany('App\Payment', 'number'); //TODO NEED TO FIX THE RELATIONSHIP
    }
}
