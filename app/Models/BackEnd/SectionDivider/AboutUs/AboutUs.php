<?php

namespace App\Models\BackEnd\SectionDivider\AboutUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'hst_about_us';
    protected $fillable = ['headingAboutUs', 'subTextAboutUs', 'headingAboutUsTeam', 'subTextAboutUsTeam', 'headingAboutUsClient', 'subTextAboutUsClient'];

    //URL name define
    public function editPath() {
        return url("admin/heading-and-sub-text/hst-about-us/". Str::slug($this->id)."/edit");
    }
}
