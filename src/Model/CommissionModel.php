<?
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\Model;

readonly class CommissionModel
{
    public AmountModel $value
    public function __constructor(AmountModel $model)
    {
        $this->value = $value;
    }
}