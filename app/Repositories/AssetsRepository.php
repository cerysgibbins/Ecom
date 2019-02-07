<?php 

namespace App\Repositories;

use App\Asset;
use App\Validators\AssetValidator;

class AssetsRepository 
{
    /** @var Asset */
    private $assetModel;

    /** @var AssetValidator */
    private $assetValidator;

    /**
     * @param Asset $assetModel
     * @param AssetValidator $assetValidator
     */
    public function __construct(Asset $assetModel, AssetValidator $assetValidator)
    {
        $this->assetModel = $assetModel;
        $this->assetValidator = $assetValidator;
    }

    /**
     * @param $type
     * @param $fileName
     * @param $productId
     */
    public function addNew($type, $fileName, $productId ) 
    {
        $validationResult = $this->assetValidator->validate([
            'type' => $type,
            'file_name' => $fileName,
            'product_id' => $productId
        ]);
        
        if ($validationResult === false){
            return null;
        }

        return $this->assetModel->create([
            'type' => $type,
            'file_name' => $fileName,
            'product_id' => $productId
        ]);
    }

    public function getAssetById($id)
    {
        return $this->assetModel->find($id);
        
    }
}
