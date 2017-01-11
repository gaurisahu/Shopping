<?php
$item_no=$_REQUEST['item_no'];

   $sel=mysql_query("select * from gallery where item_no='$item_no'",$cn) or die(mysql_error());
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['item_no'];
      echo "<br><form method='post'>
	  <center><h2><font face='Lucida Handwriting' size='+1' color='#CC99CC'>".$arr['description']."</font></h2><br><br>
	<fieldset style='width:80%'><table border='0' >";
  
   echo "<tr>";
   ?>
   <tr><td><img src='<?php echo $arr['image']; ?>' height='300' width='300'></td>
   <?php
   "<td><b><font face='Comic sans MS' size='+1'>Item No:</b>".$arr['item_no'].
   "<br><b>Price:</b>Rs&nbsp;".$arr['price'].
   "<br><b>Product Details:<br></b>".$arr['description'].
   " </font><br><br><a href='index.php?con=12 & item_no=$i'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>  </td>
   </tr></table></fieldset></center>";
    }
	/*$item_no=$_REQUEST['item_no'];

   $rs=mysql_query("select * from gallery where item_no='$item_no'",$cn) or die(mysql_error());
    while($row=mysql_fetch_array($rs))
   {
   $i=$row['item_no'];
      echo "<br><form method='post'>
	  <center><h2><font face='Lucida Handwriting' size='+1' color='#CC99CC'>".$row['description']."</font></h2><br><br>
	<fieldset style='width:80%'><table border='0' >";
  
   echo "<tr>";
   ?>
   <tr><td><img src='<?php echo $row['image'] ?>' height='300' width='300'></td>
   <?php
   "<td><b><font face='Comic sans MS' size='+1'>Item No:</b>".$row['item_no'].
   "<br><b>Price:</b>Rs&nbsp;".$row['price'].
   "<br><b>Product Details:<br></b>".$row['description'].
   " </font><br><br><a href='index.php?con=18 & item_no=$i'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>  </td>
   </tr></table></fieldset></center>";
    }*/
?>