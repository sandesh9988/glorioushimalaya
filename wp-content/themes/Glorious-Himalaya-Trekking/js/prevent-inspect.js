document.addEventListener('keydown', function() {
  if (event.keyCode == 123) {
    // alert("");
    return false;
  } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
    // alert("");
    return false;
  } else if (event.ctrlKey && event.keyCode == 85) {
    // alert("");
    return false;
  }
}, false);

if (document.addEventListener) {
  document.addEventListener('contextmenu', function(e) {
    // alert("");
    e.preventDefault();
  }, false);
} else {
  document.attachEvent('oncontextmenu', function() {
    // alert("");
    window.event.returnValue = false;
  });
}