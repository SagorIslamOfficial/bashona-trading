<?php

namespace App\Models\BackEnd\AboutUs\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TeamMember extends Model
{
    use HasFactory;

    protected $table = 'team_members';
    protected $fillable = ['team_category_id', 'name', 'slug', 'codes'];

    //URL name define for edit
    public function editPath() {
        return url("admin/about-us/team-member/". Str::slug($this->id)."/edit");
    }
    //URL slug name define for View
    public function showPath() {
        return url("admin/about-us/team-member/". Str::slug($this->id));
    }

    public function teamCategory() {
        return $this->belongsTo(TeamCategory::class, 'team_category_id');
    }
}
