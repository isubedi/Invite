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
	include_once("error_list.php");
	
	// User Creation
	function nenwUserIncompleteFields() {
		$errorObj = new array();
		$errorObj['id'] = "1000";
		$errorObj['error_message'] = $err_1000;
		return json_encode($errorObj);
	}
	
	function nenwUserInvalidEmail() {
		$errorObj = new array();
		$errorObj['id'] = "1001";
		$errorObj['error_message'] = $err_1001;
		return json_encode($errorObj);
	}

	function newUserShortPassword() {
		$errorObj = new array();
		$errorObj['id'] = "1002";
		$errorObj['error_message'] = $err_1002;
		return json_encode($errorObj);
	}

	function newUserPreExistingEmail() {
		$errorObj = new array();
		$errorObj['id'] = "1003";
		$errorObj['error_message'] = $err_1003;
		return json_encode($errorObj);
	}

	// User Login
	function loginEmailDoesNotExist() {
		$errorObj = new array();
		$errorObj['id'] = "1004";
		$errorObj['error_message'] = $err_1004;
		return json_encode($errorObj);
	}

	function loginInvalidPassword() {
		$errorObj = new array();
		$errorObj['id'] = "1005";
		$errorObj['error_message'] = $err_1005;
		return json_encode($errorObj);
	}
	
	// User Update
	function updateUserShortPassword() {
		$errorObj = new array();
		$errorObj['id'] = "1006";
		$errorObj['error_message'] = $err_1006;
		return json_encode($errorObj);
	}

	function updateUserInvalidUserName() {
		$errorObj = new array();
		$errorObj['id'] = "1007";
		$errorObj['error_message'] = $err_1007;
		return json_encode($errorObj);
	}
		
	
	function updateUserPreExistingUserName() {
		$errorObj = new array();
		$errorObj['id'] = "1007";
		$errorObj['error_message'] = $err_1007;
		return json_encode($errorObj);
	}

?>