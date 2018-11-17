<?php
require_once('config.php');
$ip =$_GET['ip'];
$port = $_GET['port'];
$community = $_GET['community'];
if (empty($port) || empty($community) || empty($ip)){
    $message = "FALSE";
    echo $message."<br\>";
}
else{
    $query = "select ip,port,community from snmpdetails";
    $result = $db->query($query);
    $message = "false";
    while($row=$result->fetchArray()){
            $message="ok";
            $sql = "update snmpdetails set ip='$ip', port='$port', community='$community'";
            $result1 = $db-> exec($sql);
        }
    if ($message == "false"){
        $sql = "insert into snmpdetails (ip, port, community) values ('$ip','$port', '$community')";
        $result1 = $db->exec($sql);
    }
}
echo $message;
$db->close()
?>
