<?php

namespace App\Models\BackEnd\SectionDivider\Company\SingleCompany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ConnectToFlyCompany extends Model
{
    use HasFactory;

    protected $table = 'hst_connect_to_fly_companies';
    protected $fillable = ['headingConnectToFlyCompany', 'subTextConnectToFlyCompany', 'headingConnectToFlyCompanyService', 'subTextConnectToFlyCompanyService', 'headingConnectToFlyCompanyTeam', 'subTextConnectToFlyCompanyTeam'];

    //URL name define
    public function editPath() {
        return url("admin/heading-and-sub-text/companies/hst-connect-to-fly/". Str::slug($this->id)."/edit");
    }
}
