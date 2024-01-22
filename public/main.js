document.getElementById('subscribeForm').addEventListener('submit', function(event) {
  event.preventDefault();

  // Assuming you have SweetAlert2 imported and available in your project
  Swal.fire({
      title: 'Terima kasih!',
      text: 'Anda telah berhasil berlangganan DigiCar Point.',
      icon: 'success',
  });

  // Optionally, reset the form or perform other actions
  document.getElementById('inputEmail').value = '';
});


// js untuk whatApp Link
function welcome(e) {
  window.open("https://wasap.at/0zMjp9")
}