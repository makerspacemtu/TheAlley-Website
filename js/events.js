/*
Open event will take the name of an event(usually the one that was clicked) and
open the event overlay for that event.

parameters: name- the ID of the event overlay that should open when the event is
clicked
*/
var openedEvent;
function openEvent(name){
  //turn on the grey background
  document.getElementById("overlayBackground").style.display = "flex";
  openedEvent = name;
  document.getElementById(name).style.display = "block";
}

/*
Open event will close an open event
*/
function closeEvent(){
  document.getElementById("overlayBackground").style.display = "none";
  document.getElementById(openedEvent).style.display = "none";
  openedEvent = null;
}
