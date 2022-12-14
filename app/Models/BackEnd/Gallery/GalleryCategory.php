<?php

namespace App\Models\BackEnd\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GalleryCategory extends Model
{
    use HasFactory;

    protected $table = 'gallery_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/gallery/gallery-category/". Str::slug($this->id)."/edit");
    }

    public function items() {
        return $this->hasMany(GalleryItem::class);
    }
}
