<!-- index.php -->
<?php

session_save_path('./');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    $grapeUsername = "grape";
    $grapePassword = "secret1234";

    $baboUsername = "babo";
    $baboPassword = "babo1234";

    if ($enteredUsername == $grapeUsername && $enteredPassword == $grapePassword) {
        $_SESSION['user'] = "grape";
        header("Location: page_grape.php");
        exit();
    } elseif($enteredUsername == $baboUsername && $enteredPassword  == $baboPassword){
        $_SESSION['user'] = "babo";
        header("Location: page_babo.php");
        exit();
    } else {
        $errorMessage = "Invalid username or password";
    }
}
?>

<html>
	<head>
		<style>
			body {
				font-family: Arial, sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				background-color: #f4f4f4;
			}
	
			header {
				background-color: #DE628B;
				color: #fff;
				text-align: center;
				padding: 10px;
			}
	
			main {
				padding: 20px;
				margin-bottom: 80px;
			}
	
			form {
				max-width: 400px;
				margin: 0 auto;
				background-color: #fff;
				padding: 20px;
				border-radius: 8px;
				box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
			}
	
			label {
				display: block;
				margin-bottom: 8px;
				font-weight: bold;
			}
	
			input {
				width: 100%;
				padding: 12px;
				margin-bottom: 20px;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
	
			input[type="submit"] {
				background-color: #DE628B;
				color: #fff;
				cursor: pointer;
				padding: 12px;
				border: none;
				border-radius: 4px;
				box-sizing: border-box;
			}
	
			input[type="submit"]:hover {
				background-color: #555;
			}
	
			footer, nav {
				background-color: #DE628B;
				color: #fff;
				text-align: center;
				padding: 10px;
				position: fixed;
				bottom: 0;
				width: 100%;
			}
	
			nav a {
				color: #fff;
				text-decoration: none;
				margin: 0 10px;
			}
		</style>
	</head>
	<body>

        <header>
            <h1>GRAPE 고양이 웹</h1>
        </header>

        <main>
            <form method="post">
                <h2>Login</h2>

                <?php
                if(isset($errorMessage))
                {
                    echo '<p style="color:red;">' . $errorMessage . '</p>';
                }
                ?>

                <label for="username">Username:</label>
                <input type="text" name="username" required>

                <label for="password">Password:</label>
                <input type="password" name="password" required>

                <input type="submit" value="Login">
            </form>
        </main>

        <footer>
            <p>&copy; 2023 Your Website. All rights reserved.</p>
        </footer>

    </body>
</html>
