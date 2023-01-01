<?php

namespace App\Models\BackEnd\Company\SingleCompany\Tns\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TnsPortfolioCategory extends Model
{
    use HasFactory;

    protected $table = 'tns_portfolio_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/company/tns/portfolio/tns-portfolio-category/". Str::slug($this->id)."/edit");
    }

    public function tnsPortfolioItem() {
        return $this->hasMany(TnsPortfolioItem::class);
    }
}
