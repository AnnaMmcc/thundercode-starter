<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Service extends Model
{
    protected $table = 'services';


    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}
}
