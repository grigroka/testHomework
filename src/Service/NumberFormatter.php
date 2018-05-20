<?php
/**
 * Created by PhpStorm.
 * User: rokas
 * Date: 5/20/18
 * Time: 12:55 PM
 */

namespace App\Service;

class NumberFormatter
{
    /**
     * @param $number
     * @return string
     */
    public function convert($number)
    {
        $absNumber = abs($number);
        if ($absNumber >= 999500) {
            $rounded = round($number, -4);
            $string = number_format($rounded, 1, '.', '.');
            return mb_substr($string, 0, -7) . 'M';
        }

        if (99950 <= $absNumber && $absNumber < 999500) {
            $rounded = round($number, -3);
            return mb_substr($rounded, 0, -3) . 'K';
        }

        if (1000 <= $absNumber && $absNumber < 99950) {
            $rounded = round($number, 0);
            $string = number_format($rounded, 0, '.', ' ');
            return $string;
        }

        if ($absNumber < 1000) {
            $rounded = round($number, 2);
            if (abs($rounded) === 1000.00) {
                $string = number_format($rounded, 0, '.', ' ');
                return $string;
            }
        }
        return number_format($number, 2, '.', ' ');
    }
}