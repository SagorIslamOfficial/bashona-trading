<?php

namespace App\Models\BackEnd\Company\SingleCompany\ConnectToFly\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ConnectToFlyServiceCategory extends Model
{
    use HasFactory;

    protected $table = 'connect_to_fly_service_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/company/connect-to-fly/service/ctf-service-category/". Str::slug($this->id)."/edit");
    }

    public function connectToFlyServiceItem() {
        return $this->hasMany(ConnectToFlyServiceItem::class);
    }
}
