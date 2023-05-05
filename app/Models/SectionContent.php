<?php

namespace App\Models;

use App\Enums\SectionContentEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SectionContent extends BaseModel implements SectionContentEnum
{
    use HasFactory;
    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::SECTION_BUTTON_TITLE,
        self::SECTION_DESCRIPTION,
        self::SECTION_TITLE,

    ];
    public function Carousel():HasOne{
        return $this->hasOne(CarouselContent::class,self::PRINCIPAL_ID,self::CAROUSEL_ID);
    }
}
