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
	
	makeSureAuthenticated();
	
	$password = md5(clean($_POST['password']));
	$username = clean($_POST['username']);
	$email = clean($_POST['email']);
	$location = clean($_POST['location']);	
	$phone = clean($_POST['phone']);
	$userId = getUserId();
	$name = clean($_POST['name']);
	$date = clean($_POST['birthdate']);
	$gender = clean($_POST['gender']);
	$err_code = 0;
	
	if (empty($password)) {
		$err_code = 1000;
	}
	
	if (empty($username)) {
		$err_code = 1007;		
	}
	
	if (empty($email)) {
		$err_code = 1001;		
	}
	
	if (empty($location)) {
		$err_code = 1000;		
	}
	
	if (empty($name)) {
		$err_code = 1000;
	}
	
	if (empty($date)) {
		$err_code = 1000;		
	}	

	if (empty($gender)) {
		$err_code = 1000;		
	}	
	
	if ($err_code != 0) {
		header( "Location: ".$WEB_ROOT."editprofile/".$err_code) ;
		exit;		
	}
	
	$date = str_replace("-", "/", $date);
	mysql_query("UPDATE users set username = '$username', name = '$name', email = '$email', phoneNo = $phone, location = '$location', gender = '$gender', birthdate = STR_TO_DATE('$date', '%Y/%m/%d') where id ='$userId'") or die(	header( "Location: ".$WEB_ROOT."editprofile/0000"));

	header( "Location: ".$WEB_ROOT."editprofile/0") ;
	exit;

?>