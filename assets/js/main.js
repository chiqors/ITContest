// Konfirmasi ulangi password (view->v_sign)
  var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");
    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Ulangi Kata Sandi tidak valid");
      } else {
        confirm_password.setCustomValidity('');
      }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
