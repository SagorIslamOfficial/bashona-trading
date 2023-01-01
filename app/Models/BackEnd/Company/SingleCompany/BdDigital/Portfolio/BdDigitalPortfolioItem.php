<?php

namespace App\Models\BackEnd\Company\SingleCompany\BdDigital\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BdDigitalPortfolioItem extends Model
{
    use HasFactory;

    protected $table = 'bd_digital_portfolio_items_portfolio_items';
    protected $fillable = ['bd_digital_portfolio_category_id', 'name', 'slug', 'company', 'image', 'images', 'project_heading', 'project_description', 'project_details_heading', 'project_client', 'project_client_content', 'project_date', 'project_date_content', 'project_skills', 'project_skills_content', 'project_url', 'project_url_content', 'project_link'];

    //URL name define for edit
    public function editPath() {
        return url("admin/company/bd-digital/portfolio/bd-digital-portfolio-item/". Str::slug($this->id)."/edit");
    }
    //URL slug name define for View
    public function showPath() {
        return url("admin/company/bd-digital/portfolio/bd-digital-portfolio-item/". Str::slug($this->id));
    }

    public function bdDigitalPortfolioCategory() {
        return $this->belongsTo(BdDigitalPortfolioCategory::class, 'bd_digital_portfolio_category_id');
    }
}
