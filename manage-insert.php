<!-- manage-insert.php -->
<?php 
session_start();
include_once 'dbCon.php';
$con = connect();
	if (isset($_POST['regsub'])){
		$firstname=$_POST['f_name'];
        $lastname = $_POST['l_name'];
		$username=$_POST['username'];
        $email = $_POST['email'];
		$address = $_POST['address'];
        $password = $_POST['password'];

        // existing email chaeck
        $checkSQL = "SELECT * FROM `usr_info` WHERE email = '$email';";
        $checkresult = $con->query($checkSQL);
        if ($checkresult->num_rows > 0) {
        	echo '<script>alert("This Email Already Exist.")</script>';
        	echo '<script>window.location="index.php?page=registration"</script>';
        }
		else{
					$iquery="INSERT INTO `usr_info`(`firstname`,`lastname`,`username`, `email`, `address`, `password`) 
			        		VALUES (`firstname`,`lastname`,`username`, `email`, `address`, `password`);";
		        	if ($con->query($iquery) === TRUE) {
		        		echo '<script>alert("New user added successfully")</script>';
		        		echo '<script>window.location="index.php?page=registration"</script>';
		        	}else {
		                echo "Error: " . $iquery . "<br>" . $con->error;
		            }
        }
    }
?>