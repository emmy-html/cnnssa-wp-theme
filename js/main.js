function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// home page topbar
function closeTopbar() {
  var topbar = document.getElementById("home-topbar");
  var navigation = document.getElementById("header-nav");
  var container = document.getElementById("body-adjust");
  topbar.classList.add("hide-topbar");
  navigation.classList.add("adjust-height");
  container.classList.add("adjust-container");
}
function closePopover() {
  var popover = document.getElementById("popover");
  popover.classList.add("hide-topbar");
}
function closeSuggestionPopover() {
  var suggestionPopover = document.getElementById("suggestion-box-popover");
  suggestionPopover.classList.add("hide-topbar");
}
window.onload = function () {
  // wait for window to load to click tab by default & activate accordion buttons on donate page
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      // toggle between adding and removing the "active" class, to highlight the button that controls the panel
      this.classList.toggle("active");
      // toggle between hiding and showing the active panel
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
  var element = document.getElementById("defaultTab");
  if (typeof(element) != 'undefined' && element != null) {
    document.getElementById("defaultTab").click();
  }
};
