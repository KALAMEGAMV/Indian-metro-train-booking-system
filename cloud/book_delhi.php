<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<style>

    .container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 30px;
        margin-bottom: 50px;
       padding-top: 50px;
      padding-right: 50px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
    .button {
  padding: 15px 32px;
  align-content: left;
  color: white;
background-color:black;
    }
#number {
  overflow: hidden;
  width: 600px;
}
input[type=number]{
    width: 250px;
} 
  </style>


  </script>
</head>
<body>
  <h1><center><b><img src="https://img.icons8.com/bubbles/80/000000/train.png"/>Welcome To Delhi Metro&nbsp<img src="https://img.icons8.com/officel/56/000000/tracks-intersection.png"/></center></b></h1>
 <form method='post' action ='book_action_delhi.php' align='center'>






<div class="container">
<section id="form" class="formborder">
<div class="container2">
       <form>
        


       <div class="form-row row justify-content-around" name="source">
  &nbsp

       <div class="form-group col-md-5" name="source">
       <label for="inputEmail4">SOURCE STATION :</label>    
       <select id="inputState" class="form-control" name="source">

      <option>- Select -</option>
      <option>Shaheed Sthal(New Bus Adda)</option>
      <option>Hindon River</option>
      <option>Arthala</option>
      <option>Mohan Nagar</option>
      <option>Shyam park</option>
      <option>Major Mohit Sharma</option>
      <option>Raj Bagh</option>
      <option>Shaheed Nagar</option>
      <option>Dilshad Garden</option>
      <option>Jhil Mil</option>
      <option>Mansarovar Park</option>
      <option>Shahdara</option>
      <option>Seelampur</option>
      <option>Shastri Park</option>
      <option>Kashmere Gate</option>
      <option>Tis Hazari</option>
      <option>Pul Bangash</option>
      <option>Pratap Nagar</option>
      <option>Shastri Nagar</option>
      <option>Inderlok</option>
      <option>Kanhaiya Nagar</option>
      <option>Keshav Puram</option>
      <option>Netaji Subash Place</option>
      <option>Kohat Enclave</option>
      <option>Pitam Pura</option>
      <option>Rohini East</option>
      <option>Rohini West</option>
      <option>Rithala</option>
      <option>New Delhi-Airport Express</option>
      <option>Shivaji Stadium</option>
      <option>Dhaula Kuan</option>
      <option>Delhi Aerocity</option>
      <option>IGI Airport</option>
      <option>Dwarka Sector 21</option>
      <option>Kashmere Gate</option>
      <option>Central Secretariat</option>
      <option>Khan Market</option>
      <option>Jawaharlal Nehru Stadium</option>
      <option>Nehru Place</option>
      <option>Kalkaji Mandir</option>
      <option>Tughlakabad</option>
      <option>Udyog Nagar</option>
      <option>Akshardham</option>       
    
        </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>             


   



          <div class="form-group col-md-5" name="dest">
      <label for="inputPassword4"> 
FINAL DESTINATION :</label>
      <select id="inputState" class="form-control" name="dest">

      <option>- Select -</option>
      <option>Shaheed Sthal(New Bus Adda)</option>
      <option>Hindon River</option>
      <option>Arthala</option>
      <option>Mohan Nagar</option>
      <option>Shyam park</option>
      <option>Major Mohit Sharma</option>
      <option>Raj Bagh</option>
      <option>Shaheed Nagar</option>
      <option>Dilshad Garden</option>
      <option>Jhil Mil</option>
      <option>Mansarovar Park</option>
      <option>Shahdara</option>
      <option>Seelampur</option>
      <option>Shastri Park</option>
      <option>Kashmere Gate</option>
      <option>Tis Hazari</option>
      <option>Pul Bangash</option>
      <option>Pratap Nagar</option>
      <option>Shastri Nagar</option>
      <option>Inderlok</option>
      <option>Kanhaiya Nagar</option>
      <option>Keshav Puram</option>
      <option>Netaji Subash Place</option>
      <option>Kohat Enclave</option>
      <option>Pitam Pura</option>
      <option>Rohini East</option>
      <option>Rohini West</option>
      <option>Rithala</option>
      <option>New Delhi-Airport Express</option>
      <option>Shivaji Stadium</option>
      <option>Dhaula Kuan</option>
      <option>Delhi Aerocity</option>
      <option>IGI Airport</option>
      <option>Dwarka Sector 21</option>
      <option>Kashmere Gate</option>
      <option>Central Secretariat</option>
      <option>Khan Market</option>
      <option>Jawaharlal Nehru Stadium</option>
      <option>Nehru Place</option>
      <option>Kalkaji Mandir</option>
      <option>Tughlakabad</option>
      <option>Udyog Nagar</option>
      <option>Akshardham</option>  
    
    </select> 

      <!--<input type="password" class="form-control" id="inputPassword4" placeholder="TO">-->
  </div>
  
 
 
 <div class="form-group col-md-5" name="type">
    <label for="inputState">JOURNEY TYPE :</label>
    <select id="inputState" class="form-control" name="type">
    <option >Single</option>
    <option >Return</option>
    </select>
    </div>
   
    
      

       <div class="form-group col-md-3" >
       <center><label for="inputState"  ><h8>NO OF PASSENGERS :</h8></label></center>
      <center> <input type="number" name="number" required  min="1" max="5"  ></center>
       </div>
 
    <center><div class="form-group col-md-10" > 
     <br><button type="submit"    class="button" name="login_submit" >Proceed</button>
    </div>
</form>
</div>

</section>
</div>
  


<?php include 'footer.php';
?> 

</body>
</html>