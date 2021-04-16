<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['id_categoria','name', 'price', 'status'];
 
    public function user() 
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function categoria(){ 
        return $this->belongsTo(\App\Models\Categoria::class, 'id_categoria');
    }
 
    public function scopeActive($query) 
    {
        return $query->where('status', 1);
    } 
}
