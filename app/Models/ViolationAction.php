<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $violation_id
 * @property Carbon $record_date
 * @property int $action_date
 * @property string $action_taken
 * @property string $other_remarks
 */
class ViolationAction extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'violation_id',
        'record_date',
        'action_date',
        'action_taken',
        'other_remarks',
    ];

    protected $casts = [
        'record_date' => 'datetime',
        'action_date' => 'datetime',
    ];
}
