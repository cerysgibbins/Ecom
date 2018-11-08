<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController 
{
    /** @var Product */
    private $productModel;

    /**
     * @param Product $productModel
     */
    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    /**
     * @param Request $request
     */
    public function addProduct(Request $request) 
    {
        $this->productModel->create($request->all());
        /*
        1: Validate data
        2: Transform data
        3: Push data to the database
        4: Return new created object
        */
    }
}
