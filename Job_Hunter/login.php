<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Add your validation and login logic here
    // Example: Check if the email and password are valid
    if ($email === 'example@example.com' && $password === 'password') {
        echo 'Login successful';
    } else {
        echo 'Login failed, please Sign Up';
    }
}
?>

    <!DOCTYPE html>
    <html>

    <head>

        <title>Log in</title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <style>
body {
    font: 15px/1.5 arial, helvitica, san-serif;
    padding: 0;
    margin: 0;
    background-color: #f4f4f4;
}

.main-agileits {
    background-color: #f1f1f1;
    padding: 20px;
    max-width: 400px;
    margin: 100px auto;
}

.sub-head {
    text-align: center;
    color: #333;
    margin-bottom: 13px;
}

.sub-main {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
}

input[type="email"],
input[type="password"] {
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

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

button[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #555;
}

p {
    font-size: 12px;
    text-align: center;
    margin-top: 20px;
    color: #fff;
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

footer {
            padding: 25px;
            background: #35424a;
            border-top: #e8491d 3px solid;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

</style>

    </head>

    <body>
        <header>
            <div class="topnav">
                <div id="branding">
                    <h1 style="margin: 5px 40px;">JOB<span class="highlight">HUNTER</span></h1>
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

        <aside id="sidebar" class="main-agileits">
  <div class="dark sub-main">
    <h2 class="sub-head">Log In</h2>
   

    <form action="login2.php" method="post">
      <div>
        <label></label><br>
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div>
        <label></label><br>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <h4></h4>
      <button type="submit" class="button-1">Log In</button>
    </form>
  </div>
</aside>

<footer>
	<p>

</footer>
    </body>

    </html>