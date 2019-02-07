<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\AssetTransformer;
use Illuminate\Routing\ResponseFactory as Response;
use App\Repositories\AssetsRepository;

class AssetsController 
{    
    /** @var AssetTransformer */
    private $assetransformer;
    
    /** @var Response */
    private $response;
    
    /** @var AssetsRepository */
    private $assetsRepository;

    /**
    * @param AssetTransformer $assetTransformer
    * @param Response $response
    * @param AssetsRepository $assetsRepository
    */
    public function __construct(Response $response, AssetTransformer $assetTransformer, AssetsRepository $assetsRepository)
    {
        $this->assetTransformer = $assetTransformer;
        $this->response = $response;
        $this->assetsRepository = $assetsRepository;
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function addAsset(Request $request) 
    {
        $requestData = $request->all();

        $requestData = $this->assetTransformer->transform($requestData);

        if (!file_exists(env('UPLOAD_DIRECTORY') . $requestData['file_name'])) {
            return $this->response->json([
                'status' => 'failed'
            ]);
        }
        
        $asset = $this->assetsRepository->addNew(
            $requestData['type'], 
            $requestData['file_name'], 
            $requestData['product_id']
        );

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

    /**
     * @param integer $id
     * @return Response
     */
    public function getAsset($id)
    {
        $asset = $this->assetsRepository->getAssetById($id);

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
