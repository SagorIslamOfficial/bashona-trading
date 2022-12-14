<?php

namespace App\Models\BackEnd\Company\SingleCompany\ArtVenture\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArtVentureCategory extends Model
{
    use HasFactory;

    protected $table = 'art_venture_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/company/art-venture/service/art-venture-category/". Str::slug($this->id)."/edit");
    }

    public function artVentureItem() {
        return $this->hasMany(ArtVentureItem::class);
    }
}
