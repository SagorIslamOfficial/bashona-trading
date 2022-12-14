<?php

namespace App\Models\BackEnd\SectionDivider\ContactUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'hst_contacts';
    protected $fillable = ['headingContact', 'subTextContact', 'headingContactUs', 'subTextContactUs'];

    //URL name define
    public function editPath() {
        return url("admin/heading-and-sub-text/hst-contact-us/". Str::slug($this->id)."/edit");
    }
}
