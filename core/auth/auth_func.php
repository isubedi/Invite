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
	function doLogin($email, $password) {

		$email = clean($email);
		$password = md5(clean($password));


		$sql2 = mysql_query("SELECT * FROM users WHERE email = '".$email."' or username = '".$email."' AND password = '".$password."' LIMIT 1"); 
		$rows2 = mysql_num_rows($sql2); 
		$row2 = mysql_fetch_array($sql2);

		if ($rows2 == 0)
		{ 
			return "Err_1005";
		}

		return $row2['id'];

	}
	
	function doRegister($username, $email, $password) {

		$username = clean($username);		
		$email = clean($email);
		$password = md5(clean($password));
		
		mysql_query("INSERT into users (username, email, password) values ('$username', '$email', '$password')") or die(mysql_error());

		$sql2 = mysql_query("SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."' LIMIT 1"); 
		$rows2= mysql_num_rows($sql2); 
		$row2 = mysql_fetch_array($sql2);
		
		return $row2['id'];

	}

?>