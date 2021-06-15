<?php
	if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
		echo "<h1>Тут нечего нет!!</h1>";
	} else {
		$xml = simplexml_load_file("php://input");
		$reqid = $xml['request_id'];
		$scriptid = "scriptid".$reqid;
		$hostid = "hostid".$reqid;
		$sysid = "sysid".$reqid;
		$strXml = <<<XML
<?xml version="1.0" encoding="UTF-8"?> 
<Info request_id = "{$reqid}" ScriptID="{$scriptid}" HostID="{$hostid}" SysID="$sysid" AddPar=""/>
XML;
		print_r($strXml);
	}
?>