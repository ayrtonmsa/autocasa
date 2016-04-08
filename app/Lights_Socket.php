<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lights_Socket extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lights_sockets';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'type', 'name', 'voltage', 'status'];

}
