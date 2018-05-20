<?php
/**
 * Created by PhpStorm.
 * User: rokas
 * Date: 5/20/18
 * Time: 4:00 PM
 */

namespace App\Tests\Service;

use App\Service\MoneyFormatter;
use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    public function testFormatEur()
    {
        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->once())->method('convert')->willReturn('2.84M');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);
        $moneyFormatter->formatEur($numberFormatterMock);
    }
}