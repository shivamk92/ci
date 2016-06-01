

 <?php
 $number = 6;                   /*number to get factorial */
 $fact   = 1;
 for($k=1;$k<=$number;++$k)    
       {
          $fact =  $fact*$k;
       }
 echo "Factorial of $number is ".$fact;
 
 
?> 
<?php
 if(isset($_POST['sub']))
 {
   $rows=$_POST['row'];
   for($i=$rows;$i>=1;--$i)
     {
         for($j=1;$j<=$i;++$j)
         {
            echo $j;
         }
     echo "<br />";
     }
 }
 ?>
 <table>
 <form method="post" name="frm" action="">
 <tr>    <td>Enter Number of rows:</td>    <td><input type="text" name="row" /></td> </tr>
 <tr><td></td>      <td><input type="submit" name="sub" /></td> </tr>
 </form>
 </table>