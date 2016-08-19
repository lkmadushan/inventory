<?php

namespace App\Http\Requests;

class InventoryRequest extends Request
{
    protected $rules = [
        'item_no'       => 'required|unique:inventories,item_no',
        'name'          => 'required',
        'description'   => 'required',
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->requestValidationRules();
    }

    protected function updateRules()
    {
        return array_merge($this->rules,  [
            'item_no' => "required|unique:inventories,item_no,{$this->route('inventory')->id},id",
        ]);
    }
}
