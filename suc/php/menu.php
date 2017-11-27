<?php

echo

'<body>
  <nav id="navigation-bar">
    <div class="row">
      <div id="nav-logo">
      <a href="/">
        <img src="assets/images/suc64px.png">
        </a>
      </div>
      <ul id="menu">
        <a href="/"><li>Home</li></a>
        <a href="latest"><li>Latest</li></a>
        <a href="archive"><li>Archive</li></a>
        <a href="team"><li>Team</li></a>
        <a href="advertise"><li>Advertise</li></a>
        <a href="contact"><li>Contact</li></a>
      </ul>
      <button id="button-for-mobile-nav">Menu</button>
      <div id="mobile-nav" class="modal-nav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <ul id="mobile-menu">
        <div class="modal-nav-content">
        <a href="/"><li>Home</li></a>
        <a href="latest"><li>Latest</li></a>
        <a href="archive"><li>Archive</li></a>
        <a href="team"><li>Team</li></a>
        <a href="advertise"><li>Advertise</li></a>
        <a href="contact"><li>Contact</li></a>
      </div>
      </ul>
    </div>
      </div>
    </nav>'

?>
