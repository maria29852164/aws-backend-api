<?php

namespace App\Models;

use App\Enums\FooterContentEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterContent extends BaseModel implements FooterContentEnum
{
    use HasFactory;
    protected $table = self::TABLE_NAME;


}
