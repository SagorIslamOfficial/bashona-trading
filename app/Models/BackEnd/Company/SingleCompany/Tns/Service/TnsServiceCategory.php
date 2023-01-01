<?php

namespace App\Models\BackEnd\Company\SingleCompany\Tns\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TnsServiceCategory extends Model
{
    use HasFactory;

    protected $table = 'tns_service_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/company/tns/service/tns-category/". Str::slug($this->id)."/edit");
    }

    public function tnsServiceItem() {
        return $this->hasMany(TnsServiceItem::class);
    }
}
