<?php

namespace App\Models\BackEnd\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    protected $fillable = ['office_location', 'address', 'phone', 'email'];

    //URL name define
    public function editPath() {
        return url("admin/contact/address/". Str::slug($this->slug)."/edit");
    }
}
