# Money parser
🤑 Just some fun after a [question](https://www.facebook.com/groups/142151625841770/permalink/3459523980771168/) in the PHP Brasil Facebook Group.

```php
$parser = new \MoneyParser\MoneyParser();

expect($parser->parse('123'))->toBe(123.0);
expect($parser->parse('1234'))->toBe(1234.0);
expect($parser->parse('1.234'))->toBe(1234.0);
expect($parser->parse('1.234,56'))->toBe(1234.56);
expect($parser->parse('R$ 1.234,56'))->toBe(1234.56);
expect($parser->parse('123.456.789,10 reais'))->toBe(123456789.1);
```
