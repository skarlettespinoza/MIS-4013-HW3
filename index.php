<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div style="position: relative; height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">

  <!-- Top Image Layer -->
  <img src="https://images.freeimages.com/image/previews/6a1/pink-floral-border-design-5693727.png" 
       alt="Floral Border" 
       style="width: 100%; height: auto; z-index: 1; max-width: 100%;">

  <!-- About Section -->
  <div style="position: relative; z-index: 2; padding: 20px; max-width: 650px; margin-top: 20px; margin-bottom: 20px;">
    <h2>About <span style="font-style: italic; font-weight: bold;">My Book Nook</span></h2>
    <p style="max-width: 600px; margin: 0;">
      Welcome to <span style="font-style: italic; font-weight: bold;">My Book Nook</span>, your personal digital library where your literary world comes to life! 
      This platform is designed to help you organize and manage your physical bookshelf collection with ease. 
      Here, you can add, edit, and delete entries for authors, genres, publishers, and books. 
      Each book entry captures essential details like title, author, genre, series, publication date, and even your personal reviews. 
      Whether you're cataloging a new addition or revisiting an old favorite, this library keeps your collection at your fingertips, allowing you to cherish and track every story that has a place on your shelf.
    </p>
  </div>

  <!-- Bottom Image Layer -->
  <img src="https://images.freeimages.com/image/previews/6a1/pink-floral-border-design-5693727.png" 
       alt="Floral Border" 
       style="width: 100%; height: auto; z-index: 1; max-width: 100%;">

</div>
<?php
include "view-footer.php";
?>
