<?
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\DataMapper;

use VolodymyrKlymniuk\GroupBwt\Model\CurrencyModel;

class CurrencyDataMapper
{
    /**
     * @throws GroupBWTExecution
     */
    public static function fromStringToCurrency(string $string): CurrencyModel
    {
        return new CurrencyModel($string);
    }
}