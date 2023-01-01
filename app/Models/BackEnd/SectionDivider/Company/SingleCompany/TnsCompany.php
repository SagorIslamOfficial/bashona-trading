<?php

namespace App\Models\BackEnd\SectionDivider\Company\SingleCompany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TnsCompany extends Model
{
    use HasFactory;

    protected $table = 'hst_tns_companies';
    protected $fillable = ['headingTnsCompany', 'subTextTnsCompany', 'headingTnsCompanyService', 'subTextTnsCompanyService', 'headingTnsCompanyTeam', 'subTextTnsCompanyTeam'];

    //URL name define
    public function editPath() {
        return url("admin/heading-and-sub-text/companies/hst-tns/". Str::slug($this->id)."/edit");
    }
}
