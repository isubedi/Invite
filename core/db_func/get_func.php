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
	// User Gets
	function getFollowingCount($id) {
		$result = mysql_query("SELECT user_id from friendship where follower_id = '$id'") or die(mysql_error());
		$count = mysql_num_rows($result);
	
		return $count;
	}


	function getFollowersCount($id) {
		$result = mysql_query("SELECT follower_id from friendship where user_id = '$id'") or die(mysql_error());
		$count = mysql_num_rows($result);
	
		return $count;
	}

	function getEventsHosted($id) {
		$result = mysql_query("SELECT id from event where host_id = '$id'") or die(mysql_error());
		$count = mysql_num_rows($result);
	
		return $count;		
	}
	
	
	// Event Gets
	function getAcceptedInvites($id) {
		$result = mysql_query("SELECT id from invites where status = 'yes' and event_id = '$id'") or die(mysql_error());
		$count = mysql_num_rows($result);
	
		return $count;
	}


	function getMaybeInvites($id) {
		$result = mysql_query("SELECT id from invites where status = 'maybe' and event_id = '$id'") or die(mysql_error());
		$count = mysql_num_rows($result);
	
		return $count;
	}

	function getDeclinedInvites($id) {
		$result = mysql_query("SELECT id from invites where status = 'no' and event_id = '$id'") or die(mysql_error());
		$count = mysql_num_rows($result);
	
		return $count;		
	}
	
	function getTotalInvited($id) {
		$result = mysql_query("SELECT id from invites where status = 'invited' and event_id = '$id'") or die(mysql_error());
		$count = mysql_num_rows($result);
	
		return $count;		
	}

	function getEventsByUser($id) {
		$result = mysql_query("SELECT id from event where host_id = '$id' order by event_date desc") or die(mysql_error());
		
		$userRows = array();
	    while($r = mysql_fetch_assoc($result)) {
	      $userRows[] = $r;
	    }

		return $userRows;
	}
?>
