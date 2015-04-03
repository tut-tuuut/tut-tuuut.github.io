document.addEventListener("DOMContentLoaded", function resizeImages(event){
    var imgs = document.querySelectorAll('img');
    var lineHeight = 40; // pixels
    [].forEach.call(imgs, function(e) {
    var nbOfLines = Math.round(e.naturalHeight / lineHeight);
    e.classList.add('image-' + nbOfLines)
    })
},false);

(function dealWithScrollBarOnVerticalGrid() {
    var scrollBar = document.querySelector('.sidebar');
    var stopButton = document.getElementById('srsly_stop_moving');
    var oldHiddenLines = 0;
    var stopMoving = false;
    var moveSideBarOnScroll = function onScroll(event) {
      if (stopMoving) { return; }
      var hiddenLines = Math.floor(window.scrollY / 40);
      if (hiddenLines == oldHiddenLines) { return; }
      if (hiddenLines >= 13) {
        scrollBar.classList.add('moved');
      }
      var positionOfScrollBar = hiddenLines * 40;
      oldHiddenLines = hiddenLines;
      scrollBar.style.top = positionOfScrollBar+'px';
    };
    document.addEventListener('scroll', moveSideBarOnScroll, false);

    var stopButtonMessages = [
      'Oui, maître.',
      'Youpi !',
      'Très bien.',
      'Wheeehee !',
      'Je reste là.',
      'Whouhouhouhou !',
      'À vos ordres.',
      'YEAH !',
      'é_è',
      'I like to move it',
      'Muh.',
      'MOVE IT!',
      'é____è',
      ':D',
      'é________è',
      'Allons-y !'
    ];
    var clicks = -1;
    var nbOfMessages = stopButtonMessages.length;
    function toggleStopMoving() {
        clicks++;
        var thisMessage = stopButtonMessages[clicks%nbOfMessages];
        if (!stopMoving) {
          stopMoving = true;
          stopButton.innerHTML = thisMessage;
          return;
        }
        stopMoving = false;
        stopButton.innerHTML = thisMessage;
    }
    document.getElementById('srsly_stop_moving').addEventListener('click', toggleStopMoving);
})();
