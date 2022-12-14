<?php

namespace App\Models\BackEnd\Company\SingleCompany\ConnectToFly\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ConnectToFlyPortfolioItem extends Model
{
    use HasFactory;

    protected $table = 'connect_to_fly_portfolio_items';
    protected $fillable = ['connect_to_fly_portfolio_category_id', 'name', 'slug', 'company', 'image', 'images', 'project_heading', 'project_description', 'project_details_heading', 'project_client', 'project_client_content', 'project_date', 'project_date_content', 'project_skills', 'project_skills_content', 'project_url', 'project_url_content', 'project_link'];

    //URL name define for edit
    public function editPath() {
        return url("admin/company/connect-to-fly/portfolio/ctf-portfolio-item/". Str::slug($this->id)."/edit");
    }
    //URL slug name define for View
    public function showPath() {
        return url("admin/company/connect-to-fly/portfolio/ctf-portfolio-item/". Str::slug($this->id));
    }

    public function connectToFlyPortfolioItemCategory() {
        return $this->belongsTo(ConnectToFlyPortfolioCategory::class, 'connect_to_fly_portfolio_category_id');
    }
}
