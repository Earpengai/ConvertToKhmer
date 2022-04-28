<?php

namespace ConvertToKhmer;

class NumberToKhmerWords
{
    public $value;

    private $config;

    public function __construct($value = 0)
    {   
        $this->value = $value;
        $this->config = new Config();
        return $this;
    }

    public static function instance()
    {
        $instance = new static;

        return $instance;
    }

    public function numberToWord($value)
    {
        $words = "";
        // $value = $this->value;
        if ($value == 0) {
            $words = $this->getUnitMap($value);
        }
        if ((int)($value/1000000) > 0) {
            $words = $words . $this->prefixNumberToWord($value/1000000).$this->config->getDigitMap(4);
            $value = $value % 1000000;
        }
        if ((int)($value/100000) > 0) {
            $words = $words . $this->prefixNumberToWord($value/100000).$this->config->getDigitMap(3);
            $value = $value % 100000;
        }
        if ((int)($value/10000) > 0) {
            $words = $words . $this->prefixNumberToWord($value/10000).$this->config->getDigitMap(2);
            $value = $value % 10000;
        }
        if ((int)($value/1000) > 0) {
            $words = $words . $this->prefixNumberToWord($value/1000).$this->config->getDigitMap(1);
            $value = $value % 1000;
        }
        if ((int)($value/100) > 0) {
            $words = $words . $this->prefixNumberToWord($value/100).$this->config->getDigitMap(0);
            $value = $value % 100;
        }
        if ($value > 0) {
            $words = $words . $this->prefixNumberToWord($value);
        }
        return $words;
    }

    public function accNumberToWord($value)
    {
        $words = "";
        if ($value == 0) {
            $words = $this->getUnitMap($value);
        }
        if ((int)($value/1000000) > 0) {
            $words = $words . $this->prefixNumberToWord($value/1000000).$this->config->getDigitMap(4);
            $value = $value % 1000000;
        }
        if ((int)($value/1000) > 0) {
            $words = $words . $this->prefixNumberToWord($value/1000).$this->config->getDigitMap(1);
            $value = $value % 1000;
        }
        if ((int)($value/100) > 0) {
            $words = $words . $this->prefixNumberToWord($value/100).$this->config->getDigitMap(0);
            $value = $value % 100;
        }
        if ($value > 0) {
            $words = $words . $this->prefixNumberToWord($value);
        }
        return $words;
    }

    private function prefixNumberToWord(int $value)
    {
        $words = "";
        if ($value == 0) {
            return $this->config->getUnitMap($value);
        }
        if ($value >= 100) {
            $words = $words . $this->numberToWord($value);
        } else {
            if ($value <= 10) {
                $words = $words . $this->config->getUnitMap((int)$value);
            } else {
                if ((int)($value%10) > 0) {
                    $words = $words . $this->config->getTenMap((int)$value/10.0);
                    $words = $words . $this->config->getUnitMap((int)$value%10);
                } else {
                    $words = $this->config->getTenMap((int)$value/10);
                }
            }
        }

        return $words;
    }
}