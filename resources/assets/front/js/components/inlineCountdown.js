$('.inline-countdown').each(function() {
  var $el = $(this);
  var deadline = Date.UTC(2018, 05, 25, 12);

  update();
  $el.parent().animate({ opacity: 1 }, 1000);

  setInterval(update, 1000);

  function update() {
    var frame = getTimeRemaining(deadline);

    ['days', 'hours', 'seconds', 'minutes'].forEach(function(key) {
      $el.find('[data-key="' + key + '"]').text(frame[key]);
    })
  }
})
