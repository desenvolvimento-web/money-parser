<?php declare(strict_types=1);

namespace MoneyParser;

final class MoneyParser
{
    private string $decimalSeparator;

    public function __construct(string $decimalSeparator = ',')
    {
        $this->decimalSeparator = $decimalSeparator;
    }

    public function parse(string $str): float
    {
        $val = (float)preg_replace('/\D/', '', $str);

        if (strpos($str, $this->decimalSeparator) !== false) {
            $val /= 100;
        }

        return $val;
    }
}