<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ItemCategory extends Pivot
{
    protected $table = 'item_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'item_id',
        'category_id',
    ];

    protected $dates = [
        "created_at",
        "updated_at",
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
