<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'img', 'description', 'price', 'status', 'hidden', 'category_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
