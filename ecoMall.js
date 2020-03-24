window.addEventListener("load", init);
//Declare global variables
var qty = 0;
var total = 0;


//init function is called upon loading of screen
function init(){
  document.getElementById("box1").addEventListener("dragstart", box1_dragstart);
  document.getElementById("box1").setAttribute("draggable", true);
  document.getElementById("box2").addEventListener("dragstart", box2_dragstart);
  document.getElementById("box2").setAttribute("draggable", true);
  document.getElementById("box3").addEventListener("dragstart", box3_dragstart);
  document.getElementById("box3").setAttribute("draggable", true);
  document.getElementById("box4").addEventListener("dragstart", box4_dragstart);
  document.getElementById("box4").setAttribute("draggable", true);
  document.getElementById("box5").addEventListener("drop", box5_drop);
  document.getElementById("box5").addEventListener("dragover", box5_dragover);
}

  //Sets the data to be transferred to the targe of the drag
  function box1_dragstart(evt){
    total=total+5.00;
    evt.dataTransfer.setData("text/plain", total);
  }

  function box2_dragstart(evt){
    total=total+15.00;
    evt.dataTransfer.setData("text/plain", total);
  }

  function box3_dragstart(evt){
    total=total+16.00;
    evt.dataTransfer.setData("text/plain", total);
  }

  function box4_dragstart(evt){
    total=total+8.00;
    evt.dataTransfer.setData("text/plain", total);
  }

  //When the drop event is received, update box 5's counter with the correct count
  function box5_drop(evt){
    evt.preventDefault();
    var data = evt.dataTransfer.getData("text/plain", total);
    evt.target.innerHTML = "Total = $" + data;
  }

  //Diable default event processing when dragging the element over a possible target
  function box5_dragover(evt){
    evt.preventDefault();
  }
