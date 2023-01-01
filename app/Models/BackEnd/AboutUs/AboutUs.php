<?php

namespace App\Models\BackEnd\AboutUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';
    protected $fillable = ['heading', 'description', 'image', 'link', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/about-us/about-us/". Str::slug($this->id)."/edit");
    }
}
