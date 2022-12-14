<?php

namespace App\Models\BackEnd\Company\SingleCompany\ArtVenture\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArtVentureItem extends Model
{
    use HasFactory;

    protected $table = 'art_venture_items';
    protected $fillable = ['art_venture_category_id', 'name', 'slug', 'company', 'image', 'images', 'project_heading', 'project_description', 'project_details_heading', 'project_client', 'project_client_content', 'project_date', 'project_date_content', 'project_skills', 'project_skills_content', 'project_url', 'project_url_content', 'project_link', 'portfolio_heading', 'portfolio_images'];

    //URL name define for edit
    public function editPath() {
        return url("admin/company/art-venture/service/art-venture-item/". Str::slug($this->id)."/edit");
    }
    //URL slug name define for View
    public function showPath() {
        return url("admin/company/art-venture/service/art-venture-item/". Str::slug($this->id));
    }

    public function artVentureCategory() {
        return $this->belongsTo(ArtVentureCategory::class, 'art_venture_category_id');
    }
}
