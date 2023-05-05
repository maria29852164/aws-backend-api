<?php

namespace App\Models;

use App\Enums\CarouselContentEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselContent extends BaseModel implements CarouselContentEnum
{
    use HasFactory;
    protected $table = self::TABLE_NAME;
    protected $fillable= [
        self::CAROUSEL_NAME
    ];
}
