$(document).ready(function() {
  $('#registrationForm').submit(function(event) {
      event.preventDefault(); // Prevent normal form submission

      let formData = $(this).serialize(); // Serialize the form data

      // Send data via AJAX
      $.ajax({
          url: 'submit.php',
          type: 'POST',
          data: formData,
          success: function(response) {
              $('#result').html(response).show();
          },
          error: function() {
              $('#result').html('<p>Error occurred. Please try again.</p>').show();
          }
      });
  });
});
