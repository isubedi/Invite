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

	$currentPage = "Profile";
	
	getHeader($currentPage, "cancelEditProfile");
	
	$user = getUserFromId(getUserId());
	
?>

<script type="text/javascript">
	$(function(){
	    var now = new Date();
	
	    $('#birthdate').scroller({
	        preset: 'date',
	        minDate: new Date("1912", now.getMonth(), now.getDate()),
	        theme: 'ios',
	        display: 'bottom',
	        animate: 'slidevertical',	        
	        mode: 'scroller',
	        dateFormat : "yyyy/mm/dd"
	    });    
	
	    $('#birthdate').click(function(){
	        $('#birthdate').scroller('show'); 
	        return false;
	    });
	    
	    
	});
</script>

<div id="container" data-role="content">
	<form method="post" action="../../core/auth/doupdateuser.php" data-transition="none">
	<?php 
		if ($_GET['id'] == "0")	{
			echo "<center>Successfully updated!</center>";
		}else {
			echo "<center>".getErrorMessage($_GET['id'])."</center>";
		}
	?>
		<h3>Public Information</h3>
		<div id="formContainer">
			<input type="text" name="name" value="<?php echo $user->getName();?>" placeholder="Name" id="name" class="inputBox top"/>
			<input type="text" name="username"  enabled="false" readonly="true" value="<?php echo $user->getUserName();?>" placeholder="User Name" class="inputBox" id="username"/>
			<input type="text" name="location" value="<?php echo $user->getLocation();?>" placeholder="Location" id="location" class="inputBox bottom"/>
		</div>
		<h3>Private Information</h3>
		<div id="formContainer">
			<input type="text" name="email" enabled="false" readonly="true" value="<?php echo $user->getEmail();?>" placeholder="Email" id="email" class="inputBox top"/>
			<input type="text" name="phone" maxlength="10" value="<?php echo $user->getPhone();?>" placeholder="Phone Number (123-456-7890)" class="inputBox" id="phone"/>
			
			<input type="text" name="birthdate" value="<?php echo $user->getBirthDate();?>" placeholder="Birthdate (YYYY-MM-DD)" class="inputBox" id="birthdate" class="bottom"/>

			<fieldset data-role="controlgroup" data-type="horizontal" >
		     	<input type="radio" name="gender" id="male" value="male" <?php if ($user->getGender() == "male") { echo 'checked="checked"';} ?> />
		     	<label for="male">male</label>
		
		     	<input type="radio" name="gender" id="female" value="female" <?php if ($user->getGender() == "female") { echo 'checked="checked"';} ?> />
		     	<label for="female">female</label>
		     </fieldset>
		
		</div>

	<input type="submit" class="formButton button big" value="Update Information"/>
	</form>
	
	
</div>



<?php
	include_once("../../footer.php");
?>