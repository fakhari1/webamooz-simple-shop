<?php

namespace App\Models\Admin;

use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $appends = ['image_icon', 'shamsi_created_at', 'image_zoom_url'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }


    public function getImageIconAttribute()
    {
        return DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . $this->image_url;
    }

    public function getShamsiCreatedAtAttribute()
    {
        return \verta($this->created_at)->formatJalaliDate();
    }

    public function getImageZoomUrlAttribute()
    {
        return str_replace('\\', '/', $this->image_icon);
    }
}
