$(document).ready(function() {
  $.get('functions/index.php', function(response) {
    $('#DataView').html(response);
  });
});
