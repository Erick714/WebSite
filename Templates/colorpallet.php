<div id="ColorPickerPlacer" >
  <h1 id="CollorPalletHeader" style="cursor: all-scroll;" >Color Pallet</h1>
  <table id="ColorPicker">
    <tr>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:LightCoral"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Red"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:DarkRed"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Pink"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:DeepPink"></td>
    </tr>
    <tr>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Orange"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Yellow"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:DarkKhaki"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Violet"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Magenta"></td>
    </tr>
    <tr>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:MediumPurple"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Purple"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Indigo"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Chartreuse"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Green"></td>
    </tr>
    <tr>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:LimeGreen"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Olive"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:MediumAquamarine"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Teal"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Cyan"></td>
    </tr>
    <tr>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Turquoise"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:SteelBlue"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Blue"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Navy"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Chocolate"></td>
    </tr>
    <tr>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:White"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Beige"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:LightGray"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:DimGray"></td>
      <td onclick="ChangeColor(this.style.backgroundColor)" style="background-color:Black"></td>
    </tr>
  </table>
</div>

<?php
/*
dragElement(document.getElementById("ColorPickerPlacer"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById("CollorPalletHeader")) {
    document.getElementById("CollorPalletHeader").onmousedown = dragMouseDown;
  } else {
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    document.onmouseup = null;
    document.onmousemove = null;
  }



  function  AddPlusik(element,visibility)
    {
      elements = element.children;
      for (var i = 0; i < elements.length; i++)
      {
        if (elements[i].tagName == "INPUT" & visibility==2)
        {
            elements[i].style.visibility="visible";
        }
        else if(elements[i].tagName == "INPUT" & visibility==1)
        {
          elements[i].style.visibility="collapse";
        }
      }
    }
  function AddColor(ParentElement)
    {
      var ChildsInParent = ParentElement.childElementCount;
      if (ChildsInParent < 6)
       {
         var node = document.createElement("DIV");
         node.classList.add("Colorblock");
         var newID = ParentElement.id.slice(ParentElement.id.indexOf("_")+1);
         newID = "Color"+newID+"&"+(ChildsInParent-1);
         console.log(newID);
         node.setAttribute("id",newID);
         node.setAttribute("onclick","showColorPicker(this.id)");
         document.getElementById(ParentElement.id).appendChild(node);
      }

    }
  function RemoveColor(ParentElement)
  {
    var ChildsInParent = ParentElement.childElementCount;
    if (ChildsInParent > 3)
     {
       ParentElement.removeChild(ParentElement.lastChild);
     }
  }
  var ColorID ;
  function showColorPicker(ID)
  {
    ColorID = ID;
    var colorPicker=document.getElementById("ColorPickerPlacer");
    colorPicker.style.visibility="visible";
  }
  function ChangeColor(Color)
  {
    var ColorChanged=document.getElementById(ColorID);
    ColorChanged.style.backgroundColor=Color;
    var colorPicker=document.getElementById("ColorPickerPlacer");
    colorPicker.style.visibility="hidden";
  }
*/ ?>
