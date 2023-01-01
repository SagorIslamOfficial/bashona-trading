<?php

namespace App\Models\BackEnd\SectionDivider\Company\SingleCompany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BdDigitalCompany extends Model
{
    use HasFactory;

    protected $table = 'hst_bd_digital_companies';
    protected $fillable = ['headingBdDigitalCompany', 'subTextBdDigitalCompany', 'headingBdDigitalCompanyService', 'subTextBdDigitalCompanyService', 'headingBdDigitalCompanyTeam', 'subTextBdDigitalCompanyTeam'];

    //URL name define
    public function editPath() {
        return url("admin/heading-and-sub-text/companies/hst-bd-digital/". Str::slug($this->id)."/edit");
    }
}
