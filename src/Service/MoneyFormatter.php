<?php
/**
 * Created by PhpStorm.
 * User: rokas
 * Date: 5/20/18
 * Time: 3:49 PM
 */

namespace App\Service;

class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function formatEur($number)
    {
        $convertedNumber = $this->numberFormatter->convert($number);
        return $convertedNumber . ' €';
    }

    public function formatUsd($number)
    {
        $convertedNumber = $this->numberFormatter->convert($number);
        return '$'.$convertedNumber;
    }
}