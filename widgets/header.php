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
	function getHeader($currentPage, $option1 = "null", $option2 = "null") {
		$toReturn = '
		<div data-role="page" data-title="'.$currentPage.'" data-theme="c">
		<div data-role="header">';

			if ($option1 != "null") {
				$toReturn .= getButtonFromOption($option1);
			}

		$toReturn .= '<h1>'.$currentPage.'</h1>';
			
			if ($option2 != "null") {
				$toReturn .= getButtonFromOption2($option2);
			}
			
		$toReturn .= '</div>';
		echo $toReturn;
	}
	
	function getButtonFromOption($option) {
		global $PAGE_PATH;
		switch($option) {
			case "cancelEditProfile":
				$toReturn .= '<a href="'.$PAGE_PATH.getPagePath("profile").'" data-transition="slide" data-icon="delete" class="ui-btn-left">Cancel</a>';
				break;
		}
		return $toReturn;		
	}
	
	function getButtonFromOption2($option) {
		global $PAGE_PATH;
		switch($option) {
			case "edit profile":
				$toReturn .= '<a href="'.$PAGE_PATH.getPagePath("editprofile").'" data-transition="slide" data-icon="gear" class="ui-btn-right">Edit Profile</a>';
				break;
			case "cancel":
				$toReturn .= '<a href="'.$_SERVER['HTTP_REFERER'].'" data-transition="slide" data-icon="cancel" class="ui-btn-right">Cancel</a>';
				break;
		}
		return $toReturn;		
	}
	
?>