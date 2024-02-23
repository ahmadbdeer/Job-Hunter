

<!DOCTYPE html>
<html>

<head>
    <title>Post a Job</title>
    <meta charset="utf-8">

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
      max-width: 800px;
      margin: 0 auto;
    }

    .sub-head {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .form-container {
      display: flex;
      justify-content: space-between;
    }

    .sub-main {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      width: 48%;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-bottom: 2px solid #e8491d;
    }

    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-bottom: 2px solid #e8491d;
    }

    .button-1 {
      background-color: #e8491d;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .button-1:hover {
      background-color: #ca331b;
    }

    a {
      color: black;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
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
  
    <section class="main-agileits">
   
    <div class="container">
      <h1 class="sub-head">POST A JOB</h1>
      <div class="form-container">

      <article class="sub-main">
          <label><b>company_name</b></label><br>
          <input type="text" placeholder="company_name"><br><br>

          <label><b>Company_Culture</b></label><br>
          <textarea placeholder="Details..."></textarea><br><br>

          <label><b>Job_Title</b></label><br>
          <input type="text" placeholder="Job Title"><br><br>

          <label><b>Job Description</b></label><br>
          <textarea placeholder="Details..."></textarea><br><br>

        
          <label><b>Province, City or Municipality</b></label><br>
          <input type="text" placeholder="Place"><br><br>
          </article>

          <article class="sub-main">
          <strong>Resume Requirement</strong><br>
          <input type="radio" name="q1" value="y">Resume<br>
          <input type="radio" name="q1" value="n">No Resume - the jobhunters will answer your application questions<br><br>

          <label><b>Salary (optional)</b></label><br>
          <input type="text" placeholder="$00,000">
          <select name="text">
            <option value="first">Per Day</option>
            <option value="second" selected>Per Month</option>
            <option value="third">Per Year</option>
          </select><br><br>

          <h1 class="sub-head">Application Questions</h1>
          <label><b>Education Level</b></label><br>
          <input type="text" placeholder="Place">
          <select name="text">
            <option value="first">Junior High School</option>
            <option value="second" selected>Senior High School</option>
            <option value="third">College</option>
          </select><br><br>

          <label><b>Experience</b></label><br>
          <input type="text" placeholder="Ex. Computer Technician">
          <select name="text">
            <option value="first">1 year</option>
            <option value="second" selected>2 years</option>
            <option value="third">3 years</option>
            <option value="fourth">4 years</option>
            <option value="fifth">5 or more years</option>
          </select><br>

          <a href="none.html">+ Add More Questions</a><br><br>

          <button type="submit" class="button-1">Post Now</button>
        </article>
      </div>
    </div>
  </section>
  <footer>
	
    </footer>
</body>

</html>