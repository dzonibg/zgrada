<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Period
 *
 * @property int $id
 * @property string $month
 * @property int $month_number
 * @property string $start_date
 * @property string $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period whereMonthNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Period extends Model
{
    //
}
