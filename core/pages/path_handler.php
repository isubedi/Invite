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
	function getPagePath($page) {
		switch ($page) {
			case "home" : return "home/home.php";
				break;

			case "profile" : return "profile/profile.php";
				break;

			case "editprofile" : return "profile/editProfile.php";
				break;
				
			case "findfriends" : return "profile/findfriends.php";
				break;

			case "notifications" : return "profile/notifications.php";
				break;

			case "newevent" : return "event/new_event.php";
				break;

			case "editevent" : return "event/edit_event.php";
				break;

			case "event" : return "event/view_event.php";
				break;
				
			case "invite" : return "event/invite.php";
				break;
			
			case "login" : return "guest/login.php";
				break;

			case "signup" : return "guest/signup.php";
				break;

			case "browse" : return "browse/browse.php";
				break;
			
			case "stream" : return "browse/stream,.php";
				break;
			
			case "logout" : return "core/auth/dologout.php";
				break;
				
			default: return "error/404.php";
		}
	}
	

?>