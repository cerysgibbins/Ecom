<?php

namespace App\Validators;

use Illuminate\Validation\Factory as Validator;

class ProductValidator 
{
    /** @var Validator */
    private $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function validate($productData)
    {
        return $this->validator->validate($productData, [
            'name' => 'required|max:255',
            'code' => 'required|unique:products,code|max:10',
            'price_in_pence' => 'required|integer'
        ]);
    }
}
