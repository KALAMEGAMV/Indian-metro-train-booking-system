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
  <h1><center><b><img src="https://img.icons8.com/bubbles/80/000000/train.png"/>Welcome To Bangalore Metro&nbsp<img src="https://img.icons8.com/officel/56/000000/tracks-intersection.png"/></center></b></h1>
 <form method='post' action ='book_action_bangalore.php' align='center'>






<div class="container">
<section id="form" class="formborder">
<div class="container2">
       <form>
        


       <div class="form-row row justify-content-around" name="source">
  &nbsp

       <div class="form-group col-md-5" name="source">
       <label for="inputEmail4">SOURCE STATION :</label>    
       <select id="inputState" class="form-control" name="source">

      <option>- Please Select -</option>
            <option>Baiyappanahalli</option>
            <option>Swami Vivekananda Road</option>
            <option>Indiranagar</option>
            <option>Halasuru</option>
            <option>Trinity</option>
            <option>Mahathma Gandhi Road</option>
            <option>Cubbon Park</option>
            <option>Dr. B. R. Ambedkar Stn., Vidhana Soudha</option>
            <option>Sir M Visveswaraya Station, Central College</option>
            <option>Nadaprabhu Kempegowda Station, Majestic</option>
            <option>Krantivira Sangolli Rayanna Railway Station</option>
            <option>Magadi Road</option>
            <option>Sri Balagangadharanatha Swamiji Stn., Hosahalli</option>
            <option>Vijayanagar</option>
            <option>Attiguppe</option>
            <option>Deepanjali Nagar</option>
            <option>Mysore Road</option>
            <option>Nayandanahalli</option>
            <option>Rajarajeshwari Nagar</option>
            <option>Jnanabharathi</option>
            <option>Pattanagere</option>
            <option>Kengeri Bus Terminal</option>
            <option>Kengeri</option>
            <option>Nagasandra</option>
            <option>Dasarahalli</option>
            <option>Jalahalli</option>
            <option>Peenya Industry</option>
            <option>Peenya</option>
            <option>Goraguntepalya</option>
            <option>Yeshwantpur</option>
            <option>Sandal Soap Factory</option>
            <option>Mahalakshmi</option>
            <option>Rajajinagar</option>
            <option>Mahakavi Kuvempu road</option>
            <option>Srirampura</option>
            <option>Mantri Square Sampige Road</option>
            <option>Nadaprabhu Kempegowda Station, Majestic</option>
            <option>Chickpete</option>
            <option>Krishna Rajendra Market</option>
            <option>National College</option>
            <option>Lalbagh</option>
            <option>South End Circle</option>
            <option>Jayanagar</option>
            <option>Rashtreeya Vidyalaya Road</option>
            <option>Banashankari</option>
            <option>Jaya Prakash Nagar</option>
            <optio>Yelachenahalli</option>
            <option>Konanakunte Cross</option>
            <option>Doddakallasandra</option>
            <option>Vajarahalli</option>
            <option>Thalaghattapura</option>
            <option>Silk Institute</option>      
    
        </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>             


   



          <div class="form-group col-md-5" name="dest">
      <label for="inputPassword4"> 
FINAL DESTINATION :</label>
      <select id="inputState" class="form-control" name="dest">

      <option>- Please Select -</option>
        <option>Baiyappanahalli</option>
        <option>Swami Vivekananda Road</option>
        <option>Indiranagar</option>
        <option>Halasuru</option>
        <option>Trinity</option>
        <option>Mahathma Gandhi Road</option>
        <option>Cubbon Park</option>
        <option>Dr. B. R. Ambedkar Stn., Vidhana Soudha</option>
        <option>Sir M Visveswaraya Station, Central College</option>
        <option>Nadaprabhu Kempegowda Station, Majestic</option>
        <option>Krantivira Sangolli Rayanna Railway Station</option>
        <option>Magadi Road</option>
        <option>Sri Balagangadharanatha Swamiji Stn., Hosahalli</option>
        <option>Vijayanagar</option>
        <option>Attiguppe</option>
        <option>Deepanjali Nagar</option>
        <option>Mysore Road</option>
        <option>Nayandanahalli</option>
        <option>Rajarajeshwari Nagar</option>
        <option>Jnanabharathi</option>
        <option>Pattanagere</option>
        <option>Kengeri Bus Terminal</option>
        <option>Kengeri</option>
        <option>Nagasandra</option>
        <option>Dasarahalli</option>
        <option>Jalahalli</option>
        <option>Peenya Industry</option>
        <option>Peenya</option>
        <option>Goraguntepalya</option>
        <option>Yeshwantpur</option>
        <option>Sandal Soap Factory</option>
        <option>Mahalakshmi</option>
        <option>Rajajinagar</option>
        <option>Mahakavi Kuvempu road </option>
        <option>Srirampura</option>
        <option>Mantri Square Sampige Road</option>
        <option>Nadaprabhu Kempegowda Station, Majestic</option>
        <option>Chickpete</option>
        <option>Krishna Rajendra Market</option>
        <option>National College</option>
        <option>Lalbagh</option>
        <option>South End Circle</option>
        <option>Jayanagar</option>
        <option>Rashtreeya Vidyalaya Road</option>
        <option>Banashankari</option>
        <option>Jaya Prakash Nagar</option>
        <optio>Yelachenahalli</option>
        <option>Konanakunte Cross</option>
        <option>Doddakallasandra</option>
        <option>Vajarahalli</option>
        <option>Thalaghattapura</option>
        <option>Silk Institute</option>     
    
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