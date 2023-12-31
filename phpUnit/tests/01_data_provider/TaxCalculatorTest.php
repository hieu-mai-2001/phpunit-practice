<?php
declare(strict_types=1);

require_once(__DIR__ . "/../../vendor/autoload.php");
require_once __DIR__ . "/../../src/01_data_provider/TaxCalculator.php";

use PHPUnit\Framework\TestCase;
use exp\src\tax\TaxCalculator;

class TaxCalculatorTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    protected function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public static function getTaxData() {
        $other_region = 0;
        return [
            [REGION_ASIA, 100, 10],
            [REGION_AMERICA, 100, 20],
            [REGION_EUROPE, 100, 30],
            [$other_region, 100, 40],
        ];
    }

    /**
     * @dataProvider getTaxData
     */
    public function testTaxCalculate( int $region, int $price, int $expected_tax ) {
        $taxCalculator = new TaxCalculator($region);

        $this->assertEquals($expected_tax, $taxCalculator->taxCalculate($price));
    }
}
