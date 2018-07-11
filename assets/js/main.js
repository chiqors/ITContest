// validasi jumlah digit NIK
  function validateNik(){
        var nik=document.getElementById("nik");
        var number=/^[0-9]+$/;

        if (nik.value==null || nik.value==""){
          nik.setCustomValidity("Tidak Boleh Kosong");
        }else{ nik.setCustomValidity(''); }

        if (!nik.value.match(number)){
          nik.setCustomValidity("Input Harus Angka");
        }else{ nik.setCustomValidity(''); }
  }
     nik.onchange = validateNik;
     nik.onkeyup = validateNik;



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
