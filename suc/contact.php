<?php

  include 'php/header.php';
  include 'php/menu.php';


 ?>



 <section id="contact" class="sub-hero">
   <div class="container">
     <div class="title-control">
   <h1 id="hero-title">Contact</h1>
 </div>
 <div class="subtitle-control">
   <h4 id="hero-subtitle">Got a lead? Interested in a partnership? Or just wanna say hi?</h4>
 </div>
 </div>
 </section>

 <section id="contact-content">
   <div class="content-container col9l">
     <div class="contact-box">
     <div class="link-area col3l col12m">
       <h3>Contact Us</h3>
       <h6><a href="mailto:hello@suc-mag.com">hello@suc-mag.com</a></h6>
       <h3>Social</h3>
       <h6><a href="https://www.facebook.com/thesucmag/">Facebook</a></h6>
       <h6><a href="https://www.instagram.com/thesucmag/">Instagram</a></h6>
       <h6><a href="https://twitter.com/SUC_MAG">Twitter</a></h6>
     </div>
   <div class="form-area col9l col12m">
     <form class="form-flex" method="post" action="message-confirmation" name="contact-form">
       <div class="form-input col6l">
       <input type="text" class="inputText" name="full-name" placeholder="Full Name" required>
     </div>

     <div class="form-input col6l">
       <input type="text" name="company" placeholder="Company Name (if applicable)">
     </div>

     <div class="form-input col6l">
       <input type="text" name="email" placeholder="Email Address" required>
     </div>

     <div class="form-input col6l">
       <input type="text" name="phone" placeholder="Phone Number" required>
     </div>

     <div class="col12l" style="width:100%;">
       <textarea name="message" placeholder="Message" required></textarea>
     </div>

     <button type="submit" name="submit" id="contact-button">Send <i class="fa fa-arrow-right" aria-hidden="true" style="font-size:15pt;padding-left:50px;"></i></button>
     </form>

   </div>
 </div>
 </div>

   </section>

    <?php

     include 'php/footer.php'
  ?>

</body>
</html>
