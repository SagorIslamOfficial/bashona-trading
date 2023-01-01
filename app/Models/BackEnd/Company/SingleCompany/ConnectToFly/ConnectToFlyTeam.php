<?php

namespace App\Models\BackEnd\Company\SingleCompany\ConnectToFly;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ConnectToFlyTeam extends Model
{
    use HasFactory;

    protected $table = 'connect_to_fly_teams';
    protected $fillable = ['name', 'slug', 'position', 'description', 'email', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/connect-to-fly/ctf-team/". Str::slug($this->id)."/edit");
    }
}
