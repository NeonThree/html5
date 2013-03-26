<?php

// if form has been submitted
if(isset($_POST['send'])){	
	//form data
	$name = $_POST['name'];
	$website = $_POST['website'];	
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	
	$headers = "From: Subscriber<subscriber@yourdomain.com>" . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	$emailbody = "<p>You have a subscriber!</p>
								<p><strong>Name: </strong> {$name} </p>
								<p><strong>Website: </strong> {$website} </p>
								<p><strong>Phone: </strong> {$phone} </p>
								<p><strong>Email Address: </strong> {$email} </p>
								<p><strong>Age: </strong> {$age} </p>";
	
	$mailSent = mail("subscriber@yourdomain.com","Subscription",$emailbody,$headers);
	
	// if mail sent successfully
  if ($mailSent) {
		$formMessage = "You are now subscribed.";
	}
}


?>

<!DOCTYPE html>

<!--

Template carefully designed and coded by Neon Three.

<a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">HTML5 Template #4</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.neonthree.com" property="cc:attributionName" rel="cc:attributionURL">Neon Three</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/NeonThree/html5" rel="dct:source">github.com</a>.
 
-->

<meta charset="utf-8" />

<title>Template #3</title>

<!--[if IE]>

<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<link href="css/style.css" rel="stylesheet" type="text/css">

<body>

	<div class="container"> 
        
        <header>
        
            <div id="neonthree"><a href="http://www.neonthree.com">NeonThree</a></div>
            
            <div id="signup"><a href="#">Sign Up</a></div>
            
        </header>
        
      	<div align="center"><input id="title" type=text placeholder="Validation made easy." title="HTML5 validation styled with CSS4" autofill autofocus></div>
        
        <div id="validation" align="center"></div>
        
        <section class="details">
        
            <div class="circle" id="circlecontent1"></div>
            
            <h3>Valid</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas, quam quis ornare tristique, erat enim luctus turpis, ac fringilla.</p>
            
        </section>
        
        <section class="details">
        
            <div class="circle" id="circlecontent2">
            
            </div>
            
            <h3>Invalid</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas, quam quis ornare tristique, erat enim luctus turpis, ac fringilla.</p>
            
        </section>
        
        <section class="details">
        
            <div class="circle" id="circlecontent3">
            
            </div>
            
            <h3>Required</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas, quam quis ornare tristique, erat enim luctus turpis, ac fringilla.</p>
            
        </section>
        
        </div>
        
        <div id="featurescontainer">

<form id="subscribe" method="post" action="">

	<fieldset>
    
		<legend>Sign Up</legend>
        
		<ol>
        
			<li>
				<label for=name>Name<span id="required">*</span></label>
                
				<input name=name type=text placeholder="First and last name" pattern="[a-zA-Z0-9]{2,}" title="Minimum at least 2 characters" required>
                
			</li>
            
            <div id="name"></div>
            
            <li>
            
				<label for=name>Website<span id="required">*</span></label>
                
				<input name=website type=url placeholder="http://" title="Your website address must start with http://"  novalidate required>
                
			</li>
            
            <div id="website"></div>
            
			<li>
            
				<label for=email>Email<span id="required">*</span></label>
                
				<input name=email type=email placeholder="example@domain.com" required>
                
			</li>
            
            <div id="email"></div>
            
			<li>
            
				<label for=phone>Phone<span id="required">*</span></label>
                
				<input name=phone type=tel placeholder="Eg. +408041990" pattern="[0-9]{10}" min="8" maxlength="12" required>
                
			</li>
            
            <div id="phone"></div>
            
           	<li>
           
				<label for=cardnumber>Age<span id="required">*</span></label>
                
		 		<input id="agevalidate" name=age type=number placeholder="You must be at least 18 years" min="18" max="122" maxlength="3" required>
                
		  </li>
          
          <div id="age"></div>
            
		</ol>
        
	</fieldset>

	<fieldset>
    
		<button name=send id=send type=submit>Subscribe</button>
        
	</fieldset>
    
    <?php 
// checks if mail has been sent
if ($_POST && isset($mailSent) && $mailSent) {
	echo '<div id="success">' . $formMessage . '</div>';
}
?>
    
</form>

</div>

</body>



<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

</html>