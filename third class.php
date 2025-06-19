<!DOCTYPE html>
<html>
<body>

<?php  

$i = 1;
$sum=0;
do{
   if($i%2!=0){
      echo $i.'<br>';
      $sum=$sum+$i;
   }
   $i++;
}while($i <= 100);

echo "The Total is:".$sum;
?>  

</body>
</html>