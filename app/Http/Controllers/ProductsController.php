<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Validators\ProductValidator;
use Illuminate\Routing\ResponseFactory as Response;

class ProductsController 
{
    /** @var Product */
    private $productModel;

    /** @var ProductValidator */
    private $productValidator;

    /** @var Response */
    private $response;

    /**
     * @param Product $productModel
     * @param ProductValidator $productValidator
     * @param Response $response
     */
    public function __construct(Product $productModel, ProductValidator $productValidator, Response $response)
    {
        $this->productModel = $productModel;
        $this->productValidator = $productValidator;
        $this->response = $response;
    }

    /**
     * @param Request $request
     */
    public function addProduct(Request $request) 
    {
        $requestData = $request->all();

        if ($this->productValidator->validate($requestData) === false) {
            return $this->response->view('failed');
        }

        $this->productModel->create($requestData);
        /*
        1: Validate data
        2: Transform data
        3: Push data to the database
        4: Return new created object
        */

        return $this->response->json(['status' => 'succeeded']);
    }
}
