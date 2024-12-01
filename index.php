<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div style="position: relative; height: 100vh; display: flex; justify-content: center; align-items: center; text-align: center;">
  <!-- Image Layer -->
  <img src="https://static.vecteezy.com/system/resources/previews/021/813/455/non_2x/rectangle-lavender-floral-frame-botanical-flower-border-illustration-simple-elegant-romantic-style-for-wedding-events-signs-logo-labels-social-media-posts-etc-vector.jpg" 
       alt="Library Logo" 
       style="position: absolute; width: 800px; height: auto; z-index: 1; max-width: 100%;">

  <!-- About Section -->
  <div style="position: relative; z-index: 2; padding: 20px; max-width: 650px; margin-top: 20px;">
    <h2>About <span style="font-style: italic; font-weight: bold;">My Book Nook</span></h2>
    <p style="max-width: 600px; margin: 0;">
      Welcome to <span style="font-style: italic; font-weight: bold;">My Book Nook</span>, your personal digital library where your literary world comes to life! 
      This platform is designed to help you organize and manage your physical bookshelf collection with ease. 
      Here, you can add, edit, and delete entries for authors, genres, publishers, and books. 
      Each book entry captures essential details like title, author, genre, series, publication date, and even your personal reviews. 
      Whether you're cataloging a new addition or revisiting an old favorite, this library keeps your collection at your fingertips, allowing you to cherish and track every story that has a place on your shelf.
    </p>
  </div>
</div>
<?php
include "view-footer.php";
?>
