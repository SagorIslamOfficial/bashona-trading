<?php

namespace App\Models\BackEnd\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FooterSocialLink extends Model
{
    use HasFactory;

    protected $table = 'footer_social_links';
    protected $fillable = ['name', 'color', 'link', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/footer-social/". Str::slug($this->id)."/edit");
    }
}
