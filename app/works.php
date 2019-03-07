<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class works extends Model
{
    protected $fillable = [
        'title', 'description', 'technology','manual','source_code'
    ];
}
