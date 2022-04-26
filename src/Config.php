<?php

namespace ConvertToKhmer;

class Config 
{
    private $unitsMap = ["សូន្យ" ,"មួយ", "ពីរ", "បី", "បួន", "ប្រាំ", "ប្រាំមួយ", "ប្រាំពីរ", "ប្រាំបី", "ប្រាំបួន", "ដប់"]; 

    private $tensMap = ["រាយ" ,"ដប់", "ម្ភៃ", "សាមសិប", "សែសិប", "ហាសិប", "ហុកសិប", "ចិតសិប", "ប៉ែតសិប", "កៅសិប"];

    private $digitsMap = ["រយ", "ពាន់", "ម៉ឺន", "សែន", "លាន"];

    public $iso = [
        'AUD' => 'ដុល្លារ',
        'CAD' => 'ដុល្លារ',
        'CHF' => 'ហ្វ្រង់',
        'CNH' => 'យ៉ន់',
        'CNY' => 'យ៉ន់',
        'EUR' => 'អ៊ឺរ៉ូ',
        'GBP' => 'ផោន',
        'HKD' => 'ដុល្លារ',
        'IDR' => 'រ៉ូពី',
        'INR' => 'រ៉ូពី',
        'JPY' => 'យេន',
        'KRW' => 'វូន',
        'LAK' => 'គីប',
        'MMK' => 'មីយ៉ាន់ម៉ាក្យាត',
        'MYR' => 'រីងហ្គីត',
        'NZD' => 'ដុល្លារ',
        'PHP' => 'ប៉េសូ',
        'SDR' => 'អេស ដេ អា',
        'SEK' => 'ក្រូណា',
        'SGD' => 'ដុល្លារ',
        'THB' => 'បាត',
        'TWD' => 'ដុល្លារ',
        'VND' => 'ដុង',
        'USD' => 'ដុល្លារ',
        'KHR' => 'រៀល',
    ];

    public function getUnitMap($index)
    {
        return $this->unitsMap[$index];
    }

    public function getTenMap($index)
    {
        return $this->tensMap[$index];
    }
    
    public function getDigitMap($index)
    {
        return $this->digitsMap[$index];
    }
}