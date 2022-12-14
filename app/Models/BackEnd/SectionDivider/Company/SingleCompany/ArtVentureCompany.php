<?php

namespace App\Models\BackEnd\SectionDivider\Company\SingleCompany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArtVentureCompany extends Model
{
    use HasFactory;

    protected $table = 'hst_art_venture_companies';
    protected $fillable = ['headingArtVentureCompany', 'subTextArtVentureCompany', 'headingArtVentureCompanyService', 'subTextArtVentureCompanyService', 'headingArtVentureCompanyTeam', 'subTextArtVentureCompanyTeam'];

    //URL name define
    public function editPath() {
        return url("admin/heading-and-sub-text/companies/hst-art-venture/". Str::slug($this->id)."/edit");
    }
}
