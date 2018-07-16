function copyCode() {
    var copyText = document.getElementById("copyCode");
    //copyText.select();
    //document.execCommand("copy");
    alert("Copied the text: " + copyText.value);
  }