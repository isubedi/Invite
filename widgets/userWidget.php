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

	function getUserWidget($user) {
	
		if ($user->getUserId() == getUserId()) {
			$actionContent = "Edit Profile";
		} else {
			$actionContent = "Follow";
		}
	
		$toReturn = '
					<div id="userWidgetContainer">
						<div id="topContainer">
							<div id="profilePictureContainer">
								<img class="profilePicture" src="'.$user->getProfilePicture().'"/>
							</div>
							
							<div id="statsContainer">
								<div class="statsColumn">
									<span class="number">'.getEventsHosted($user->getUserId()).'</span>
									<span class="smallLabel">hosted</a>
								</div>
								<div class="statsColumn">
									<span class="number">'.getFollowingCount($user->getUserId()).'</span>
									<span class="smallLabel">attended</a>
								</div>
								<div class="statsColumn">
									<span class="number">'.getFollowersCount($user->getUserId()).'</span>
									<span class="smallLabel">followers</a>		
								</div>
							</div>
							
							<div id="actionContainer">'.
								$actionContent
							.'</div>
						</div>
						
						<div id="bottomContainer">
							<div class="name">
								'.$user->getName().'
							</div>
							<div class="location">
								'.$user->getLocation().'
							</div>
						</div>
					
					</div>
					';
		echo $toReturn;
	}	
	
?>