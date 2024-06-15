<?php

namespace VolodymyrKlymniuk\GroupBwt\Model;

readonly class CurrencyModel {
    public string $value;
    private const TPL_MSG = "%s not supported currency format.";
    private array $supported = [
        'EUR',
    ];

    public function __construct(string $name)
    {
        if (false === \in_array($name, $this->supported)) {
            throw new \RuntimeException(\sprintf(self::TPL_MSG, $name);
        }

        $this->value = $name;
    }
}