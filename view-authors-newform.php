<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#newAuthorModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newAuthorModal" tabindex="-1" aria-labelledby="newAuthorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="newAuthorModalLabel">New Author</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="aName" class="form-label">Author Name</label>
            <input type="text" class="form-control" id="aName" name="aName" required>
          </div>
          <div class="mb-3">
            <label for="aBirthdate" class="form-label">Author Birthdate</label>
            <input type="date" class="form-control" id="aBirthdate" name="aBirthdate" required>
          </div>
          <div class="mb-3">
            <label for="aAge" class="form-label">Author Age</label>
            <input type="number" class="form-control" id="aAge" name="aAge" required>
          </div>
          <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn" style="background-color: #f72f97; border-color: #f72f97; color: white;">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
