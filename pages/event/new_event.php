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
	include_once("../../widgets/userWidget.php");
	include_once("../../core/errors/get_error_from_code.php");

	$currentPage = "New Event";
	
	getHeader($currentPage);
		
?>
<script type="text/javascript">
	$(function(){
	    var now = new Date();
	
	    $('#date').scroller({
	        preset: 'datetime',
	        minDate: new Date(now.getFullYear(), now.getMonth(), now.getDate()),
			theme: 'ios',
			display: 'bottom',
			animate: 'slidevertical',	        
	        mode: 'scroller',
            dateFormat: 'dd MM, yyyy',
            timeFormat: "hh:ii A"	        
	    });    
	
	    $('#date').click(function(){
	        $('#date').scroller('show'); 
	        return false;
	    });
	});
</script>

<div id="container" data-role="content">
	<form method="post" action="../../core/event/create_event.php" data-transition="slide">
	<div id="manageEventContainer">
		<?php 
			if ($_GET['id'] == "0")	{
				echo "<center>Successfully updated!</center>";
			}else {
				echo getErrorMessage($_GET['id']);
			}
		?>
		<h3>Create your event</h3>

		<div id="formContainer">
			<input type="text" name="name" placeholder="Name" id="name" class="inputBox top"/>
			<input type="text" name="date" value="" placeholder="Date" class="inputBox" id="date" style="height:40px;"/>
			<input type="text" name="location" value="" placeholder="Location" id="location" class="inputBox bottom"/>
		</div>

		<h3>Describe your event</h3>
		<div id="formContainer">
			<textarea name="description" placeholder="Description" id="description" class="inputTextArea"> </textarea>
		</div>
		<h3>Additional Information</h3>
		<input type="checkbox" name="allow_guests" id="allow_guests" class="custom" data-mini="true" />
			<label for="allow_guests">Allow Guests</label>



	</div>
	<input type="submit" value="Create Event" class="formButton big button"/>
	</form>
	
	
</div>



<?php
	include_once("../../footer.php");
?>