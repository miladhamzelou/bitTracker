<?php

namespace App\Struct;

/**
 * Class BalanceInterface
 * @package App\Struct
 */
interface BalanceInterface
{
    /**
     * return string
     */
    public function getName(): string;

    /**
     * @param array $balance
     */
    public function setBalance(array $balance): void;

    /**
     * @return array
     */
    public function getBalance(): array;

    /**
     * @param $sum
     */
    public function setSum($sum): void;

    /**
     * @return string
     */
    public function getSum(): string;
}
