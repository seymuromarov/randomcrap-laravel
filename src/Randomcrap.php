<?php

namespace Seymuromarov\Randomcrap;


class RandomcrapGenerator
{
    public function string($len = 6)
    {
        $word = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    public function int($len = 6)
    {
        $word = array_merge(range(1, 9));
        shuffle($word);
        return (int)substr(implode($word), 0, $len);
    }

    public function intInRange($min = 0, $max = 999999)
    {
        return random_int($min, $max);
    }

    protected function stringWithNumber($len = 6)
    {
        $word = array_merge(range('a', 'z'), range('A', 'Z'), range(1, 9));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    protected function upperCaseStringWithNumber($len = 6)
    {
        $word = array_merge(range('A', 'Z'), range(1, 9));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    protected function lowerCaseStringWithNumber($len = 6)
    {
        $word = array_merge(range('a', 'z'), range(1, 9));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    protected function upperCaseString($len = 6)
    {
        $word = array_merge(range('A', 'Z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    protected function lowerCaseString($len = 6)
    {
        $word = array_merge(range('a', 'z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    public function floatInRange($min = 0.00, $max = 999999.00, $round = 0)
    {
        $scale = pow(10, $round);
        return mt_rand($min * $scale, $max * $scale) / $scale;
    }

    public function float($len = 6, $round = 2)
    {
        $max = pow(10, $len);
        $min = pow(10, $len - 1);
        $scale = pow(10, $round);
        return mt_rand($min * $scale, $max * $scale) / $scale;
    }

    public function intArray($intLength = 2, $arrayLength = 5)
    {
        $array = [];
        for ($i = 0; $i < $arrayLength; $i++) {
            array_push($array, $this->int($intLength));
        }
        return $array;
    }

    public function floatArray($floatLength = 2, $arrayLength = 5, $decimals = 2)
    {
        $array = [];
        for ($i = 0; $i < $arrayLength; $i++) {
            array_push($array, $this->float($floatLength, $decimals));
        }
        return $array;
    }

    public function stringArray($stringLength = 6, $arrayLength = 5)
    {
        $array = [];
        for ($i = 0; $i < $arrayLength; $i++) {
            array_push($array, $this->string($stringLength));
        }
        return $array;
    }

    public function stringArrayWithNumber($stringLength = 6, $arrayLength = 5)
    {
        $array = [];
        for ($i = 0; $i < $arrayLength; $i++) {
            array_push($array, $this->stringWithNumber($stringLength));
        }
        return $array;
    }

    public function lowerCaseStringArray($stringLength = 6, $arrayLength = 5)
    {
        $array = [];
        for ($i = 0; $i < $arrayLength; $i++) {
            array_push($array, $this->lowerCaseString($stringLength));
        }
        return $array;
    }

    public function upperCaseStringArray($stringLength = 6, $arrayLength = 5)
    {
        $array = [];
        for ($i = 0; $i < $arrayLength; $i++) {
            array_push($array, $this->upperCaseString($stringLength));
        }
        return $array;
    }


}