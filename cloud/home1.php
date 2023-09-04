<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>


<style >
  .container{
        border-spacing: 10px;
        background-color: burlywood;
      font-family: Montserrat, sans-serif;
     font-size: 20px !important;
       padding-top: 50px;
      padding-right: 100px;
      padding-bottom: 50px;
      padding-left: 100px;
      align-content: center;

    }
</style>

<html>
<head>
<link rel='stylesheet' href='index.css'>
<br><br>
  <h1   text-transform: capitalize;><center><b><img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/> Welcome  <?php  echo " ". $_SESSION['name'] ."" ?> To M-Ticket Booking Portal <img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/></center></b></h1>

<div class="container">
  <h3 align="justify">Metro trains are one of the modern public transportation facilities. Most people travel by metro train to reach their destination faster. Since it is the cheapest and most convenient mode of transport, people rely on it. In this essay on metro train, we will see the experience of travelling in a metro train and understand its importance.</h3>

  <h3 align="justify">To reduce your valuable time we connected all the Metro ticketing system in this Portal.</h3>

  <h3>HAPPY JOURNEY..! :)</h3>

</div>
<?php include 'footer.php';
?> 

</html>