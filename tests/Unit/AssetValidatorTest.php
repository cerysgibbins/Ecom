<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Validators\AssetValidator;
use Illuminate\Validation\Factory as Validator;

class AssetValidatorTest extends TestCase
{
    /** @var AssetValidator */
    private $validator;

    /** @var Validator */
    private $validatorMock;

    public function setUp()
    {
        $this->validatorMock = $this->getMockBuilder(Validator::class)
            ->setMethods(['validate'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->validator = new AssetValidator($this->validatorMock);
    }

    public function testValidatorReturnsFalseOnFailedValidation()
    {
        $dataToValidate = [
            'type' => '', 
            'file_name' => 'cerys_cv',
            'product_id' => 1
        ];

        $this->validatorMock->expects($this->once())
            ->method('validate')
            ->with($dataToValidate)
            ->will($this->returnValue(false));

        $this->assertFalse($this->validator->validate($dataToValidate));
    }

    public function testValidatorReturnsTrueOnSuccessfulValidation()
    {
        $dataToValidate = [
            'type' => '1', 
            'file_name' => 'cerys_cv',
            'product_id' => 1
        ];

        $this->validatorMock->expects($this->once())
            ->method('validate')
            ->with($dataToValidate)
            ->will($this->returnValue(true));

        $this->assertTrue($this->validator->validate($dataToValidate));
    }
}
