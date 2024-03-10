<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport"
		content="width=device-width,initial-scale=1.0"> 
	<title>Responsive Form Card</title> 
	<link rel="stylesheet" href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 
	<link rel="stylesheet" href="feedback.css"> 
</head> 

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="social.php">SOCIALS</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
        </nav>
    </header>
</body>

<body> 
	<h1>Your Feedback</h1> 
	<div class="form-box"> 
		<div class="textup"> 
		</div> 
		<form> 
			<label for="uname"> 
				<i class="fa fa-solid fa-user"></i> 
				Name 
			</label> 
			<input type="text" id="uname"
				name="uname" required> 

			<label for="email"> 
				<i class="fa fa-solid fa-envelope"></i> 
				Email Address 
			</label> 
			<input type="email" id="email"
				name="email" required> 

			<label for="phone"> 
				<i class="fa-solid fa-phone"></i> 
				Phone No 
			</label> 
			<input type="tel" id="phone"
				name="phone" required> 

			<label for="msg"> 
				<i class="fa-solid fa-comments"
				style="margin-right: 3px;"></i> 
				Write your Suggestions: 
			</label> 
			<textarea id="msg" name="msg"
					rows="4" cols="10" required> 
			</textarea> 
			<button type="submit"> 
				Submit 
			</button> 
		</form> 
	</div> 
</body> 

<footer>
        <p>&copy; 2024 Prince Max Wynn. All rights reserved.</p>
    </footer>

</html>