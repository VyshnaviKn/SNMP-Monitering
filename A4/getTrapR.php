<?php
require_once('config.php');

$query = "select ip,port,community from snmpdetails";
$result = $db->query($query);
$message = "false";
while($row=$result->fetchArray()){
            $message = "ok";
            echo $row["community"]."@".$row["ip"].":".$row["port"];
        
    }
    if ($message == "false"){
        echo $message;
        
    }

$db->close();
?>
