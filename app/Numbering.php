<?php

namespace App;

trait Numbering
{
    public static function bootNumbering()
    {
        $matches = '';

        preg_match_all('/[A-Z]/', (new \ReflectionClass(static::class))->getShortName(), $matches);

        $no = (int) static::max('id') ?: 1;

        $str = sprintf('%s%06d', implode('', $matches[0]), $no);

        static::creating(function($model) use ($str) {
            $model->number = $str;
        });
    }
}