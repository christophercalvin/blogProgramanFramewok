<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'gambar_kategori',
        'nama',
        'deskripsi',
        'slug',
        'parent_id',
    ];

    public function childs(){
        return $this->HasMany('App\Models\Category', 'parent_id');
    }

    public function parent(){
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function blogs()
    {
        return $this->hasMany(\App\Models\Blog::class, 'id_categories', 'id');
    }

}
