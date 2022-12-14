<?php

namespace App\Models\BackEnd\SectionDivider\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Company extends Model
{
    use HasFactory;

    protected $table = 'hst_companies';
    protected $fillable = ['headingCompanies', 'subTextCompanies', 'headingCompanyTeam', 'subTextCompanyTeam'];

    //URL name define
    public function editPath() {
        return url("admin/heading-and-sub-text/companies/hst-companies/". Str::slug($this->id)."/edit");
    }
}
