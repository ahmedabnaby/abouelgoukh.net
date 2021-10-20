<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'image',
        'category_id',
        'sub_category_id',
        'status',
        'routeName',
        'description',
        'price'
    ];
}
