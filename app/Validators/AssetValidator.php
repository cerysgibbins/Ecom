<?php

namespace App\Validators;

use Illuminate\Validation\Factory as Validator;

class AssetValidator 
{
    /** @var Validator */
    private $validator;

    /**
     * @param Validator $validator
     */
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param array $assetData
     * @return boolean
     */
    public function validate($assetData)
    {
        return $this->validator->validate($assetData, [
            'type' => 'required|integer|max:2|min:1',
            'file_name' => 'required|max:255',
            'product_id' => 'required|integer'
        ]);
    }
}
