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
        $formattedNumber = $this->numberFormatter->format($number);
        return $formattedNumber . ' €';
    }

    public function formatUsd($number)
    {
        $formattedNumber = $this->numberFormatter->format($number);
        return '$'.$formattedNumber;
    }
}