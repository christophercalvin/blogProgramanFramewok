<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=[
        'id_categories',
        'gambar',
        'judul',
        'deskripsi',
        'user_id',
    ];

    public function user()
	{
		return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }
    
    public function categories()
	{
		return $this->belongsTo(\App\Models\Category::class, 'id_categories', 'id');
    }
    
    public function gambarBlog()
	{
		return $this->hasMany('App\Models\GambarBlog')->orderBy('id', 'DESC');
	}
}
