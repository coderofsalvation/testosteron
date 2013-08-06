#!/usr/bin/php 
<?

function measureRequests( $nreqs = 100, $time_average_request = 0.01, $url ){
  print("sending out {$nreqs} request(s)");
  $timestart = microtime(true);
  for( $i = 0; $i < $nreqs; $i++ ){
    $output = file_get_contents( $url );
    if( $i % ($nreqs/10) == 0 ) print(".");  
  } 
  $timestop   = microtime(true);
  $time       = $timestop-$timestart;
  $timeavg    = $time / $nreqs;
  $timeavgreq = $time_average_request;
  $acceptable = ($timeavg < $timeavgreq ) ? "NICE!" : "ERROR";
  print("\n");
  print("total reqs : {$nreqs} request\n");
  print("total time : {$time} seconds\n"); 
  print("average request  : {$timeavg} seconds\n");
  print("average wanted   : < {$timeavgreq} seconds ({$acceptable})\n");
  if(  !$acceptable ) exit(1);
  else return $output;
} 

?>
