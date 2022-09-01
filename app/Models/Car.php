<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'color', 'model', 'make', 'registration_no'];

    /**
     * Get the category for the cars.
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
