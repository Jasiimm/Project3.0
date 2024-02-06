<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stonks extends Model
{
    use HasFactory;

    protected $fillable = [
        "imagePath", 
        "title", 
        "description", 
        "price_index",
    ];

    const SIZE_FACTORS = [
        'small' => 0.8,
        'medium' => 1,
        'large' => 1.2,
    ];

    public function getPriceBySize($size)
    {
        return $this->price_index * self::SIZE_FACTORS[$size];
    }

   

}
