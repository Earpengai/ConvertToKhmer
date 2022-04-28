# The PHP libray for convert number to khmer word

Package help you to convert number to khmer word.

## Requirements

- PHP 7.0 or higher

## Installation
Official installation method is via composer and its packagist package [ConvertToKhmer](https://packagist.org/packages/earpengai/convert-to-khmer).
```php
composer require earpengai/convert-to-khmer
```

## Usage
The simplest using of the library would be as follows:
Firstly, you can import or instance class
```php
use ConvertToKhmer\NumberToKhmerWords;
```
For example:

```php
$NumberToKhmerWord = new NumberToKhmerWords();

$NumberToKhmerWord->numberToWord(123456789); //មួយរយម្ភៃបីលានបួនសែនប្រាំម៉ឺនប្រាំមួយពាន់ប្រាំពីររយប៉ែតសិបប្រាំបួន
$NumberToKhmerWord->accNumberToWord(123456789); //មួយរយម្ភៃបីលានបួនរយហាសិបប្រាំមួយពាន់ប្រាំពីររយប៉ែតសិបប្រាំបួន
```

```php
NumberToKhmerWords::instance()->numberToWord(987654321); //ប្រាំបួនរយប៉ែតសិបប្រាំពីរលានប្រាំមួយសែនប្រាំម៉ឺនបួនពាន់បីរយម្ភៃមួយ
NumberToKhmerWords::instance()->accNumberToWord(987654321); //ប្រាំបួនរយប៉ែតសិបប្រាំពីរលានប្រាំមួយរយហាសិបបួនពាន់បីរយម្ភៃមួយ
```
## License

This package operates under the MIT License (MIT). See the [LICENSE](https://github.com/Earpengai/ConvertToKhmer/edit/master/README.md) file for details.




