<?php

namespace App;

class Barcode
{
    protected $code;

    public function __construct($code)
    {
        $this->code = $code;
    }

    public function getItemCode()
    {
        return $this->extract()[0];
    }

    public function getLocationCode()
    {
        return $this->extract()[1];
    }

    public function getRackCode()
    {
        return $this->extract()[2];
    }

    public function getShelfCode()
    {
        return $this->extract()[3];
    }

    public function getColorCode()
    {
        return count($this->extract()) == 5 ? $this->extract()[4] : null;
    }

    public function hasNewItemCode()
    {
        return preg_match('/^@\d+$/', $this->getItemCode());
    }

    private function extract()
    {
        return explode('\\', $this->code);
    }
}