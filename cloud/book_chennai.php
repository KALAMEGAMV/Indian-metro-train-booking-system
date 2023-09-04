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
  <h1><center><b><img src="https://img.icons8.com/bubbles/80/000000/train.png"/>Welcome To Chennai Metro&nbsp<img src="https://img.icons8.com/officel/56/000000/tracks-intersection.png"/></center></b></h1>
 <form method='post' action ='book_action_chennai.php' align='center'>






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
      <option>AG-DMS</option>
      <option>Airport</option>
      <option>Anna Nagar East</option>
      <option>Anna Nagar Tower</option>
      <option>Arignar Anna Alandur</option>
      <option>Arumbakkam</option>
      <option>Ashok Nagar</option>
      <option>Egmore Metro</option>
      <option>Ekkattuthangal</option>
      <option>Government Estate</option>
      <option>Guindy</option>
      <option>High Court</option>
      <option>Kaladipet Metro</option>
      <option>Kilpauk</option>
      <option>Koyambedu</option>
      <option>LIC</option>
      <option>Little Mount</option>
      <option>Mannadi</option>
      <option>Meenambakkam</option>
      <option>Nandanam</option>
      <option>Nanganallur</option>
      <option>Nehru Park</option>
      <option>New Washermenpet Metro</option>
      <option>Pachaiyappa</option>
      <option>Dr.M.G.Ramachandran Central Metro</option>
      <option>Puratchi Thalaivi Dr.J.Jayalaithaa CMBT Metro</option>
      <option>Saidapet Metro</option>
      <option>Shenoy Nagar</option>
      <option>St. Thomas Mount</option>
      <option>Teynampet</option>
      <option>Thirumangalam</option>
      <option>Thiruvotriyur Metro</option>
      <option>Thiruvottriyur Theradi Metro</option>
      <option>Thiyagaraya College Metro</option>
      <option>Thousand Light</option>
      <option>Tollgate Metro</option>
      <option>Tondiarpet Metro</option>
      <option>Vadapalani</option>
      <option>Washermenpet</option>
      <option>Wimco Nagar Depot Station</option>
      <option>AG - DMS</option>
      <option>Wimco Nagar Metro</option>      
    
        </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>             


   



          <div class="form-group col-md-5" name="dest">
      <label for="inputPassword4"> 
FINAL DESTINATION :</label>
      <select id="inputState" class="form-control" name="dest">

      <option>- Select -</option>
      <option>AG-DMS</option>
      <option>Airport</option>
      <option>Anna Nagar East</option>
      <option>Anna Nagar Tower</option>
      <option>Arignar Anna Alandur</option>
      <option>Arumbakkam</option>
      <option>Ashok Nagar</option>
      <option>Egmore Metro</option>
      <option>Ekkattuthangal</option>
      <option>Government Estate</option>
      <option>Guindy</option>
      <option>High Court</option>
      <option>Kaladipet Metro</option>
      <option>Kilpauk</option>
      <option>Koyambedu</option>
      <option>LIC</option>
      <option>Little Mount</option>
      <option>Mannadi</option>
      <option>Meenambakkam</option>
      <option>Nandanam</option>
      <option>Nanganallur</option>
      <option>Nehru Park</option>
      <option>New Washermenpet Metro</option>
      <option>Pachaiyappa</option>
      <option>Dr.M.G.Ramachandran Central Metro</option>
      <option>Puratchi Thalaivi Dr.J.Jayalaithaa CMBT Metro</option>
      <option>Saidapet Metro</option>
      <option>Shenoy Nagar</option>
      <option>St. Thomas Mount</option>
      <option>Teynampet</option>
      <option>Thirumangalam</option>
      <option>Thiruvotriyur Metro</option>
      <option>Thiruvottriyur Theradi Metro</option>
      <option>Thiyagaraya College Metro</option>
      <option>Thousand Light</option>
      <option>Tollgate Metro</option>
      <option>Tondiarpet Metro</option>
      <option>Vadapalani</option>
      <option>Washermenpet</option>
      <option>Wimco Nagar Depot Station</option>
      <option>AG - DMS</option>
      <option>Wimco Nagar Metro</option>      
    
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