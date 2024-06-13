$(function() {

    $("form[name='prijava']").validate({
      
      rules: {
        username: {
          required: true,
          minlength: 4,
      },
        password: {
          required: true,
          minlength: 8,
        },
        confirm:{
          required: true,
          equalTo: "#password",
        }
      },
     
      messages: {
        username: {
          required: "Potrebno je upisati korisničko ime",
          minlength: "Korisničko ime nesmije biti kraće od 4 znaka",
        },
        password: {
          required: "Potrebno je upisati lozinku",
          minlength: "Lozinke ne smije biti kraća od 8 znakova"
        },
        confirm: {
          required: "Potrebno je ponoviti lozinku",
          equalTo: "Lozinke moraju biti iste!"
        },
     },

      submitHandler: function(form) {
        //form.submit();
        $.ajax({
          url: 'registracija.php', 
          type: 'POST',
          data: $(form).serialize(), 
          success: function(response) {
              console.log(response);
              alert(response);
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.error(textStatus, errorThrown);
          }
      });
      }
    });
  });