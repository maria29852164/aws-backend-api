<?php

namespace App\Models;

use App\Enums\ProductEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends BaseModel implements ProductEnum
{
    use HasFactory;
    protected $table = self::TABLE_NAME;
    protected $fillable = [
      self::PRODUCT_DESCRIPTION,
      self::PRODUCT_IMG,
        self::PRODUCT_NAME,
        self::PRODUCT_LINK_AWS,
        self::PRODUCT_SECONDARY_DESCRIPTION

    ];
    public function Categories():BelongsToMany{
        return $this->belongsToMany(Category::class,ProductCategory::class);
    }
}
