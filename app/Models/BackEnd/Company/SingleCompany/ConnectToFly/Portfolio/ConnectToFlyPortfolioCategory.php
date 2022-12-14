<?php

namespace App\Models\BackEnd\Company\SingleCompany\ConnectToFly\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ConnectToFlyPortfolioCategory extends Model
{
    use HasFactory;

    protected $table = 'connect_to_fly_portfolio_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/company/connect-to-fly/portfolio/ctf-portfolio-category/". Str::slug($this->id)."/edit");
    }

    public function connectToFlyPortfolioItemItem() {
        return $this->hasMany(ConnectToFlyPortfolioItem::class);
    }
}
