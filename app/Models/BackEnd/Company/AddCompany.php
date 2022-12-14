<?php

namespace App\Models\BackEnd\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AddCompany extends Model
{
    use HasFactory;

    protected $table = 'add_companies';
    protected $fillable = ['name', 'slug', 'text', 'link', 'image'];

    //URL name define
    public function editPath() {
        return url("admin/company/add-company/". Str::slug($this->id)."/edit");
    }
}
