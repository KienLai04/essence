<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'hidden'];
    protected $attributes = ['hidden' => 0];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
}
