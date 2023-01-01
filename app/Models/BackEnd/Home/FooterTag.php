<?php

namespace App\Models\BackEnd\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FooterTag extends Model
{
    use HasFactory;

    protected $table = 'footer_tags';
    protected $fillable = ['name', 'slug', 'link'];

    //URL name define
    public function editPath() {
        return url("admin/footer-tag/". Str::slug($this->id)."/edit");
    }
}
