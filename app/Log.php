<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log
{
    use SoftDeletes;

    protected $fillable = [
        'code', 'type', 'voltage', 'status',
    ];
}
