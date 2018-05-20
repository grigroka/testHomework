<?php
/**
 * Created by PhpStorm.
 * User: rokas
 * Date: 5/20/18
 * Time: 1:16 PM
 */

namespace App\Tests\Service;

use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    public function getTestData()
    {
        return [
            [2835779, '2.84M'],
            [999500, '1.00M'],
            [999499, '999K'],
            [535216, '535K'],
            [99950, '100K'],
            [99949, '99 949'],
            [27533.78, '27 534'],
            [1000, '1 000'],
            [999.99, '999.99'],
            [999.00, '999'],
            [999.999, '1 000'],
            [533.1, '533.10'],
            [66.6666, '66.67'],
            [12.00, '12'],
            [-2835779, '-2.84M'],
            [-999500, '-1.00M'],
            [-999499, '-999K'],
            [-535216, '-535K'],
            [-99950, '-100K'],
            [-99949, '-99 949'],
            [-27533.78, '-27 534'],
            [-1000, '-1 000'],
            [-999.99, '-999.99'],
            [-999.00, '-999'],
            [-999.999, '-1 000'],
            [-533.1, '-533.10'],
            [-66.6666, '-66.67'],
            [-12.00, '-12'],
            [-123654.89, '-124K']
        ];
    }

    /**
     * @param $number
     * @param $expected
     * @dataProvider getTestData
     */
    public function testConverter($number, $expected)
    {
        $converter = new NumberFormatter();
        $result = $converter->convert($number);
        $this->assertEquals($expected, $result);
    }
}