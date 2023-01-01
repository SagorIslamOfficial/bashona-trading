<?php

namespace App\Models\BackEnd\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class QuickLink extends Model
{
    use HasFactory;

    protected $table = 'quick_links';
    protected $fillable = ['name', 'slug', 'link'];

    //URL name define
    public function editPath() {
        return url("admin/quick-link/". Str::slug($this->id)."/edit");
    }
}
