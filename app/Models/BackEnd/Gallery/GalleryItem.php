<?php

namespace App\Models\BackEnd\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GalleryItem extends Model
{
    use HasFactory;

    protected $table = 'gallery_items';
    protected $fillable = ['gallery_category_id', 'name', 'slug', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/gallery/gallery-item/". Str::slug($this->id)."/edit");
    }

    public function category() {
        return $this->belongsTo(GalleryCategory::class, 'gallery_category_id');
    }
}
