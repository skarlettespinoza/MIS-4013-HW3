<style>
  /* General Card Styling */
  .card {
    border-radius: 8px;
    background-color: #fff;
  }

  /* Author Card Styling */
  .card-header {
    background-color: #f72f97; /* Matches "View Genre" button */
    color: white;
    padding: 1rem;
    border-bottom: 0;
    font-size: 1.25rem;
    font-weight: bold;
    text-align: center;
  }

  .card-body {
    padding: 1.5rem;
  }

  /* Book Card Styling */
  .scrollable-review {
    max-height: 100px;
    overflow-y: auto;
    background-color: #f8f9fa;
    border: 1px solid #e0e0e0;
  }

  /* Buttons */
  .btn-danger {
    background-color: #dc3545; /* Matches Delete button below */
    border-color: #dc3545;
  }

  .btn-danger:hover {
    background-color: #c82333; /* Matches Delete button below hover */
    border-color: #bd2130;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .card-body {
      padding: 1rem;
    }
  }
</style>
