--TEST--
phpunit -c ../_files/phpunit.xml --repeat 20 ../_files/ResultPrinterTest.php
--FILE--
<?php
$_SERVER['TERM']    = 'linux';
$_SERVER['argv'][1] = '-c';
$_SERVER['argv'][2] = dirname(__FILE__) . '/_files/phpunit.xml';
$_SERVER['argv'][3] = '--repeat';
$_SERVER['argv'][4] = '20';
$_SERVER['argv'][5] = dirname(__FILE__) . '/_files/ResultPrinterTest.php';

require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/vendor/autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Configuration read from %a

[31m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[32m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[33m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[34m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[35m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[36m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[31m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[32m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[33m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[34m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[35m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[36m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[31m*[0m[41;37mF[0m[31;1mE[0m  63 / 100 ( 63%)
[36;1mS[0m[33;1mI[0m[32m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[33m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[34m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[35m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[36m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[31m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m[32m*[0m[41;37mF[0m[31;1mE[0m[36;1mS[0m[33;1mI[0m

Time: %s, Memory: %sMb

There were 20 errors:

1) ResultPrinterTest::testError
%s

%s:%i

2) ResultPrinterTest::testError
%s

%s:%i

3) ResultPrinterTest::testError
%s

%s:%i

4) ResultPrinterTest::testError
%s

%s:%i

5) ResultPrinterTest::testError
%s

%s:%i

6) ResultPrinterTest::testError
%s

%s:%i

7) ResultPrinterTest::testError
%s

%s:%i

8) ResultPrinterTest::testError
%s

%s:%i

9) ResultPrinterTest::testError
%s

%s:%i

10) ResultPrinterTest::testError
%s

%s:%i

11) ResultPrinterTest::testError
%s

%s:%i

12) ResultPrinterTest::testError
%s

%s:%i

13) ResultPrinterTest::testError
%s

%s:%i

14) ResultPrinterTest::testError
%s

%s:%i

15) ResultPrinterTest::testError
%s

%s:%i

16) ResultPrinterTest::testError
%s

%s:%i

17) ResultPrinterTest::testError
%s

%s:%i

18) ResultPrinterTest::testError
%s

%s:%i

19) ResultPrinterTest::testError
%s

%s:%i

20) ResultPrinterTest::testError
%s

%s:%i

--

There were 20 failures:

1) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

2) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

3) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

4) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

5) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

6) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

7) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

8) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

9) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

10) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

11) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

12) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

13) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

14) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

15) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

16) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

17) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

18) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

19) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

20) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i
[37;41m                                                                                  [0m
[37;41mFAILURES!                                                                         [0m
[37;41mTests: 100, Assertions: 40, Failures: 20, Errors: 20, Incomplete: 20, Skipped: 20.[0m