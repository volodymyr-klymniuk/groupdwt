<?
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\DataMapper;

use VolodymyrKlymniuk\GroupBwt\Model\TransactionModel as Transaction;
use VolodymyrKlymniuk\GroupBwt\DataMapper\AmountDataMapper;
use VolodymyrKlymniuk\GroupBwt\DataMapper\CurrencyDataMapper;

class TransactionDataMapper
{
    public static function stringToTransaction(string $row): Transaction
    {
        $row = \json_encode($row, true);

        return (new Transaction(
            $row['bin'],
            AmountDataMapper::fromStringToAmount($row['amount']),
            CurrencyDataMapper::fromStringToCurrency($row['currency'])
        ));
    }
}