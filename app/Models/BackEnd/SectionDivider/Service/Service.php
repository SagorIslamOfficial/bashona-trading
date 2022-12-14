<?php

namespace App\Models\BackEnd\SectionDivider\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $table = 'hst_services';
    protected $fillable = ['headingService', 'subTextService'];

    //URL name define
    public function editPath() {
        return url("admin/heading-and-sub-text/hst-service/". Str::slug($this->id)."/edit");
    }
}
