<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
	// Get the amount of items in the shopping cart, this will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		 <link rel="icon" type="image/x-icon" href="imgs/peach.png" />
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/reg.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1>PEACHES</h1>
                <nav>
                    <a href="index.php">HOME</a>
                    <a href="index.php?page=products">COFFEES</a>
					<a href="index.php">BOOK A TABLE</a>
					<a href="#contact">CONTACT</a>
                
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i><span>$num_items_in_cart</span>
					</a>
					
                </div>
				<div class="link-icons">
                    <a href="index.php?page=login">
						<i class="fas fa-sign-in-alt"></i>
					</a>
					
                </div>
				<div class="link-icons">
								<p style="margin-right:-100px;color:red; " href="#">BETA VERSION</p></div>
            </div>
			</nav>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, peaches</p>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
EOT;
}
?>