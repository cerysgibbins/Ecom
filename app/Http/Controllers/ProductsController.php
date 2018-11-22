<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Validators\ProductValidator;
use App\Transformers\ProductTransformer;
use Illuminate\Routing\ResponseFactory as Response;

class ProductsController 
{
    /** @var Product */
    private $productModel;

    /** @var ProductValidator */
    private $productValidator;

    /** @var ProductTransformer */
    private $productTransformer;

    /** @var Response */
    private $response;

    /**
     * @param Product $productModel
     * @param ProductValidator $productValidator
     * @param ProductTransformer $productTransformer
     * @param Response $response
     */
    public function __construct(Product $productModel, ProductValidator $productValidator, Response $response, ProductTransformer $productTransformer)
    {
        $this->productModel = $productModel;
        $this->productValidator = $productValidator;
        $this->productTransformer = $productTransformer;
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

        $requestData = $this->productTransformer->transform($requestData);

        $product = $this->productModel->create($requestData);

        return $this->response->json([
            'status' => 'succeeded',
            'product' => $product
        ]);
    }
}
