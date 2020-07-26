<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Payment
 *
 * @property int $id
 * @property int $apartment_number
 * @property string|null $payment_date
 * @property int|null $payment_month
 * @property int $paid
 * @property int|null $payment_method
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Apartment|null $apartment
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereApartmentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePaymentMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
//    public function apartment() {
//        return $this->belongsTo('App\Apartment', 'number'); //TODO NEED TO FIX!!!
//    }
}
