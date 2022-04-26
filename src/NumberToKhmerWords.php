<?php

namespace ConvertToKhmer;

class NumberToKhmerWords
{
    public $value;

    public function __construct($value = 0)
    {   
        $this->value = $value;
        return $this;
    }

    public static function instance($value)
    {
        $instance = new static;
        if (!is_numeric($value)) {
            throw new Exception('Undefined value format');
        }
        $instance->value = $value;
        return $instance;
    }

    public function numberToWord()
    {
        $words = "";

        if ($this->value == 0) {
            $words = $this->getUnitMap($this->value);
        }
        if (($this->value/1000000) > 0) {
            $words = $words . $this->prefixNumberToWord($this->value/1000000).$this->getDigitMap(4);
            $this->value = $this->value % 1000000;
        }
        if (($this->value/100000) > 0) {
            $words = $words . $this->prefixNumberToWord($this->value/100000).$this->getDigitMap(3);
            $this->value = $this->value % 100000;
        }
        if (($this->value/10000) > 0) {
            $words = $words . $this->prefixNumberToWord($this->value/10000).$this->getDigitMap(2);
            $this->value = $this->value % 10000;
        }
        if (($this->value/1000) > 0) {
            $words = $words . $this->prefixNumberToWord($this->value/1000).$this->getDigitMap(1);
            $this->value = $this->value % 1000;
        }
        if (($this->value/100) > 0) {
            $words = $words . $this->prefixNumberToWord($this->value/1000).$this->getDigitMap(0);
            $this->value = $this->value % 100;
        }
        if ($this->value > 0) {
            $words = $words . $this->prefixNumberToWord($this->value);
        }
        return $words;
    }

    private function prefixNumberToWord(int $value)
    {
        $words = "";

        if ($value == 0) {
            return $this->getUnitMap($value);
        }

        if ($value >= 100) {
            $words = $words . $this->numberToWord($value);
        } else {
            if (($value % 10) > 0) {
                $words = $words . $this->getTenMap($value/10.0);
                $words = $words . $this->getUnitMap($value % 10);
            } else {
                $words = $this->getTenMap($value / 10);
            }
        }

        return $words;
    }
}