<!DOCTYPE html>
<html>
<head>
	
<title>Home</title>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<style>
  body {
    font: 15px/1.5 arial, helvitica, san-serif;
    padding: 0;
    margin: 0;
    background-color: #f4f4f4;
}
.container {
    position:fixed;
    color: #e8491d;
    right: 1000px;
   top: 200px;
    background-color: #35424a;
    border: 16px solid #e8491d;
border-top: 50px solid #35424a;
border-bottom: 50px solid #35424a;

    border-radius: 10px;
    border-color: #35424a;
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
#showcase {
    height: 300px;
    color: white;
    text-align: center;
    display: inline;

}

#showcase h1 {
    margin: 0px;
    font-size: 60px;
    margin-bottom: 10px;
}


body{
    padding: 0;
    margin: 0;
}
select{
    position: absolute;
    transform: translate(-50%,-50%);
    top: 30%;
    left: 60%;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 505px;
    padding: 12px 20px;
    font-family: 'Poppins',sans-serif;
    font-weight: 600;
    font-size: 20px;
    letter-spacing: 0.5px;
    cursor: pointer;
    background-color: #35424a;
    color: #e8491d;
    border: 6px solid #35424a;
    border-radius: 8px;
    background-image: url("arrow-down.png");
    background-repeat: no-repeat;
    background-size: 47px;
    background-position: 247px 0.5px;
    outline: none;
    box-shadow: 0 0 20px rgba(20,20,30,0.25);
}
select::-ms-expand{
    display: none;
}
select:hover{
    border: 6px solid #35424a;
}
select option{
    background-color:#35424a;
    letter-spacing: 1.2px;
    font-weight: 400;
    font-size: 18px;
}
.selected{
    display: none;
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

    <form id="jobForm" action="hunting.php" method="GET">
    <select name="job_type" onchange="submitForm()">
<option value="all">All Jobs</option>
<option value="healthcare-doctor">Healthcare - Doctor</option>
<option value="healthcare-nursing">Healthcare - Nursing</option>
<option value="education-and-training">Education and Training</option>
<option value="engineering-computer">Engineering - Computer</option>
<option value="accounting-and-auditing">Accounting and Auditing</option>
<option value="project-management">Project Management</option>
<option value="sales">Sales</option>
<option value="administration-and-secretarial">Administration and Secretarial</option>
<option value="healthcare-other">Healthcare - Other</option>
<option value="business-development">Business Development</option>
<option value="it-software-and-web-development">IT - Software and Web Development</option>
<option value="human-resources">Human Resources</option>
<option value="engineering-civil-and-construction">Engineering - Civil and Construction</option>
<option value="catering-food-services-and-restaurants">Catering, Food Services and Restaurants</option>
<option value="information-management">Information Management</option>
<option value="general-management">General Management</option>
<option value="engineering-mechanical">Engineering - Mechanical</option>
<option value="customer-service">Customer Service</option>
<option value="protection-advocacy">Protection &amp; Advocacy</option>
<option value="shipping-and-logistics">Shipping and Logistics</option>
<option value="marketing">Marketing</option>
<option value="consultant">Consultant</option>
<option value="banking-and-finance">Banking and Finance</option>
<option value="compliance">Compliance</option>
<option value="product-management">Product Management</option>
<option value="law-and-legal">Law and Legal</option>
<option value="monitoring-evaluation">Monitoring &amp; Evaluation</option>
<option value="art-and-graphic-design">Art and Graphic Design</option>
<option value="online-marketing-social-media-seo-and-sem">Online Marketing (Social Media, SEO, and SEM)</option>
<option value="purchasing-and-procurement">Purchasing and Procurement</option>
<option value="maintenance-and-repair">Maintenance and Repair</option>
<option value="engineering-systems">Engineering - Systems</option>
<option value="engineering-environmental-and-water">Engineering - Environmental and Water</option>
<option value="engineering-electrical-electronic">Engineering - Electrical &amp; Electronic</option>
<option value="engineering-chemical">Engineering - Chemical</option>
<option value="community-outreach">Community Outreach</option>
<option value="research-and-development-rnd">Research and Development (R&amp;D)</option>
<option value="public-relations">Public Relations</option>
<option value="police-military-and-security-services">Police, Military and Security Services</option>
<option value="architecture-and-interior-design">Architecture and Interior Design</option>
<option value="healthcare-pharmacy">Healthcare - Pharmacy</option>
<option value="advertising">Advertising</option>
<option value="fashion-design">Fashion Design</option>
<option value="event-management">Event Management</option>
</select>
</form>
<script>
    function submitForm() {
      document.getElementById("jobForm").submit();
    }
  </script>
<section id="showcase">
        <div class="container">
            <h1>Welcome <br> To <br> JOBHUNTER</h1>
          
        </div>
    
    </section>
    <footer>
	<p>

</footer>
</body>
</html>
