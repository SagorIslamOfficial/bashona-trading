<?php

namespace App\Models\BackEnd\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SocialPageIntegration extends Model
{
    use HasFactory;

    protected $table = 'social_page_integrations';
    protected $fillable = ['version', 'nonce', 'page_link'];

    //URL name define
    public function editPath() {
        return url("admin/footer-page-integration/". Str::slug($this->id)."/edit");
    }
}
