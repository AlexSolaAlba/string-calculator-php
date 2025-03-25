<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    // TODO: String Calculator Kata


    /**
     * @param string $string_numbers
     *
     * @return int
     */
    function Add(string $string_numbers): int {
        if(strlen($string_numbers) <1) {
            return 0;
        }elseif (strlen($string_numbers) == 1) {
            return intval($string_numbers);
        }else{
            $splitedArgs = $this->getSplitArgs($string_numbers);
            return $this->sumStringArguments($splitedArgs);
        }
    }

    /**
     * @param string $string_numbers
     *
     * @return array
     */
    function getSplitArgs(string $string_numbers): array
    {
        if($string_numbers[0] == '/'){
            return preg_split('/[\n'. $this->getDeliminator($string_numbers) . ']+/', $this->getNumbers($string_numbers));
        }
        return preg_split('/[\n,]+/', $string_numbers);
    }

    /**
     * @param string $string_numbers
     *
     * @return string
     */
    function getDeliminator(string $string_numbers): string
    {
        return substr(explode("\n", $string_numbers,2)[0], 2);

    }

    /**
     * @param string $string_numbers
     *
     * @return string
     */
    function getNumbers(string $string_numbers): string
    {
        return explode("\n", $string_numbers,2)[1];
    }

    /**
     * @param array $splitedArgs
     * @return int
     */
    function sumStringArguments(array $splitedArgs): int {
        $suma = 0;
        foreach ($splitedArgs as $arg) {
            $suma += intval($arg);
        }
        return $suma;
    }
}