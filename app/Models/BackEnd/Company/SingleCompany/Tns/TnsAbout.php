<?php

namespace App\Models\BackEnd\Company\SingleCompany\Tns;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TnsAbout extends Model
{
    use HasFactory;

    protected $table = 'tns_abouts';
    protected $fillable = ['title', 'slug', 'text', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/tns/tns-about/". Str::slug($this->id)."/edit");
    }
}
