
function openPage(pageName, elmnt, colorp) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
    

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.background =colorp;
    
elmnt.style.color = 'white';
    
    // adding white color to the text
   // document.getElementById("mencolor").style.color = 'white';
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
//document.getElementById("mencolor").style.color = 'black';