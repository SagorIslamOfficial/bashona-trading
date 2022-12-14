<?php

namespace App\Models\BackEnd\Company\SingleCompany\BdDigital;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BdDigitalTeam extends Model
{
    use HasFactory;

    protected $table = 'bd_digital_teams';
    protected $fillable = ['name', 'slug', 'position', 'description', 'email', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/bd-digital/bd-digital-team/". Str::slug($this->id)."/edit");
    }
}
