$(document).ready(function() {
  $("#name").keydown(function(e){
    if (e.which === 13)
      $("#button").focus();
  });
  
  $("#email").keydown(function(e){
    if (e.which === 13)
      $("#button").focus();
  });
  
  $("#comment").keydown(function(e){
    if (e.which === 13)
      $("#button").focus();
  });

  $("#button").click(function() {
    $(this).blur();

    var name = $("#name").val();
    var email = $("#email").val();
    var comment = $("#comment").val();
    
    if (name != "" && email != "" && comment !="") {
      var data = {name: name, email: email, comment: comment};
      
      jQuery.post("record.php", data, function(response) {
        $('#button').fadeOut(500, function() {
          $(this).prop('value', response).fadeIn(500);
          $(this).attr('disabled', true);
        });
      });
    } else {
      alert("Please fill all forms :)");
    }
  })
});