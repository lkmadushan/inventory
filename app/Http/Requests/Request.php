<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    protected $rules = [];

    protected function isUpdateRequest()
    {
        return $this->isMethod(Request::METHOD_PATCH);
    }

    protected function requestValidationRules()
    {
        $rules = $this->rules;

        if ($this->isUpdateRequest()) {
            $rules = array_merge($rules, $this->updateRules());
        }

        return $rules;
    }

    protected abstract function updateRules();
}
