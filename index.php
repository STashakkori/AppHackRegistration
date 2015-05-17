<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="register.css">
<body>

<div class="reg">
</div>

<h1>Welcome to AppHack registration!</h1>

<form action="insert.php" method="post" class="form-signin" name="form" role="form"  >
                                  <p id="header">Please fill out this small form. Happy Hacking!<p>
                                <br>
				<br>
				<div id="input1">
				<div id="one"><p>1</p></div>
                                 <p>Email</p> 
			        <input type="email" name="email" class="form-control" placeholder="email address" ng-pattern="/^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/" data-errormessage-value-type-mismatch="test123" data-errormessage-missing-value="testing" required >
                                  </div>
                                  <br>
				  <br>
                                  <div id="input2">
				  <div id="two"><p>2</p></div>
				  <p>First Name</p>
                                          <input type="text" name="firstname" class="form-control" placeholder="first name"> 
                                  </div>
				  <br>
				  <br>
				  <div id="input3">
				  <div id="three"><p>3</p></div>
				  <p>Last Name</p>
					  <input type="text" name="lastname" class="form-control" placeholder="last name">
                                  <br>
				  <br>
				  <br> 
				  <div id="input4">
				  <div id="four"><p>4</p></div>
				  <p>Emergency Phone</p>
					  <input type="tel" name="phone" class=form-control placeholder="phone number">
				  <br>
				  <br>
				  <br>
			</form>
				  <div id="submitbutton" >
                                          <input class="button" type="submit" value="Submit" id="submit">
                                  </div> 


</body>
</html>

