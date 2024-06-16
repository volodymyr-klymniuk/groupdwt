<?
declare("strict_types", 1);

namespace VolodymyrKlymniuk\GroupBwt\Interface;

use VolodymyrKlymniuk\GroupBwt\DomainException\GroupBWTException;

/**
 * ## Notes about this code
 *      Idea is to calculate commissions for already made transactions;
 */
interface ExecutionInterface
{
    /**
     * @throw GroupBWTException
     */
    public function execute(string $filename): void;
}