<?php
// $a=array(0);
// echo "<pre>";

for($i=0;$i<100;$i++)
{
    $a[$i]=0;
}
// print_r($a);
for($i=0;$i<100;$i++)
{
   // $count=count($a);
 for($j=$i-1;$j>=0;$j--)
 {
     if($a[$i]==$a[$j])
     {
         $a[$i+1]=$i-$j;
         // array_push($a,($i-$j));
        break;
       
     }
     else
     {
        $a[$i+1]=0;
       //  array_push($a,0);
     }
 }

}
echo "<pre>";
print_r($a);
// $a=array("red","green");
// array_push($a,"blue","yellow");

?>
