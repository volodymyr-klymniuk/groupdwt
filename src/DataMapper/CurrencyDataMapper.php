<?php

namespace VolodymyrKlymniuk\GroupBwt\DataMapper;

use VolodymyrKlymniuk\GroupBwt\Model\CurrencyModel;

class CurrencyDataMapper {

    /**
     * @throws GroupBWTExecution
     */
    public static function stringToCurrency(string $string): CurrencyModel
    {
        return new CurrencyModel($string);
    }
}