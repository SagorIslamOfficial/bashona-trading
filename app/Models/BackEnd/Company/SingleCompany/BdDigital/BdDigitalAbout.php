<?php

namespace App\Models\BackEnd\Company\SingleCompany\BdDigital;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BdDigitalAbout extends Model
{
    use HasFactory;

    protected $table = 'bd_digital_abouts';
    protected $fillable = ['title', 'slug', 'text', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/bd-digital/bd-digital-about/". Str::slug($this->id)."/edit");
    }
}
