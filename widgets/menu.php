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

	function isCurrentPage($page) {
		global $currentPage;
		echo $currentPage;
		if ($page == $currentPage) {
			echo 'class="ui-btn-active ui-state-persist"';
		}
	}
	

?>

<?php if (isLoggedIn()) { ?>
<div id="menuContainer" data-role="navbar">
	<ul id="menu">
				<li class="menuItem">
					<a href="<?php echo $WEB_ROOT.("home");?>" <?php isCurrentPage("Home");?> data-theme="c" data-transition="none">		
						<img src="<?php echo $WEB_ROOT;?>images/menu/53-house.png"/>
					</a>				
				</li>
				
				
				<li class="menuItem">
					<a href="<?php echo $WEB_ROOT.("browse");?>" <?php isCurrentPage("Browse");?> data-theme="c" data-transition="none">
						<img src="<?php echo $WEB_ROOT;?>images/menu/104-index-cards.png"/>		
					</a>
				</li>
			
				<li class="menuItem">			
					<a href="<?php echo $WEB_ROOT.("newevent");?>" <?php isCurrentPage("New Event");?> data-theme="c" data-transition="none">
						<img src="<?php echo $WEB_ROOT;?>images/menu/83-calendar.png"/>		
					</a>
				</li>
				<li class="menuItem">			
					<a href="<?php echo $WEB_ROOT.("notifications");?>" <?php isCurrentPage("Notifications");?> data-theme="c" data-transition="none">
						<img src="<?php echo $WEB_ROOT;?>images/menu/09-chat-2.png"/>		
					</a>
				</li>
				
				<li class="menuItem">
					<a href="<?php echo $WEB_ROOT.("profile");?>" <?php isCurrentPage("Profile");?> data-theme="c" data-transition="none">
						<img src="<?php echo $WEB_ROOT;?>images/menu/111-user.png"/>		
					</a>
				</li>

	</ul>

</div>

<?php } ?>