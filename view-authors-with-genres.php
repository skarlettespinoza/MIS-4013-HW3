<h1>Author's books with genres</h1>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1>Author's Books with Genres</h1>
  <!-- Search Bar -->
  <input 
    type="text" 
    id="searchInput" 
    class="form-control w-25" 
    placeholder="Search author or book..." 
    onkeyup="searchContent()"
  />
</div>

<div id="cardGroup" class="card-group">
<?php
while($author=$authors->fetch_assoc()){
?>
  <div class="card author-card mb-3">
    <div class="card-body">
      <!-- Add data-author attribute for searching -->
      <h5 class="card-title" data-author="<?php echo strtolower($author['author_name']); ?>">
        <?php echo $author["author_name"]; ?>
      </h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $genres = selectGenresByAuthor($author["author_id"]);
  while ($genre = $genres->fetch_assoc()) {
?>
    <!-- Add data-title attribute for searching -->
    <li 
      class="list-group-item" 
      data-title="<?php echo strtolower($genre['title']); ?>">
      <?php echo $genre["genre"];?> - <?php echo $genre["title"];?> - <?php echo $genre["book_series"];?> - <?php echo $genre["publication_date"];?>
    </li>
<?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Author Birthdate: <?php echo $author["author_birthdate"];?></small></p>
    </div>
  </div>
<?php
}
?>
</div>

<!-- Add JavaScript for search functionality -->
<script>
  function searchContent() {
    const query = document.getElementById('searchInput').value.toLowerCase(); // Get search query
    const cards = document.querySelectorAll('.author-card'); // Get all author cards

    // Loop through cards to find matching authors or titles
    let found = false; // To track if we find a match
    cards.forEach(card => {
      const authorName = card.querySelector('[data-author]').getAttribute('data-author');
      const titles = card.querySelectorAll('[data-title]');
      
      // Check if the author name matches the search query
      if (authorName.includes(query)) {
        card.scrollIntoView({ behavior: 'smooth', block: 'center' });
        found = true;
        return;
      }
      
      // Check if any book title matches the search query
      titles.forEach(title => {
        if (title.getAttribute('data-title').includes(query)) {
          title.scrollIntoView({ behavior: 'smooth', block: 'center' });
          found = true;
          return;
        }
      });
    });

    // If nothing matches, you can optionally alert the user
    if (!found && query.length > 0) {
      alert('No results found.');
    }
  }
</script>
