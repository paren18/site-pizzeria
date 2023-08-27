$(document).ready(function() {
  // Обработчик клика по изображению
  $('body').on('click', 'a[data-lightbox="images"]', function(e) {
    e.preventDefault();
    
    // Создание элемента для увеличенной фотографии
    var $overlay = $('<div class="overlay"></div>');
    var $image = $('<img class="enlarged-image" src="' + $(this).attr('href') + '">');
    
    // Добавление элементов в DOM
    $overlay.append($image);
    $('body').append($overlay);
    
    // Установка фокуса на увеличенное изображение
    $image.focus();
    
    // Закрытие увеличенной фотографии по клику на оверлей
    $overlay.on('click', function() {
      $overlay.remove();
    });
    
    // Закрытие увеличенной фотографии по клику на изображение
    $image.on('click', function() {
      $overlay.remove();
    });
  });
});