function openfolder() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf114;";
  setTimeout(function () {
      a.innerHTML = "&#xf115;";
    }, 1000);
}