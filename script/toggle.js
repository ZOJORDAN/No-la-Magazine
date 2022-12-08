function toggle(btnID){
  var theButton = document.getElementById(btnID);
  var element = document.body;
  if (theButton.getAttribute("aria-pressed") == "false"){
    theButton.setAttribute("aria-pressed", "true");
    element.classList.toggle("dark-mode");
  }
  else{
    theButton.setAttribute("aria-pressed", "false");
  }
}