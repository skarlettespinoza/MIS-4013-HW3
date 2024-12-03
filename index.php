<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div class="hero-section">
  <!-- Image Layer -->
  <img src="https://www.clipartqueen.com/image-files/flower-border-pink-flowers.jpg" 
       alt="Library Logo" 
       class="hero-image">

  <!-- About Section -->
  <div class="hero-text">
    <h2>About <span class="highlight-text">My Book Nook</span></h2>
    <p>
      Welcome to <span class="highlight-text">My Book Nook</span>, your personal digital library where your literary world comes to life! 
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

<!-- CSS -->
<style>
  /* General Hero Section Styling */
  .hero-section {
    position: relative;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
  }

  /* Image Styling */
  .hero-image {
    position: absolute;
    width: 100%;
    height: auto;
    max-width: 900px;
    z-index: 1;
    object-fit: cover; /* Ensures the image covers the container without stretching */
    border-radius: 10px;
  }

  /* About Section Styling */
  .hero-text {
    position: relative;
    z-index: 2;
    max-width: 650px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent background */
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  }

  .hero-text h2 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
  }

  .highlight-text {
    font-style: italic;
    font-weight: bold;
    color: #f72f97; /* Highlight color */
  }

  .hero-text p {
    font-size: 1.125rem;
    line-height: 1.6;
    color: #555;
    margin: 0;
  }

  /* Responsive Styling */
  @media (max-width: 768px) {
    .hero-text {
      max-width: 90%;
      padding: 15px;
    }

    .hero-image {
      width: 100%;
    }
  }
</style>
