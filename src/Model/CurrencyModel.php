<?
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\Model;

use VolodymyrKlymniuk\GroupBwt\DomainException\GroupBWTException;

readonly class CurrencyModel
{
    public string $value;
    private const TPL_MSG = "%s not supported currency format.";
    private []string $supported = [
        'EUR',
    ];

    public function __construct(string $name)
    {
        if (false === \in_array($name, $this->supported)) {
            throw new GroupBWTException(\sprintf(self::TPL_MSG, $name);
        }

        $this->value = $name;
    }
}