<?php

namespace App\Models\BackEnd\AboutUs\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TeamCategory extends Model
{
    use HasFactory;

    protected $table = 'team_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/about-us/team-category/". Str::slug($this->id)."/edit");
    }

    public function teamMember() {
        return $this->hasMany(TeamMember::class);
    }
}
