<?php
/*
Color node
<td id=\"ColorNode_{$currentModel}_1\" onmouseover=\"AddPlusik(this,2)\" onmouseout=\"AddPlusik(this,1)\">
  <input type=\"button\" onclick=\"AddColor(this.parentNode)\" name=\"+\" value=\"+\" style=\"visibility:collapse; \">
  <input type=\"button\" onclick=\"RemoveColor(this.parentNode)\" name=\"-\" value=\"-\" style=\"visibility:collapse;\">
  <div id=\"Color{$currentModel}_{$RowNumber}&1\" class=\"Colorblock\" onclick=\"showColorPicker(this.id)\"></div>
</td>
<td id=\"ColorNode_{$currentModel}_{$RowNumber}\" onmouseover=\"AddPlusik(this,2)\" onmouseout=\"AddPlusik(this,1)\">
  <input type=\"button\" onclick=\"AddColor(this.parentNode)\" name=\"+\" value=\"+\" style=\"visibility:collapse; \">
  <input type=\"button\" onclick=\"RemoveColor(this.parentNode)\" name=\"-\" value=\"-\" style=\"visibility:collapse;\">
  <div id=\"Color_{$currentModel}_{$RowNumber}&1\" class=\"Colorblock\" onclick=\"showColorPicker(this.id)\"></div>
</td>
*/

function AddModelRow($images, $currentModel)
{
  $AmmountOfPictures = count($images);
  $RowNumber = 1;
  $ModelName =substr($images[0],11,4);
  if (strpos($images[0], "_")!=-1)
  {
    $ModelColor =substr($images[0],16,-4);
  }
  else
  {
    $ModelColor =substr($images[0],-5,-4);
  }
    print
    "
    <tr id=\"NODE{$currentModel}_1\">
      <td class=\"colcenter\"><img src=\"{$images[0]}\" alt=\"\"> </td>
      <td rowspan=\"{$AmmountOfPictures}\"class=\"colcenter\"><input id=\"Model_{$currentModel}\" type=\"text\" name=\"Model\" value=\"{$ModelName}\" style=\"width:40px;\"></td>
      <td>
          <label class=\"switch\">
             <input id=\"Main{$currentModel}_1\" type=\"checkbox\" onchange=\"CheckCheckBoxes(this)\">
             <span class=\"slider\"></span>
          </label>
      </td>
      <td > <input id=\"ColorNode_{$currentModel}_1\" type=\"text\" value=\"{$ModelColor}\"> </td>
      <td rowspan=\"{$AmmountOfPictures}\"class=\"colcenter\">
          <input id=\"Linejka_{$currentModel}\" type=\"text\" name=\"\" value=\"\">
      </td>
      <td rowspan=\"{$AmmountOfPictures}\"class=\"colcenter\">
          <select onchange=\"UpdateSelected(this)\"  id=\"Cattegory_{$currentModel}\" class=\"soflow\">
            <option disabled>Choose cattegory</option>
            <option value=\"1\">Bikini</option>
            <option value=\"2\">One piece</option>
            <option value=\"3\">Beach wear</option>
          </select>
      </td>
      <td rowspan=\"{$AmmountOfPictures}\"class=\"colcenter\">
        <select onchange=\"UpdateSelected(this)\"  id=\"Cattegory_{$currentModel}_2\" class=\"soflow\">
        <option value=\"11\">Triangle</option>
        <option value=\"12\">Bandeau</option>
        <option value=\"13\">Underwired</option>
        <option value=\"31\">Beach dress</option>
        <option value=\"21\">Tankini</option>
        <option value=\"22\">monokini</option>
        </select>
       </div>
      </td>
      <td rowspan=\"{$AmmountOfPictures}\"class=\"colcenter\">
        <div id=\"Size_{$currentModel}\" class=\"CheckImages\">
        ";
           include 'Templates/Sizes.html';
        print
        "
        </div>
      </td>
        <td rowspan=\"{$AmmountOfPictures}\"class=\"colcenter\">
        <div id=\"Attributes_{$currentModel}\" class=\"CheckImages\">
        ";
          include 'Templates/Attributes.html';
          print
    "
        </div>
      </td>
    </tr>
    ";

  $RowNumber= $RowNumber+1;

  for ($RowNumber; $RowNumber < $AmmountOfPictures+1 ; $RowNumber++)
      {
        if (strpos($images[$RowNumber-1], "_")!=-1)
        {
          $ModelColor =substr($images[$RowNumber-1],16,-4);
        }
        else
        {
          $ModelColor =substr($images[$RowNumber-1],-5,-4);
        }

        print
        "
        <tr id=\"NODE{$currentModel}_{$RowNumber}\">
          <td class=\"colcenter\"><img src=\"{$images[$RowNumber-1]}\" alt=\"\"> </td>
          <td>
             <label class=\"switch\">
               <input id=\"Main{$currentModel}_{$RowNumber}\" type=\"checkbox\" onchange=\"CheckCheckBoxes(this)\">
               <span class=\"slider\"></span>
            </label>
           </td>
          <td >  <input id=\"ColorNode_{$currentModel}_{$RowNumber}\" type=\"text\" value=\"{$ModelColor}\"> </td>
        </tr>
        ";
      }
}
  ?>
