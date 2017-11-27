<?php

  include 'php/header.php';
  include 'php/menu.php';


 ?>

<?php
                if(isset($_POST['submit'])){
		       $email_from = 'j@jalen.xyz';
		       $name = $_POST['name'];
		       $message = $_POST['message'];
		       $visitor_email = $_POST['email'];
		       $to = 'hello@suc-mag.com';
		       $subject = 'Inquiry from: ' . $name;
		       $headers = 'From:' . $visitor_email . "\r\n" .
   		       'Reply-To:' . $visitor_email . "\r\n";
		
		       $body = $message;
		       
		       mail($to, $subject, $body, $headers);

		       }
    		?>

 <section id="contact" class="sub-hero">
   <div class="container">
     <div class="title-control">
   <h1 id="hero-title">Thanks!</h1>
 </div>
 <div class="subtitle-control">
   <h4 id="hero-subtitle">We appreciate the message.</h4>
 </div>
 </div>
 </section>

 <section id="advertise-content">
   <div class="content-container col9l">
     <h4>Your message was successfully sent.</h4>
 </div>

   </section>

    <?php

     include 'php/footer.php'
  ?>

</body>
</html>
