<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{

    protected $casts = [
        'status' => 'boolean',
    ];
}
