<style>
  /* General Card Styling */
  .card {
    border-radius: 8px; /* Ensure all corners are rounded */
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
    border-top-left-radius: 8px; /* Rounded top-left corner */
    border-top-right-radius: 8px; /* Rounded top-right corner */
  }

  .card-body {
    padding: 1.5rem;
    border-bottom-left-radius: 8px; /* Rounded bottom-left corner */
    border-bottom-right-radius: 8px; /* Rounded bottom-right corner */
  }

  /* Book Card Styling */
  .scrollable-review {
    max-height: 100px;
    overflow-y: auto;
    background-color: #f8f9fa;
    border: 1px solid #e0e0e0;
    border-radius: 4px; /* Rounded corners for review section */
  }

  /* Delete Button Styling (Matches Below) */
  .btn-danger {
    background-color: #dc3545; /* Consistent delete button color */
    border-color: #dc3545;
  }

  .btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .card-body {
      padding: 1rem;
    }
  }
</style>
