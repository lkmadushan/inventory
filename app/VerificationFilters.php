<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class VerificationFilters extends QueryFilters
{
    public function today()
    {
        return $this->builder->byDate(Carbon::now()->format('Y-m-d'));
    }
}
