<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

class InventoryFilters extends QueryFilters
{
    /**
     * Filter by type.
     *
     * @param  string $value
     * @return Builder
     */
    public function type($value)
    {
        return $this->builder->where('quantity', $value);
    }

    /**
     * Filter by query.
     *
     * @param  string $string
     * @return Builder
     */
    public function query($string)
    {
        return $this->builder->whereRaw("(name LIKE '{$string}%' or `item_no` LIKE '{$string}%')");
    }
}