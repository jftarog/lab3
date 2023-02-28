<?php
   function active($current_page){
      $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
      $url = end($url_array);  
      if(strtolower($current_page) == strtolower($url)) {
         echo 'active'; //class name in css 
      } 
   }
?>

<style>
   div.navbar {
      margin-bottom: 10px;
      border: solid 2px #53585f;
      padding: 12px;
      padding-left: 5px;
      background-color: #2C2F33;
   }
   div.navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
   }
   div.navbar ul li {
      display: inline;
   }
   div.navbar ul li a {
      background-color: #474c52;
      padding: 8px;
      color: white;
      text-decoration: none;
   }
   div.navbar ul li a:hover {
      background-color: #111111;
   }
   div.navbar ul li a.active {
      background-color: lightblue;
      color: black;
   }
</style>

<div class="navbar"><ul>
   <li><a href="<?php echo base_url() ?>/home" class="<?php active('home'); ?>">Home</a></li>
   <li><a href="<?php echo base_url() ?>/resources" class="<?php active('resources'); ?>">Resources</a></li>
   <li><a href="<?php echo base_url() ?>/lessons" class="<?php active('lessons'); ?>">W3Schools Lessons</a></li>
   <li><a href="<?php echo base_url() ?>/news" class="<?php active('news'); ?>">News</a></li>
   <!-- <li><a href="validation_complete" class="<?php //active('validation_complete'); ?>">Forms</a></li> -->
   <!-- <li><a href="guests" class="<?php //active('guests'); ?>">Guests</a></li> -->
</ul></div>