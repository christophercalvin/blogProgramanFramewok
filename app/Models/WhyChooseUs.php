<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    protected $fillable=[
        'user_id',
        'deskripsi',
    ];

    public function user()
	{
		return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }
}
