<?php

namespace App\Models\BackEnd\SectionDivider\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'hst_galleries';
    protected $fillable = ['headingGallery', 'subTextGallery'];

    //URL name define
    public function editPath() {
        return url("admin/heading-and-sub-text/hst-gallery/". Str::slug($this->id)."/edit");
    }
}
