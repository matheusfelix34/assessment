require('./bootstrap');
window.$ = window.jQuery = require('jquery');




$('#register-button').click(function() {
   
    var first_name1 = document.getElementById("first_name").value;
    var last_name1 = document.getElementById("last_name").value;
    var dob1 = document.getElementById("dob").value;
    var gender1 = document.getElementById("gender").value;
    
   
    
    $.ajax({
        url: "/api/cad_profile",
        method: 'POST',
        dataType: "json",
        data: {  first_name: first_name1, last_name:last_name1 , dob:dob1, gender:gender1 },
        success: function (data) {
            alert("Profile created successfully.");

            var form = document.getElementById("profile-form");

  
  for (var i = 0; i < form.elements.length; i++) {
    var element = form.elements[i];

   
    if (
      element.type === "text" ||
      element.type === "date" ||
      element.type === "select-one"
    ) {
     
      element.value = "";
    }
  }
        }
    });
});

$(document).ready(function() {
    setTimeout(function() {
      $('.alert-success').fadeOut('slow');
    }, 3000); 
  });
