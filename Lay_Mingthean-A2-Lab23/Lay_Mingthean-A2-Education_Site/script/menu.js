function openMenu() {
  var navMain = document.getElementById("navMenuId");
  if (navMain.className === "navMenu") {
    navMain.className += " mobileView";
  } else {
    navMain.className = "navMenu";
  }
}
