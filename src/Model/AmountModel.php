<?
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\Model;

readonly class AmountModel
{
   public float $value;
   public function __construct(float $$amount)
   {
        $this->value = $amount;
   }
}