<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeOff extends Model
{
    use HasFactory;
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    protected $fillable = [
        'type',
        'start_date',
        'number_of_days',
        'reason',
        'status',
    ];
}
