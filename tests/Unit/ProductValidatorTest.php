<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Validators\ProductValidator;
use Illuminate\Validation\Factory as Validator;

class ProductValidatorTest extends TestCase
{
    /** @var ProductValidator */
    private $validator;

    /** @var Validator */
    private $validatorMock;

    public function setUp()
    {
        $this->validatorMock = $this->getMockBuilder(Validator::class)
            ->setMethods(['validate'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->validator = new ProductValidator($this->validatorMock);
    }

    public function testProductNameCannotBeBlank()
    {
        $dataToValidate = [
            'name' => '', 
            'code' => '1000',
            'price_in_pence' => 1
        ];

        $this->validatorMock->expects($this->once())
            ->method('validate')
            ->with($dataToValidate)
            ->will($this->returnValue(false));

        $this->assertFalse($this->validator->validate($dataToValidate));
    }
}
