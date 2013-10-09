<?php 
/*
Copyright (c) 2013 Kailash Subedi.


Contact: kailash@isubedi.com
Web: http://isubedi.com
Twitter: @kailashs

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

	include_once("../../includes/db.php");
	include_once("../db_func/secure.php");
	include_once("../api/location.php");
	
	makeSureAuthenticated();
	
	$name = clean($_POST['name']);
	$description = clean($_POST['description']);
	$location = clean($_POST['location']);
	$loc_id = getLocationId($location);
	$date = clean($_POST['date']);
	$userId = getUserId();
	$allowGuests = clean($_POST['allow_guests']);
	$err_code = 0;
		
	if (empty($name)) {
		$err_code = 1;
	}
	
	if (empty($location)) {
		$err_code = 1;
	}
	
	if (empty($date)) {
		$err_code = 1;	
	}
	
	if ($err_code != 0) {
		header( "Location: ".$WEB_ROOT."newevent/1");
		exit;
	}
	
	$date = str_replace("-", "/", $date);
	mysql_query("INSERT into event (name, description, loc_id, event_date, host_id, allow_guests) values ('$name', '$description', '$loc_id', STR_TO_DATE('$date', '%Y/%m/%d'), '$userId', '$allowGuests')") or die(mysql_error());

	$sql2 = mysql_query("SELECT id FROM event WHERE name = '".$name."' AND host_id = '".$userId."' order by id desc LIMIT 1"); 
	$row2 = mysql_fetch_array($sql2);

	header( "Location: ".$WEB_ROOT."invite/".$row2['id']) ;
	exit;
?>