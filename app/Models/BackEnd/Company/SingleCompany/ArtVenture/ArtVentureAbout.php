<?php

namespace App\Models\BackEnd\Company\SingleCompany\ArtVenture;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArtVentureAbout extends Model
{
    use HasFactory;

    protected $table = 'art_venture_abouts';
    protected $fillable = ['title', 'slug', 'text', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/art-venture/art-venture-about/". Str::slug($this->id)."/edit");
    }
}
