<?php

namespace App\Models\BackEnd\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Map extends Model
{
    use HasFactory;

    protected $table = 'maps';
    protected $fillable = ['map_location', 'map'];

    //URL name define
    public function editPath() {
        return url("admin/contact/map/". Str::slug($this->id)."/edit");
    }
}
