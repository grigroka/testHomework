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
            [535216, '535K'],
            [99950, '100K']
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