<?php

namespace App\Models;

use App\Enums\HeroContentEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HeroContent extends BaseModel implements HeroContentEnum
{
    use HasFactory;
    protected $table = self::TABLE_NAME;
    protected $fillable = [
       self::HERO_DESCRIPTION,
       self::HERO_TITLE,
       self::HERO_IMG
    ];
    public function Carousel():HasOne{
        return $this->hasOne(CarouselContent::class,self::PRINCIPAL_ID,self::CAROUSEL_ID);
    }
}
