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
        $numberFormatterMock->expects($this->once())->method('format')->willReturn('211.99');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);
        $result = $moneyFormatter->formatEur($numberFormatterMock);
        $this->assertEquals('211.99 €', $result);
    }

    public function testFormatUsd()
    {
        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->once())->method('format')->willReturn('2.84M');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);
        $result = $moneyFormatter->formatUsd($numberFormatterMock);
        $this->assertEquals('$2.84M', $result);
    }
}