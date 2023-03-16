<?php

namespace App\Models\BackEnd\AboutUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutMessage extends Model
{
    protected $table = 'about_messages';
    protected $fillable = ['heading', 'slug', 'message'];

    //URL name define
    public function editPath() {
        return url("admin/about-us/about-message/". Str::slug($this->id)."/edit");
    }
}
