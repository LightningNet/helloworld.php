<?php
/********************************************
 * LiteSpeed Web Server Plugin for Plesk Panel
* @Author:   LiteSpeed Technologies, Inc. (http://www.litespeedtech.com)
* @Copyright: (c) 2013-2014
*********************************************/

if (method_exists('pm_ApiCli', 'callSbin')) {
	// for plesk12
	$result = pm_ApiCli::callSbin('install');
}


