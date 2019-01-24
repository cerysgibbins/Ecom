<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use App\Validators\AssetValidator;
use App\Transformers\AssetTransformer;
use Illuminate\Routing\ResponseFactory as Response;


class AssetsController 
{
    /** @var Asset */
    private $assetModel;

    /** @var AssetValidator */
    private $assetValidator;
    
    /** @var AssetTransformer */
    private $assetransformer;
    
    /** @var Response */
    private $response;
    
    /**
    * @param Asset $assetModel
    * @param AssetValidator $assetValidator
    * @param AssetTransformer $assetTransformer
    * @param Response $response
    */
    public function __construct(Asset $assetModel, AssetValidator $assetValidator, Response $response, AssetTransformer $assetTransformer)
    {
        $this->assetModel = $assetModel;
        $this->assetValidator = $assetValidator;
        $this->assetTransformer = $assetTransformer;
        $this->response = $response;
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function addAsset(Request $request) 
    {
        $requestData = $request->all();

        if ($this->assetValidator->validate($requestData) === false) {
            return $this->response->view('failed');
        }

        $requestData = $this->assetTransformer->transform($requestData);

        $asset = $this->assetModel->create($requestData);

        return $this->response->json([
            'status' => 'succeeded',
            'asset' => $asset
        ]);
    }

    /**
     * @param integer $id
     * @return Response
     */
    public function getAsset($id)
    {
        $asset = $this->assetModel->find($id);

        if ($asset === null) {
            return $this->response->json([
                'status' => 'failed'
            ]);
        }

        return $this->response->json([
            'status' => 'succeeded',
            'asset' => $asset
        ]);
    }
}
