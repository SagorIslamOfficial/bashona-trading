<?php

namespace App\Models\BackEnd\AboutUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutUsTeam extends Model
{
    use HasFactory;

    protected $table = 'about_us_teams';
    protected $fillable = ['name', 'rightName', 'rightPosition', 'rightMessage', 'rightPhone', 'rightEmail', 'rightImage', 'leftName', 'leftPosition', 'leftMessage', 'leftPhone', 'leftEmail', 'leftImage'];

//    protected $fillable = ['name', 'name1', 'position1', 'description1', 'phone1', 'email1', 'image1', 'name2', 'position2', 'description2', 'phone2', 'email2', 'image2', 'name3', 'position3', 'description3', 'phone3', 'email3', 'image3'];

    //URL name define
    public function editPath() {
        return url("admin/about-us/about-team/". Str::slug($this->id)."/edit");
    }
}
