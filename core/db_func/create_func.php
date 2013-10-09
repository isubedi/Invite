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

	// Create Event from ID
	function getEventFromId($id){
		
		$result = mysql_query("SELECT * from event where id = '$id'") or die(mysql_error());
		$eventRow = mysql_fetch_array($result);
	
		$event = new Event($eventRow['name'], $eventRow['id'], $eventRow['description'], $eventRow['host_id'], $eventRow['event_type'], $eventRow['event_privacy'], $eventRow['allow_guests'], $eventRow['location_id'], $eventRow['creation_date'], $eventRow['event_date'], $eventRow['event_picture']);
		
		return $event;
		
	}
	
	// Create Event from ID
	function getUserFromId($id){
		
		$result = mysql_query("SELECT * from users where id = '$id'") or die(mysql_error());
		$userRow = mysql_fetch_array($result);
	
		$user = new User($userRow['id'], $userRow['username'], $userRow['name'], $userRow['location'], $userRow['userImg'],  $userRow['email'],  $userRow['phoneNo'],  $userRow['gender'],  $userRow['birthdate']);
		
		return $user;
		
	}
		

?>