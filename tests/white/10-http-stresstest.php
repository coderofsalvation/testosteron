#!/usr/bin/php
<?

include_once( "lib/http-measure.php" );

# usually you would get some urls from your framework here, now we are just using google
$url = "http://www.google.com";

$result = measureRequests( 100, 0.06, $url );

?>
