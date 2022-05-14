<?=template_header('Login')?>
<br><br><br>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h6 class="active"> Sign In </h6>
    <h6>
<a	class="inactive underlineHover" href="index.php?page=registration">Sign Up </a></h6>

    <!-- Icon -->
    <div class="form-wrapper">
	
      👨‍💼
    </div>

    <!-- Login Form -->
    <form>
	<div class="form-wrapper">
      <input type="text" id="login" name="login" placeholder="username"required>
	  </div>
	  <div class="form-wrapper">
      <input type="password" id="password" class="form-wrapper" name="login" placeholder="password"required>
	  </div>
      <input type="submit" class="fadeIn first" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<?php
include"subscribe.php";
 include"footer.php";
?>
