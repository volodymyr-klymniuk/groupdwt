<?
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\DataMapper;

use VolodymyrKlymniuk\GroupBwt\DataTransformer\AmountDataTransformer;

class AmountDataMapper
{
    public static function fromStringToAmount(string $amount): AmountModel
    {
        return new AmountModel(AmountDataTransformer::createAmountFromString($amount))
    }
}