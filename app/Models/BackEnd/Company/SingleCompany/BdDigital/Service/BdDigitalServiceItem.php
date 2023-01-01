<?php

namespace App\Models\BackEnd\Company\SingleCompany\BdDigital\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BdDigitalServiceItem extends Model
{
    use HasFactory;

    protected $table = 'bd_digital_service_items';
    protected $fillable = ['bd_digital_service_category_id', 'name', 'slug', 'company', 'image', 'images', 'project_heading', 'project_description', 'project_details_heading', 'project_client', 'project_client_content', 'project_date', 'project_date_content', 'project_skills', 'project_skills_content', 'project_url', 'project_url_content', 'project_link', 'portfolio_heading', 'portfolio_images'];

    //URL name define for edit
    public function editPath() {
        return url("admin/company/bd-digital/service/bd-digital-service-item/". Str::slug($this->id)."/edit");
    }
    //URL slug name define for View
    public function showPath() {
        return url("admin/company/bd-digital/service/bd-digital-service-item/". Str::slug($this->id));
    }

    public function bdDigitalServiceCategory() {
        return $this->belongsTo(BdDigitalServiceCategory::class, 'bd_digital_service_category_id');
    }
}
