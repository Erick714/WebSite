
<?php

function dirToArray($dir)
{
   $result = array();
   $cdir = scandir($dir);
   foreach ($cdir as $key => $value)
   {
      if (!in_array($value,array(".","..")))
      {
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
         {
            $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
         }
         else
         {
            $result[] = $value;
         }
      }
   }   return $result;
}

function HowManyPicturesOfModel($AllPictures)
{
  $result = array();
  $currentModel=0;
  $tempAmmount=0;
  $temp =substr($AllPictures[0],0,4);
  for ($i=0; $i <sizeof($AllPictures) ; $i++)
  {
    if ($temp == substr($AllPictures[$i],0,4))
    {
      $tempAmmount++;
    }
    else
    {
      array_push($result,$tempAmmount);
      $tempAmmount=1;
      $currentModel= $currentModel+1;
      $temp =substr($AllPictures[$i],0,4);
    }
  }
   return $result;
}

 ?>

<?php
// $result = dirToArray("Collection");
// echo implode("<br> images/Attributes/", $result);
// $result2 = HowManyPicturesOfModel($result);
// echo implode("<br>",$result2);
 ?>
