<?php

namespace App\Models\BackEnd\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';
    protected $fillable = ['image', 'heading_text', 'sub_text', 'link', 'name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/slider/". Str::slug($this->id)."/edit");
    }
}
