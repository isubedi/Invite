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
	ini_set( "display_errors", 0);
	session_start();

	include_once("db.inc.php");
	include_once("config.php");

	mysql_connect($db_server,$db_user,$db_password);
	mysql_select_db($database) or die('Error: ' . mysql_error());
		
	// Functions
	function setSession($userId) {
		$_SESSION['user'] = $userId;
	}
	
	function getUserId() {
		if (!empty($_SESSION['user']) && $_SESSION['user'] != null) {
			return $_SESSION['user'];
		}
		return  -1;	

	}
	
	function isLoggedIn() {
		if (getUserId() != -1) {
			return 1;
		}
		return 0;	
	}
	
	function makeSureAuthenticated() {
		global $WEB_ROOT;
		global $PAGE_PATH;
		
		if (!isLoggedIn()) {
			header("Location: ".$WEB_ROOT."login");
			exit;
		}	
	}
	
	function makeSureNotAuthenticated() {
		global $WEB_ROOT;
		global $PAGE_PATH;

		if (isLoggedIn()) {
			header("Location: ".$WEB_ROOT."home");
			exit;
		}		
	}
	
?>
