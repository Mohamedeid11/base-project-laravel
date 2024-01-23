<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory , HasTranslations ;
    public $translatable = ['name','content'];
    protected $guarded = ['id'];

    public function getAvatar()
    {
        return  $this->getFirstMediaUrl('pages') == null
                ? asset('end-user/assets/img/logo/logo-nav.png')
                : $this->getFirstMediaUrl('pages');
    }

}
