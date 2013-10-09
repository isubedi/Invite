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
class Event {
	
	private $eventName;
	private $eventId;
	private $creatorId;
	private $eventType;
	private $eventPrivacy;
	private $allowGuests;
	private $locationId;
	private $creationDate;
	private $eventDate;
	private $eventPicture;
	
	function Event($_eventName, $_eventId, $_eventDescription, $_creatorId, $_eventType, $_eventPrivacy, $_allowGuests, $_locationId, $_creatonDate, $_eventDate, $_eventPicture) {
		$this->eventName = $_eventName;
		$this->eventId = $_eventId;
		$this->eventDescription = $_eventDescription;		
		$this->creatorId = $_creatorId;
		$this->eventType = $_eventType;
		$this->eventPrivacy = $_eventPrivacy;
		$this->allowGuests = $_allowGuests;
		$this->locationId = $_locationId;
		$this->creationDate = $_creatonDate;
		$this->eventDate = $_eventDate;
		$this->eventPicture = $_eventPicture;
	
	}
	
	function getEventName() {
		return $this->eventName;
	}

	function getEventDescription() {
		return $this->eventDescription;
	}
	
	function getEventId() {
		return $this->eventId;
	}

	function getCreatorId() {
		return $this->creatorId;
	}

	function getEventType() {
		return $this->eventType;
	}

	function getEventPrivacy() {
		return $this->eventPrivacy;
	}

	function getAllowGuests() {
		return $this->allowGuests;
	}

	function getLocationId() {
		return $this->locationId;
	}
	
	function getCreationDate() {
		return $this->creationDate;
	}

	function getEventDate() {
		return $this->eventDate;
	}
	
	function getEventPicture() {
		return $this->eventPicture;
	}
	
	function setEventName($__eventName) {
		$this->eventName = $_eventName;
	}

	function setEventId($_eventId) {
		 $this->eventId = $_eventId;
	}

	function setCreatorId($_creatorId) {
		 $this->creatorId = $_creatorId;
	}

	function setEventType($_eventType) {
		 $this->eventType = $_eventType;
	}

	function setEventPrivacy($_eventPrivacy) {
		 $this->eventPrivacy = $_eventPrivacy;
	}

	function setAllowGuests($_allowGuests) {
		 $this->allowGuests = $_allowGuests;
	}

	function setLocationId($_locationId) {
		 $this->locationId = $_locationId;
	}
	
	function setCreationDate($_creationDate) {
		 $this->creationDate = $_creationDate;
	}

	function setEventDate($_eventDate) {
		$this->eventDate = $_eventDate;
	}
	
	function setEventPicture($_eventPicture) {
		$this->eventPicture = $_eventPicture;
	}
		
}
?>