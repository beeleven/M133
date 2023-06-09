<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		
		form {
			width: 400px;
			margin: 50px auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px #aaa;
		}
		
		h2 {
			margin-top: 0px;
			text-align: center;
			color: #333;
		}
		
		input[type=text], input[type=password] {
			width: 100%;
			padding: 10px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}
		
		button:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<form>
		<h2>Login</h2>
		<label for="username"><b>Username:</b></label>
		<input type="text" placeholder="Enter username" name="username" required>

		<label for="password"><b>Password:</b></label>
		<input type="password" placeholder="Enter password" name="password" required>

		<button type="submit">Login</button>
	</form>
</body>
</html>