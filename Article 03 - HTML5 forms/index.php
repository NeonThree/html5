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

<!DOCTYPE html><head>

<!--

Template carefully designed and coded by Neon Three.

<a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">HTML5 Template #3</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.neonthree.com" property="cc:attributionName" rel="cc:attributionURL">Neon Three</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/NeonThree/html5" rel="dct:source">github.com</a>.
 
-->

<meta charset="utf-8" />

<title>Template #3</title>

<!--[if IE]>

<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<link href="css/style.css" rel="stylesheet" type="text/css">

<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-114x114-precomposed.png"/>

</head>

<body>

<div id="headerbackground">

    <div class="container"> 
    
        <div align="center"><a href="http://www.neonthree.com" id="neonthree"><img src="images/neonthreelogo.png" width="277" height="90" alt="Neon Three Logo"></a></div>
        
      	<h1>Making forms nice</h1>
        
        <h2>Using HTML5 & CSS3 since 2012.</h2>
        
    </div>

</div>

<section id="features">

    <div id="featurescontainer">
    
        <section id="details">
        
            <div class="circle" id="circlecontent1"></div>
            
            <h3>HTML5</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas, quam quis ornare tristique, erat enim luctus turpis, ac fringilla.</p>
            
        </section>
        
        <section id="details">
        
            <div class="circle" id="circlecontent2">
            
            </div>
            
            <h3>NEON THREE</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas, quam quis ornare tristique, erat enim luctus turpis, ac fringilla.</p>
            
        </section>
        
        <section id="details">
        
            <div class="circle" id="circlecontent3">
            
            </div>
            
            <h3>CSS3</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas, quam quis ornare tristique, erat enim luctus turpis, ac fringilla.</p>
            
        </section>
        
    </div>

</section>


<form id="subscribe" method="post" action="">

	<fieldset>
    
		<legend>Subscribe</legend>
        
		<ol>
        
			<li>
				<label for=name>Name</label>
                
				<input id="name" name=name type=text placeholder="First and last name" required autofocus>
                
			</li>
            
            <li>
            
				<label for=name>Website</label>
                
				<input id=website name=website type=url placeholder="http://" required>
                
			</li>
            
			<li>
            
				<label for=email>Email</label>
                
				<input id=email name=email type=email placeholder="example@domain.com" required>
                
			</li>
            
			<li>
            
				<label for=phone>Phone</label>
                
				<input id=phone name=phone type=tel placeholder="Eg. +408041990" required>
                
			</li>
            
           <li>
           
				<label for=cardnumber>Age</label>
                
		 		<input id=age name=age type=number required>
                
		  </li>
            
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



</body>





<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

</html>