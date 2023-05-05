<?php

namespace App\Models;

use App\Enums\CategoryEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends BaseModel implements CategoryEnum
{
    use HasFactory;
    protected $table = self::TABLE_NAME;
    protected $fillable = [
        self::CATEGORY_DESCRIPTION,
        self::CATEGORY_NAME
    ];
    public function Products():BelongsToMany{
        return $this->belongsToMany(Product::class,ProductCategory::class);
    }
}
