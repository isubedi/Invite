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
	include_once("../../header.php");
	makeSureNotAuthenticated();
?>
<div data-role="page">
	<div data-role="header">
		<a href="<?php echo $WEB_ROOT;?>/login" data-icon="delete" data-transition="slide">Cancel</a>
		<h1>Sign Up</h1>
	</div>
		
	<div id="container" data-role="content">
	
		<div id="loginHeader">
	
		</div>
		
		<div id="loginForm">
			<form method="post" action="<?php echo $WEB_ROOT;?>core/auth/docreateuser.php" data-transition="slide">
					<?php 
						if (!empty($_GET['id']))	{
							echo getErrorMessage($_GET['id']);
						}
					?>
				<input type="text" placeholder="username" id="username" name="username"/>
				<input type="text" placeholder="email" id="email" name="email"/>
				<input type="password" placeholder="password" id="password" name="password"/>
				<input type="submit" value="Sign Up"/>
			</form>
		</div>
	
	</div>
	
</div>