<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'package_id',
    ];

    public function package()       
    {
        return $this->belongsTo(Package::class);
    }
}
