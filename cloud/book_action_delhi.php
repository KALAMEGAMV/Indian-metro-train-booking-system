
<?php

include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];
$type = $_POST['type'];
$no = $_POST['number'];

if ($source == $dest)
{
  echo"<h1><center>Selected source and destination same , Please refill the details  </center></h1><br><br>";
  echo'<center>

';
}
else{
	echo "<h1><center><b><img src=https://img.icons8.com/cotton/80/000000/route.png/>SELECT ROUTE AND PROCEED TO CHECKOUT :</center></b></h1>";
$sql_price_delhi="SELECT * FROM `price_delhi` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `type` LIKE '$type'";
$result = $connect->query($sql_price_delhi);

while($row = $result->fetch_assoc()){
$final = $row["Price"] ;
$Route = $row["Route"];
$final=$final*$no;
echo "  <br><br><br><h1><center>Total <b> ".$type."</b> Journey type fare from <b>".$source." to ".$dest."</b> is  : ₹ <b>".$final."</b> and route via <b>".$source." ".$Route." ".$dest."</b></center></h1><br><br>";
echo'<center>
<td><form action="pay.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Checkout</h3></span></a></td></button></form>
';
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['Type']=$type;
$_SESSION['NoOfpass']=$no;
$_SESSION['Route']=$source.$Route.$dest;


}

?>
<br>
<br>
<br>
<br>
<center>
<td><form action="book_delhi.php"><button style="background-color: black; padding: 28px 80px; type="submit"; align=center;"><span style=color:white;><h3>Go back</h3></span></a></td></button></form><br><br>

<?php include 'footer.php';
?> 