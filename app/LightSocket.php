<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class LightSocket extends Model
{
    use SoftDeletes;

    protected $table = 'lights_sockets';

    protected $fillable = [
        'code', 'type', 'name', 'voltage', 'status',
    ];
}
