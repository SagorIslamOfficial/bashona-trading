<?php

namespace App\Models\BackEnd\Contact;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class WhatsApp extends Model
{
    protected $table = 'whats_apps';
    protected $fillable = ['number', 'message', 'color', 'text', 'theme', 'position', 'radius'];

    //URL name define
    public function editPath() {
        return url("admin/contact/whatsapp/". Str::slug($this->id)."/edit");
    }
}
