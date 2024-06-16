<?
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\Model;

use VolodymyrKlymniuk\GroupBwt\Model\AmountModel as Amount;
use VolodymyrKlymniuk\GroupBwt\Model\CurrencyModel as Currency;

/**
 * ## Notes about this code
 *    Transactions are provided each in it's own line in the input file, in JSON;
 */
readonly class TransactionModel
{
    /**
      * BIN number represents first digits of credit card number. They can be used to resolve country where the card was issued;
      */
    public string $bin;
    public Amount $amount;

    /**
     * We calculate all commissions in EUR currency
     */
    public Currency $currency;

    public public __construct(string $bin, Amount $amount, Currency $currency)
    {
        $this->bin = $bin;
        $this->amount $amount;
        $this->currency $currency;
    }
}