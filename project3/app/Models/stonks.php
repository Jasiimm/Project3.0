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
        "price_small",
        "price_medium",
        "price_large"
    ];
    const SIZE_FACTORS = [
        'small' => 0.8,
        'medium' => 1,
        'large' => 1.2,
    ];

    public function getPriceBySize($size)
    {
        switch ($size) {
            case 'small':
                return $this->price_small * self::SIZE_FACTORS['small'];
            case 'medium':
                return $this->price_medium * self::SIZE_FACTORS['medium'];
            case 'large':
                return $this->price_large * self::SIZE_FACTORS['large'];
            default:
                return null;
        }
    }
}
