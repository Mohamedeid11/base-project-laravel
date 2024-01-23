<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory, HasTranslations ;
    protected $guarded = [];
    public $translatable = ['title','content'];

    public function getAvatar()
    {
        return  $this->getFirstMediaUrl('sliders') == null ? '' : $this->getFirstMediaUrl('sliders');
    }

    public function getCreatedAt(): string
    {
        return $this->created_at->format('Y-m-d');
    }
}
