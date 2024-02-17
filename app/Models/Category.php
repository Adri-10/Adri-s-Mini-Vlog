<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static function getAllCategory()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'Electronics'
            ],
            1 => [
                'id' => 2,
                'name' => 'Fashion & beauty'
            ],
            2 => [
                'id' => 3,
                'name' => 'Mens Fashion'
            ],
            3 => [
                'id' => 4,
                'name' => 'Women fashion'
            ],
            4 => [
                'id' => 5,
                'name' => 'Accessories'
            ],
        ];
    }
}
