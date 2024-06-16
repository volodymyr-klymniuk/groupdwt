<?
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\DataTransformer;

class AmountDataTransformer
{
    public static function createAmountFromString(string $amount): float
    {
        return round($amount, 2, 2) * 100;
    }

    public static function crateFloatFromCents(int $amount): float
    {
        return $amount / 100;
    }
}