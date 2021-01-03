<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable=[
        'judul',
        'deskripsi',
        'user_id',
    ];

    public function user()
	{
		return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }
}
