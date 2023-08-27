setTimeout(function() {
  var successMessage = document.getElementById('success-message');
  var errorMessage = document.getElementById('error-message');

  if (successMessage) {
    fadeOutElement(successMessage);
  }

  if (errorMessage) {
    fadeOutElement(errorMessage);
  }
}, 1800);

function fadeOutElement(element) {
  var opacity = 1;
  var timer = setInterval(function() {
    if (opacity <= 0.1) {
      clearInterval(timer);
      element.style.display = 'none';
      element.style.opacity = '1';
      element.style.pointerEvents = 'none';
    }
    element.style.opacity = opacity;
    opacity -= opacity * 0.1;
  }, 20);
}