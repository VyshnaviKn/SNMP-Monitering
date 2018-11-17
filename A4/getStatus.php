<?php 
require_once('config.php');
$query1 = "create table if not exists snmpdetails(ip varchar(250),port int,community varchar(250))";
$db->exec($query1);
$query2 = "create table if not exists snmpstatus(id INTEGER PRIMARY KEY ASC, fqdn varchar(250), status int, reporttime varchar(250), oldstatus int, oldreporttime varchar(250))";
$db->exec($query2);
#$query3 ="select * from snmpstatus ORDER BY ID DESC LIMIT 1";
$query3 ="select * from snmpstatus ORDER BY reporttime DESC";
$result = $db->query($query3);
$message = "FALSE";
while($row=$result->fetchArray()){
	$message="";
	echo $row['fqdn']." | ".$row['status']." | ".$row['reporttime']." | ".$row['oldstatus']." | ".$row['oldreporttime']."\n";
	}
	echo $message;

 ?>
