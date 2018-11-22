<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Transformers\ProductTransformer;

class ProductTransformerTest extends TestCase
{
    /** @var ProductTransformer */
    private $transformer;

    public function setUp()
    {
        $this->transformer = new ProductTransformer();
    }

    public function testProductTransformerReturnsTransformedData()
    {
        $transformData = ['example' => 'hello'];
        $expectedData = ['example' => 'hello'];
        
        $this->assertSame($expectedData, $this->transformer->transform($transformData));
    }
}
