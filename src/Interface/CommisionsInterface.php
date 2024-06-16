<?php
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\Interface;

use VolodymyrKlymniuk\GroupBwt\Model\TransactionModel as Transaction;
use VolodymyrKlymniuk\GroupBwt\Model\CommissionModel as Commission;

interface CommissionsInterface
{
    public function calculateCommission(Transaction $trx): Commission;
}