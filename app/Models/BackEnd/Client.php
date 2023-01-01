<?php

namespace App\Models\BackEnd;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = ['image', 'name', 'slug'];

    //URL name define
    public function editPath() {
        return url("admin/client/". Str::slug($this->id)."/edit");
    }
}
