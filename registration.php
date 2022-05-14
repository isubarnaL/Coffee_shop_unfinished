<?=template_header('Registration')?>
<br><br><br>
<div class="wrapper fadeInDown">
<div id="formContent">
				
					 <h6>
                     <a class="inactive underlineHover" href="index.php?page=login"> Sign In </a></h6>
                     <h6 class="active">Sign Up </h6>
					 <form action="manage-insert.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<div class="form-wrapper">
							<input type="text" name="f_name" placeholder="First Name" pattern="[a-zA-Z}+" required>
						</div>
						<div class="form-wrapper">
							<input type="text" name="l_name" placeholder="Last Name" pattern="[a-zA-Z}+" required>
						</div>
					</div>
					
					<div class="form-wrapper">
						<input type="text" name="username" placeholder="Username" required>
					</div>
					
					<div class="form-wrapper">
					
						<input type="email" name="email" placeholder="Email" required>
					</div>
					
					<div class="form-wrapper">
					
						<input type="text" name="address" placeholder="Address" >
					</div>
					
					<div class="form-wrapper">

						<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
					</div>
					
					<div class="form-wrapper">
			        <label><input type="checkbox" required> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		            </div>
					<input type="submit" class="fadeIn first" name="regsub" value="Register Now">
				</form>
			</div>
			</div>
<?php
include"subscribe.php";
 include"footer.php";
?>