<!DOCTYPE html>
<?php
  include 'Templates/TableRow.php';
  include 'PHP/FindAllPictures.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fun Start</title>
     <link rel="stylesheet" href="Css/Form.css">
  </head>
  <body>
    <style>

</style>
<?php
$images = dirToArray("Collection");
$models = HowManyPicturesOfModel($images);
 ?>


<table id="Table" >
  <tr >
    <th style="width:20%;">Image</th>
    <th style="width:5%;">Model</th>
    <th style="width:5%;">Main</th>
    <th style="width:5%;">Color</th>
    <th style="width:5%;">Linejka</th>
    <th style="width:10%;">cattegory</th>
    <th style="width:10%;">cattegory2</th>
    <th style="width:20%;">Size</th>
    <th style="width:20%;">Attributes</th>
  </tr>

<?php

$currentRow = 1;
foreach ($models as $value)
{
  if ($currentRow == 1)
  {
    $ModelImage = array();
    for ($i=0; $i < $value ; $i++)
    {
      array_push($ModelImage, "Collection/".$images[$i]);
    }
    AddModelRow($ModelImage,$currentRow);
    // echo implode("<br>", $ModelImage);
    // echo("***************" . $value);
    $currentRow++;
  }
  else
  {
    $StartingValue=0;
    $ModelImage = array();

    for ($i=0; $i < $currentRow-1 ; $i++)
    {
      $StartingValue = $StartingValue + $models[$i];
    }
        // echo "<br>-------------StartingValue" .$StartingValue."<br>" ;
        //echo "<br>-------------Value" .$value."<br>" ;
    for ($i=$StartingValue; $i < $StartingValue+$value ; $i++)
    {
      array_push($ModelImage, "Collection/".$images[$i]);
    }
    // echo implode("<br>", $ModelImage);
    // echo("***************".$value);
    AddModelRow($ModelImage,$currentRow);

    $currentRow++;
  }

}
?>



</table>



    <div id="botom" class="fixed">
      <ul style="display: inline;">
        <li style="display: inline;"> <input id="SaveButton" class="button" type="Button" name="Save" onclick="save()" value="Save"> </li>
        <li style="display: inline;"> <input id="LoadButton" class="button" type="Button" name="Load" value="Load"> </li>
        <li style="display: inline;"> <input id="PostButton" class="button" style="float:right; margin-right: 55px" type="Button" name="Import" value="Import"> </li>
      </ul>
    </div>

  </body>


  <script type="text/javascript">

function CheckCheckBoxes(Checked)
      {
        if (Checked.checked  == true)
          {
            checkedID=Checked.id;
            CheckedGroup=Checked.id.slice(0,Checked.id.indexOf('_'));
            console.log(CheckedGroup);
            for (var i = 1; i < 10; i++)
              {
                if (CheckedGroup+"_"+i != checkedID)
                {
                  if (document.getElementById(CheckedGroup+"_"+i) != null)
                  {
                    document.getElementById(CheckedGroup+"_"+i).disabled = true;
                  }
                }
              }
              console.log("checked");
          }
        else
          {
            EnableAllCheckboxesInGroup(CheckedGroup,3);
          }
      }
function EnableAllCheckboxesInGroup(CheckedGroup,ammountInGroup)//ammountInGroup take from array with all values
      {
        for (var i = 1; i < ammountInGroup+1; i++)
        {
          document.getElementById(CheckedGroup+"_"+i).disabled = false;
        }
      }
function SelectImage(SelectedImage)
      {
        if (SelectedImage.classList.contains("selectedImage"))
        {SelectedImage.classList.remove("selectedImage")}
        else
        {SelectedImage.classList.add("selectedImage");}
      }

function UpdateSelected(selected)
{
  console.log(selected);
  console.log(selected.value)
}
function addValues(number,options_node)
      {
        for (var i = 0; i < number; i++)//use array that has all the values
        {
          var node = document.createElement("option");
          var textnode = document.createTextNode(i);
          node.appendChild(textnode);
          options_node.appendChild(node);
        }
      }
function modelsave2(b)
{
  return new Promise(function(resolve, reject)
  {
    var a = document.getElementById(`NODE${b}_1`);
    if (a == null){}
    else
      {
        tempobject = [];
        for (var i = 1; i < 10; i++)
        {
            modelsave(i,b).then(
              resolved=>
                {tempobject.push(resolved);}
              ,rejected =>
                {}
              );
        }
        resolve(tempobject);
      }
  });
}

function  saveSize(i)
{
  return new Promise(function(resolve,reject)
    {
      var SizeArray = document.getElementById(`Size_${i}`).getElementsByTagName('img');
      var AttributeResult = [];
      for (var i = 0; i < SizeArray.length; i++)
        {
          SizeResult.push(SizeArray[i].classList.contains("selectedImage"));
        }
        resolve(SizeResult);
    });
}
function saveAttributes(i)
{
  return new Promise(function(resolve,reject)
    {
  var AttributeArray = document.getElementById(`Attributes_${i}`).getElementsByTagName('img');
  var SizeResult = [];

  for (var i = 0; i < AttributeArray.length; i++)
    {
      AttributeResult.push(AttributeArray[i].classList.contains("selectedImage"));
    }
    resolve(AttributeResult);
      });
}

function  modelsave(i,b)
{
  return new Promise(function(resolve, reject)
      {
        var a = document.getElementById(`NODE${b}_${i}`);
        if (a != null)
        {
          if (i == 1)
            {
                  var imagePath = a.childNodes[1].getElementsByTagName('img')[0].getAttribute('src');
                  var ModelNumber = document.getElementById(`Model_${b}`).value;
                  var isMain = document.getElementById(`Main${b}_1`).checked;
                  var Color = document.getElementById(`ColorNode_${b}_${i}`).value;
                  var Linejka = document.getElementById(`Linejka_${b}`).value;
                  var Cattegory = document.getElementById(`Cattegory_${b}`).value;
                  var Cattegory2 = document.getElementById(`Cattegory_${b}_2`).value;
                  var array =[ModelNumber,imagePath,isMain,Color,Linejka,Cattegory,Cattegory2]
            }
          else
            {
              var ModelNumber = document.getElementById(`Model_${b}`).value;
              var imagePath = a.childNodes[1].getElementsByTagName('img')[b-1].getAttribute('src');
              var isMain = document.getElementById(`Main${b}_1`).checked;
              var Color = document.getElementById(`ColorNode_${b}_${i}`).value;
              var array = [ModelNumber,imagePath,isMain,Color];
            }
            resolve(array);
          }
          else{reject(null);}
      });
}
function  a(FinishedObject, b)
{
  return new Promise(function(resolve,reject)
{
  modelsave2(b).then(resolved=>{FinishedObject[b] = resolved; resolve(FinishedObject);});
});
}
function save()
{
  /*
  var FinishedObject = [];
  for (var b = 1; b < 200; b++)
    {
FinishedObject = a(FinishedObject,b);
if (b == 130)
{
  console.log(FinishedObject);
}
}*/
var file = new File([document.getElementById('Table').outerHTML], "test");
var formData = new FormData(),
    xhr = new XMLHttpRequest();

formData.append('file', file);
xhr.open('POST', 'aaa.php');
xhr.send(formData);

}



/*
model detail
model id | model name | model cattegory | model podcattegory|

model id = parsing counter ;
model name = node1_1 textbox;
model cattegory = selected

model sizes
model id| Size

model attributes
model id| attribute

model images
model image id | model id | model image path | model image color1|- 2|- 3|- 4| Model image main?|
*/
  </script>



</html>
