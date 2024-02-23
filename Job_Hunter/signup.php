
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
<style>
     body {
    font: 15px/1.5 arial, helvitica, san-serif;
    padding: 0;
    margin: 0;
    background-color: #f4f4f4;
}

header {
    background: #35424a;
    color: /*white*/
    #fff;
    padding-top: 30px;
    min-height: 70px;
    border-bottom: /*orange*/
    #e8491d 3px solid;
}

header a {
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 16px;
}


/*header ul{
	margin: 0;
	padding: 0;
} same as below for global*/

ul {
    padding: 0;
    margin: 0;
}

header li {
    float: left;
    display: inline;
    padding: 0px 20px;
}

header #branding {
    float: left;
}

header #branding h1 {
    margin: 0;
}

header nav {
    float: right;
    margin-top: 10px;
}

header .highlight,
header .current a {
    color: #e8491d;
    font-weight: bold;
}

header a:hover {
    color: #ccc;
    font-weight: bold;
}
.main-agileits {
    background-color: #f1f1f1;
    padding: 20px;
    max-width: 400px;
    margin: 0 auto;
}


/* Styles for the sub-heading */

.sub-head {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}


/* Styles for the form container */

.sub-main {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
}


/* Styles for the input fields */

input[type="text"],
input[type="password"],
input[type="file"] {
    width: 92.7%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}


/* Styles for the icons */

span[class^="icon"] {
    position: relative;
    display: inline-block;
}

span[class^="icon"] i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 10px;
    color: #999;
}


/* Styles for the submit button */

input[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #555;
}


/* Styles for the terms and service paragraph */

p {
    font-size: 12px;
    text-align: center;
    margin-top: 20px;
    color: #fff;
}
   footer {
    padding: 25px;
    background: #35424a;
    border-top: #e8491d 3px solid;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;}
</style>
</head>
<header>
		<div class="topnav">
		<div id="branding">
				<h1 style="margin: 5px 40px;" >JOB<span class="highlight">HUNTER</span></h1>
			</div>
				
			</div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php"><b>Home</a></li>
                    <li><a href="post.php">Post a Job</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                </ul>
            </nav>
		</div>
	</header>
<body>
<!--header-->

<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form action="index1.php" method="post">
				<input placeholder="First Name" name="Name" class="name" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="Last Name" name="Name" class="name2" type="text" required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="Phone Number" name="Number" class="number" type="text" required="">
					<span class="icon3"><i class="fa fa-phone" aria-hidden="true"></i></span><br>
				<input placeholder="Email" name="mail" class="mail" type="text" required="">
					<span class="icon4"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
				<input  placeholder="Password" name="Password" class="pass" type="password" required="">
					<span class="icon5"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				<input  placeholder="Confirm Password" name="Password" class="pass" type="password" required="">
					<span class="icon6"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
					<input type="file" name="somename" size="chars"> 
				<label style="color: white">Inlcude My Resume</label>
				<input type="submit" value="sign up">
				<p style="color: white; ">By signing up to our website, you agree to our Terms and Service</p>
			</form>
		</div>
		<div class="clear"></div>
</div>

<footer>

</footer>

</body>
</html>