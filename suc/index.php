<?php

  include 'php/header.php';
  include 'php/menu.php';


 ?>



<section id="hero">
    <div class="container">
      <div class="title-control">
    <h1 id="hero-title">WELCOME TO SUC MAG</h1>
  </div>
  <div class="subtitle-control">
    <h4 id="hero-subtitle"> A celebration and examination of our Southern Utah.
    </div>
</h4>
  </div>
  </section>

  <section id="featured">
    <div class="container">
    <h2>Featured Articles</h2>
    <h5 class="subtitle">Get familiar with southern Utah’s best.</h5>
    <div class="web-view">
    <div id="card-1" class="card-align col6x col6m col12s col12x">
      <a href="feature-beau-elliot">
        <div class="card-text">
          <h5 id="card-1-category">Feature</h5>
          <h2 id="card-1-title">Beau Elliot</h2>
          <p id="card-1-description">With the soft, melodic
            sounds of obscure
            indie-rock playing in the
            background, Beau Elliott
            lay on his bedroom floor,
            felt-tipped markers in
            hand and mouth. »
          </p>
        </div>
        <div class="card">
          <img id="card-1-content" src="assets/images/forest_head.png">
        </div>

        </a>
      </div>
      <div id="card-2" class="card-align col6x col6m col12s col12x">
        <a href="local-highlight-nevermind">
          <div class="card-text">
            <h5 id="card-2-category">Local Spotlight</h5>
            <h2 id="card-2-title">Nevermind</h2>
            <p id="card-2-description">For Nevermind, one of southern Utah's most
              popular local bands, it all started with a cup of coffee. »
            </p>
          </div>
          <div class="card">
            <img id="card-2-content" src="assets/images/nevermind-cover.jpg">
          </div>
          </a>
        </div>

        <div id="card-3" class="card-align col6x col6m col12s col12x">
          <a href="interview-sego">
            <div class="card-text">
              <h5 id="card-3-category">Interview</h5>
              <h2 id="card-3-title">Sego</h2>
              <p id="card-3-description">SUC Mag spoke with the original two members,
                Spencer Petersen and Thomas Carroll, in regards to local music in St.
                George: what is is, what it could be, and why they keep coming back. »
              </p>
            </div>
            <div class="card">
              <img id="card-3-content" src="assets/images/sego-feature.jpg">
            </div>
            </a>
          </div>
          <div id="card-5" class="card-align col6x col6m col12s col12x">
            <a href="loud-getting-acquainted">
              <div class="card-text">
                <h5 id="card-5-category">Loud</h5>
                <h2 id="card-5-title">Getting acquainted</h2>
                <p id="card-5-description">Do you know that feeling when something is
                  so loud, it creates a physiological response in your body that’s
                  impossible to ignore?  »
                </p>
              </div>
              <div class="card">
                <img id="card-5-content" src="assets/images/loud-column.jpg">
              </div>
                </a>
              </div>
            </div>
      </div>

      <div class="mobile-view">

<div class="wrapper">
    <a href="#one" class="btn active" ontouchstart="">One</a>
    <a href="#two" class="btn">Two</a>
    <a href="#three" class="btn">Three</a>
    <a href="#four" class="btn">Four</a>
      
      <hr/>
  
  <div class="slides">
      <div class="sld" id="#one">          <a href="feature-beau-elliot">
        <div id="card-1" class=" carousel-card-align col6x col6m col12s col12x" href="#one!">
          
            <div class="carousel-card-text">
              <h5 id="card-1-category">Feature</h5>
              <h2 id="card-1-title">Beau Elliot</h2>
            </div>
            
            <div class="carousel-card">
              <img id="card-1-content" src="assets/images/forest_head.png">
            </div></div>          </div>
           </a>
      <div class="sld" id="#two">          <a href="local-highlight-nevermind">
          <div id="card-2" class=" carousel-carousel-card-align col6x col6m col12s col12x" href="#two!">
              <div class="carousel-card-text">
                <h5 id="card-2-category">Local Spotlight</h5>
                <h2 id="card-2-title">Nevermind</h2>
              </div>
              <div class="carousel-card">
                <img id="card-2-content" src="assets/images/nevermind-cover.jpg">
              </div>
              
            </div>
</a></div>
      <div class="sld" id="#three">            <a href="interview-sego">
            <div id="card-3" class=" carousel-card-align col6x col6m col12s col12x" href="#three!">
              
                <div class="carousel-card-text">
                  <h5 id="card-3-category">Interview</h5>
                  <h2 id="card-3-title">Sego</h2>
                </div>
                <div class="carousel-card">
                  <img id="card-3-content" src="assets/images/sego-feature.jpg">
                </div>
                
              </div>
              </a></div>
      <div class="sld" id="#four">              <a href="loud-getting-acquainted">
              <div id="card-5" class=" carousel-card-align col6x col6m col12s col12x" href="#four!">
                
                  <div class="carousel-card-text">
                    <h5 id="card-5-category">Loud</h5>
                    <h2 id="card-5-title">Getting acquainted</h2>
                  </div>
                  <div class="carousel-card">
                    <img id="card-5-content" src="assets/images/loud-column.jpg">
                  </div>
                    </a></div>
  </div>
</div>

           

            




    </section>
    

    <?php

     include 'php/footer.php'
  ?>

</body>
</html>
