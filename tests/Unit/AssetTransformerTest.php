<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Transformers\AssetTransformer;

class AssetTransformerTest extends TestCase
{
    /** @var AssetTransformer */
    private $transformer;

    public function setUp()
    {
        $this->transformer = new AssetTransformer();
    }

    public function testAssetTransformerReturnsTransformedData()
    {
        $transformData = ['example' => 'hello'];
        $expectedData = ['example' => 'hello'];
        
        $this->assertSame($expectedData, $this->transformer->transform($transformData));
    }
}
