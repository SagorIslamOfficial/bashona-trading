<?php

namespace App\Models\BackEnd\Company\SingleCompany\ArtVenture;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArtVentureTeam extends Model
{
    use HasFactory;

    protected $table = 'art_venture_teams';
    protected $fillable = ['name', 'slug', 'position', 'description', 'email', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/art-venture/art-venture-team/". Str::slug($this->id)."/edit");
    }
}
