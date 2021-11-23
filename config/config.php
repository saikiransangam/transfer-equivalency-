<?php

$dbstr = "(description=
               (address=
                 (host=bannerdb.pprd.odu.edu)
                 (protocol=tcp)
                 (port=2336)
              )
             (connect_data=
                 (sid=PPRD2)
                 (SERVER=DEDICATED)
               )";

//$conn = oci_connect('ODUAPIUSER','oduapiuserforCourseSearch2018',$dbstr);
$conn = oci_connect('ODUAPIUSER','oduapiuserforCourseSearch2018','(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = bannerdb.pprd.odu.edu)(PORT = 2336)) (CONNECT_DATA = (SERVER = DEDICATED) (SID = PPRD2)))');
ini_set('memory_limit', '512M');

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
else{
    //echo "Successful Connection";

}
?>
     
  