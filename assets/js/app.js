let isProcessing = false;

function logIn(event) {
  if (isProcessing) {
    return;
  }
  event.preventDefault();
  isProcessing = true;

  // AJAX isteği
  $.ajax({
    type: 'POST',
    url: 'request.php?q=login',
    data: $('#login_form').serialize(),
    beforeSend: function () {
      // AJAX isteği başlamadan önce
      $('#loadingSpan').removeClass('dis_none');
      $('#loginButton').prop('disabled', true);
    },
    success: function (response) {
      // AJAX isteği başarılı bir şekilde tamamlandığında
      if (response == 'error') {
        $('.reg_error_message').removeClass('hidden');
        $('#loginerrormessage').removeClass('hidden');
        $('#loadingSpan').addClass('dis_none');
        $('#loginButton').prop('disabled', false);
        if (phone_status == 1 || passport_status == 1) {
          $('.loginSteps #step_1').removeClass('hidden');
          $('.loginSteps #step_2').addClass('hidden');
          phone_status = 1;
          passport_status = 1;
        }
      } else if (response == 'error_phone') {
        Swal.fire('Hata!', 'Telefon numarasını yanlış girdiniz.', 'error');
      } else if (response == '2fa') {
        if ($('#login_form input[name=mobile]').length > 0) {
          window.location.href = '/2fa';
        } else {
          openmodal('twoFag', 'none');
          startCountdown();
        }
      } else {
        window.location.href = '/';
      }
    },
    complete: function () {
      // AJAX isteği tamamlandığında (başarıyla veya hata ile)
      isProcessing = false;
    }
  });
}




function signUp(){
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'request.php?q=signup',
    data: $('#register_form').serialize(),
    success: (response) => {
      if (response == 'error') {
        Swal.fire('Hata!','Bilgileri doğru girdiğinizden emin olun','error');
      }else{
        if (locate == 0) {
          window.location.href = '/';
        }else{
         window.location.href = '/';
        }
      }
    }
  })
}

function logOut(){
  $.ajax({
    type: 'POST',
    url: 'request.php?q=logout',
    success: (response) => {
      window.location.href = "/";
    }
  })
}



