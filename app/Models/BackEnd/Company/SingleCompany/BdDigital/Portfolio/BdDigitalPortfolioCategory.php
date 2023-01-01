<?php

namespace App\Models\BackEnd\Company\SingleCompany\BdDigital\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BdDigitalPortfolioCategory extends Model
{
    use HasFactory;

    protected $table = 'bd_digital_portfolio_categories';
    protected $fillable = ['name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/company/bd-digital/portfolio/bd-digital-portfolio-category/". Str::slug($this->id)."/edit");
    }

    public function bdDigitalPortfolioItem() {
        return $this->hasMany(BdDigitalPortfolioItem::class);
    }
}
