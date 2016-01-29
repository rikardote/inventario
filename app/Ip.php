<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
	protected $table = 'datos';

    protected $fillable = ['ip', 'name', 'ubicacion_id', 'machine_name'];
}
