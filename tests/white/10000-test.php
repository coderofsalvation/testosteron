#!/usr/bin/env php
<?php
// to compare with expected output run: ./10000-test.php > 10000-test.php.out

if ( !function_exists("json_decode") ){
  echo "please upgrade php\n";	
}

echo "Hello world!\n";
echo "Hello world!\n";
echo "Hello world!\n";
echo "Hello world!\n";
echo "Hello world!\n";

exit(0);

?>
