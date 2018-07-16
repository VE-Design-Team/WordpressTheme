function copyClipboard() {
    var elm = document.getElementById("divClipboard");
    // for Internet Explorer
  
    if(document.body.createTextRange) {
      var range = document.body.createTextRange();
      range.moveToElementText(elm);
      range.select();
      document.execCommand("Copy");
      alert("Copied embed content to clipboard - Nice one.");
    }
    else if(window.getSelection) {
      // other browsers
  
      var selection = window.getSelection();
      var range = document.createRange();
      range.selectNodeContents(elm);
      selection.removeAllRanges();
      selection.addRange(range);
      document.execCommand("Copy");
      alert("Copied embed content to clipboard - Nice one.");
    }
  }