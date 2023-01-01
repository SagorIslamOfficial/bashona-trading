<?php

namespace App\Models\BackEnd\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PartialHeader extends Model
{
    use HasFactory;

    protected $table = 'partial_headers';
    protected $fillable = ['number_1', 'number_2', 'email_1', 'email_2', 'logo', 'text', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/partial_header/". Str::slug($this->id)."/edit");
    }
}
