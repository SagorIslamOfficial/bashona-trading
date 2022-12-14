<?php

namespace App\Models\BackEnd\Company\FullTeam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CompanyFullTeamItem extends Model
{
    use HasFactory;

    protected $table = 'company_full_team_items';
    protected $fillable = ['name', 'slug', 'dignity', 'description', 'phone', 'email', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/full-team-item/". Str::slug($this->id)."/edit");
    }

    public function companyFullTeamCategory() {
        return $this->belongsTo(CompanyFullTeamCategory::class, 'company_full_team_category_id');
    }
}
