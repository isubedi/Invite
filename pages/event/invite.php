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
	include_once("../../core/api/location.php");
	include_once("../../widgets/eventWidget.php");
	
	$currentPage = "Invite Friends";
	
	getHeader($currentPage);
	
	$user = getUserFromId(getUserId());
	$event = getEventFromId($_GET['id']);
?>

<div id="container">

	<?php getEventWidget($event);?>

</div>



<?php
	include_once("../../footer.php");
?>