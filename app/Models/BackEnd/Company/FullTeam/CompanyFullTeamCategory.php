<?php

namespace App\Models\BackEnd\Company\FullTeam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CompanyFullTeamCategory extends Model
{
    use HasFactory;

    protected $table = 'company_full_team_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/company/full-team-category/". Str::slug($this->id)."/edit");
    }

    public function companyFullTeamItem() {
        return $this->hasMany(CompanyFullTeamItem::class);
    }
}
