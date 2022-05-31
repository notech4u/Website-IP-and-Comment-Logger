<?php
$txt = "data.txt"; 
$ip = $_SERVER['REMOTE_ADDR'];
$TS = date('m/d/Y h:i:s');
//  $fh = fopen($txt, 'w+'); 
if (isset($_POST['field1']) && isset($_POST['field2'])) { // check if both fields are set
   $txt=$_POST['field1'].' | '.$_POST['field2']; 
   file_put_contents('data.txt', " ↛ 
TIME: $TS | COMMENT: $txt | ADDRESS: $ip" ,FILE_APPEND); // log to data.txt 
	header("Location: https://www.jacob-westmore-design.com/"); /* Redirect browser */
exit();
}
  //  fwrite($fh,$txt); // Write information to the file
  //  fclose($fh); // Close the file
    ?>