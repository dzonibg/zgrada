<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Periods
 *
 * @property int $id
 * @property string $month
 * @property int $month_number
 * @property string $start_date
 * @property string $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods whereMonthNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Periods whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Periods extends Model
{
    //
}
