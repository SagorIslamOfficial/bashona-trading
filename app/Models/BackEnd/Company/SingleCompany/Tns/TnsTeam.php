<?php

namespace App\Models\BackEnd\Company\SingleCompany\Tns;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TnsTeam extends Model
{
    use HasFactory;

    protected $table = 'tns_teams';
    protected $fillable = ['name', 'slug', 'position', 'description', 'email', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/tns/tns-team/". Str::slug($this->id)."/edit");
    }
}
