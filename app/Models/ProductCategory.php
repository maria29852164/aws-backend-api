<?php

namespace App\Models;

use App\Enums\ProductCategoryEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends BaseModel implements ProductCategoryEnum
{
    use HasFactory;
    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::CATEGORY_ID,
        self::PRODUCT_ID
    ];

}
