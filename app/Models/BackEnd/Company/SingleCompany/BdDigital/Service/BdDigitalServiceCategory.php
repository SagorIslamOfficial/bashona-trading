<?php

namespace App\Models\BackEnd\Company\SingleCompany\BdDigital\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BdDigitalServiceCategory extends Model
{
    use HasFactory;

    protected $table = 'bd_digital_service_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/company/bd-digital/service/bd-digital-service-category/". Str::slug($this->id)."/edit");
    }

    public function bdDigitalServiceItem() {
        return $this->hasMany(BdDigitalServiceItem::class);
    }
}
