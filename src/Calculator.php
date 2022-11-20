<?php

declare(strict_types=1);

namespace AndreyKoptev\FirstPackage;

use WrongArgumentsException;

class Calculator
{
    /**
     * Get the sum of numbers.
     *
     * @param mixed $num1
     * @param mixed $num2
     * @return float
     * @throws WrongArgumentsException
     */
    public function add($num1, $num2): float
    {
        $this->checkNumbers($num1, $num2);

        return (float)$num1 + (float)$num2;
    }

    /**
     * Get the difference of numbers.
     *
     * @param mixed $num1
     * @param mixed $num2
     * @return float
     * @throws WrongArgumentsException
     */
    public function sub($num1, $num2): float
    {
        $this->checkNumbers($num1, $num2);

        return (float)$num1 - (float)$num2;
    }

    /**
     * Get the product of numbers.
     *
     * @param mixed $num1
     * @param mixed $num2
     * @return float
     * @throws WrongArgumentsException
     */
    public function mul($num1, $num2): float
    {
        $this->checkNumbers($num1, $num2);

        return (float)$num1 * (float)$num2;
    }

    /**
     * Get the division of numbers.
     *
     * @param mixed $num1
     * @param mixed $num2
     * @return float
     * @throws WrongArgumentsException
     */
    public function div($num1, $num2): float
    {
        $this->checkNumbers($num1, $num2);

        return (float)$num1 / (float)$num2;
    }

    /**
     * Check the numbers.
     *
     * @param mixed $num1
     * @param mixed $num2
     * @return void
     * @throws WrongArgumentsException
     */
    protected function checkNumbers($num1, $num2)
    {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            throw new WrongArgumentsException();
        }
    }
}
