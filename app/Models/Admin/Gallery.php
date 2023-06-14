<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;


    protected $guarded = [];
    protected $appends = ['image_icon'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function getImageIconAttribute()
    {
        return DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . $this->path;
    }
}
