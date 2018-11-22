<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diaper extends Model
{
    protected $guarded = ['id', 'create_at', 'update_at'];
}
