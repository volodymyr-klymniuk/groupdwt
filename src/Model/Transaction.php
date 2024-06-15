<?php

namespace VolodymyrKlymniuk\GroupBwt\Model;

use VolodymyrKlymniuk\GroupBwt\Model\Currency;

readonly class Transaction
{
    public string $bin;
    public float $amount;
    public Currency $currency;
}