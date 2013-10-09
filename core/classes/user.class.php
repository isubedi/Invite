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
class User {
	
	private $userId;
	private $userName;
	private $email;
	private $name;
	private $phone;
	private $gender;
	private $birthdate;
	private $location;
	private $profilePicture;
	
	function User($_userId, $_userName, $_name, $_location, $_profilePicture, $_email, $_phone, $_gender, $_birthdate) {
		$this->userId = $_userId;
		$this->userName = $_userName;
		$this->name = $_name;
		$this->location = $_location;
		$this->profilePicture = $_profilePicture;
		$this->email = $_email;
		$this->phone = $_phone;
		$this->gender = $_gender;
		$this->birthdate = $_birthdate;
	
	}
	
	function getUserId() {
		return $this->userId;
	}

	function getUserName() {
		return $this->userName;
	}

	function getName() {
		return $this->name;
	}

	function getLocation() {
		return $this->location;
	}
	
	function getProfilePicture() {
		return $this->profilePicture;
	}

	function getEmail() {
		return $this->email;
	}

	function getPhone() {
		return $this->phone;
	}
	
	function getGender() {
		return $this->gender;
	}
		
	function getBirthdate() {
		return $this->birthdate;
	}
	
	function setUserId($_userId) {
		$this->userId = $_userId;
	}

	function setUserName($_userName) {
		 $this->userName = $_userName;
	}

	function setName($_name) {
		 $this->name = $_name;
	}

	function setLocation($_location) {
		 $this->location = $_location;
	}
	
	function setProfilePicture($_profilePicture) {
		$this->profilePicture = $_profilePicture;
	}

	function setPhone($_phone) {
		$this->phone = $_phone;
	}
	
	function setGender($_gender) {
		$this->gender = $_gender;
	}
		
	function setBirthdate($_birthdate) {
		$this->birthdate = $_birthdate;
	}
}





?>