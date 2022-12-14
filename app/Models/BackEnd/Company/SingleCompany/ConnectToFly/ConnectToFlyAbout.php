<?php

namespace App\Models\BackEnd\Company\SingleCompany\ConnectToFly;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ConnectToFlyAbout extends Model
{
    use HasFactory;

    protected $table = 'connect_to_fly_abouts';
    protected $fillable = ['title', 'slug', 'text', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/connect-to-fly/ctf-about/". Str::slug($this->id)."/edit");
    }
}
