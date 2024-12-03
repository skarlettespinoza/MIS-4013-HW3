<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editAuthorModal<?php echo $author['author_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editAuthorModal<?php echo $author['author_id']; ?>" tabindex="-1" aria-labelledby="editAuthorModalLabel<?php echo $author['author_id']; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="editAuthorModalLabel<?php echo $author['author_id']; ?>">Edit Author</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="aName<?php echo $author['author_id']; ?>" class="form-label" style="text-align: left;">Author Name</label>
            <input type="text" class="form-control" id="aName<?php echo $author['author_id']; ?>" name="aName" value="<?php echo htmlspecialchars($author['author_name']); ?>" required>
          </div>
          <div class="mb-3">
            <label for="aBirthdate<?php echo $author['author_id']; ?>" class="form-label" style="text-align: left;">Author Birthdate</label>
            <input type="date" class="form-control" id="aBirthdate<?php echo $author['author_id']; ?>" name="aBirthdate" value="<?php echo htmlspecialchars($author['author_birthdate']); ?>" onchange="calculateAge('<?php echo $author['author_id']; ?>')">
          </div>
          <div class="mb-3">
            <label for="aAge<?php echo $author['author_id']; ?>" class="form-label" style="text-align: left;">Author Age</label>
            <input type="number" class="form-control" id="aAge<?php echo $author['author_id']; ?>" name="aAge" value="<?php echo $author['author_age']; ?>" required readonly>
          </div>
          <input type="hidden" name="aid" value="<?php echo $author['author_id']; ?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn" style="background-color: #f72f97; border-color: #f72f97; color: white;">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Add this JavaScript function -->
<script>
  function calculateAge(authorId) {
    var birthdate = document.getElementById('aBirthdate' + authorId).value;
    if (birthdate) {
      var birthDate = new Date(birthdate);
      var today = new Date();
      var age = today.getFullYear() - birthDate.getFullYear();
      var month = today.getMonth() - birthDate.getMonth();
      if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }
      document.getElementById('aAge' + authorId).value = age;
    } else {
      document.getElementById('aAge' + authorId).value = '';
    }
  }
</script>
