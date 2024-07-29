```shell

$ make
XDEBUG_MODE=coverage phpunit --coverage-text

Warning: JIT is incompatible with third party extensions that override zend_execute_ex(). JIT disabled. in Unknown on line 0
PHPUnit 11.2.8 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.9 with Xdebug 3.3.2
Configuration: /home/easteregg/src/xdebug-soap/phpunit.dist.xml

R                                                                   1 / 1 (100%)

Time: 00:00.052, Memory: 8.00 MB

There was 1 risky test:

1) Test::test
This test did not perform any assertions

/home/easteregg/src/xdebug-soap/tests/Test.php:12

OK, but there were issues!
Tests: 1, Assertions: 0, Risky: 1.


Code Coverage Report:
  2024-07-29 05:41:05

 Summary:
  Classes:  0.00% (0/1)
  Methods:  0.00% (0/1)
  Lines:    0.00% (0/4)

Segmentation fault
make: *** [Makefile:2: trigger] Error 139
```
