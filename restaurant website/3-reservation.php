<!DOCTYPE html>
<html>
  <head>
    <title>
      RESERVATION PAGE
    </title>
    <link href="3-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="restaurant1.css">
    <style>
      #resForm{
        background: url("cuttlery.jpg") ;
      }
      .back{
        background-image: url("cuttlery2.jpg") ;
        background-size:cover;
        background-repeat: no-repeat;
      }
      label{
        color: white;
      }
    </style>
  </head>
  <body>
    <?php
    // (A) PROCESS RESERVATION
    if (isset($_POST['date'])) {
      require "2-reserve.php";
      if ($_RSV->save(
        $_POST['date'], $_POST['slot'], $_POST['name'],
        $_POST['email'], $_POST['tel'], $_POST['notes'])) {
        echo "<div class='ok'>Reservation saved.</div>";
      } else { echo "<div class='err'>".$_RSV->error."</div>"; }
    }
    ?>

    <!-- (B) RESERVATION FORM -->
    <div class = "back">

    
    <nav>
        <img class="logo" src="logo2.jpg" alt="" width="250" height="100">
        <ul>
           <li><a href="restaurant1.html">Home </a></li>
           <li><button>Contact US</button> </li>
            <script src="script.js"></script></li>
            <script src="script.js"></script>
           <li><a href="https://localhost/3-reservation.php">Book a Table </a></li>
           <li><a href="aboutus.html">About US</a></li>
           
        </ul>
    </nav>
    
    <center>
    <h1>RESERVATION</h1>
    <form id="resForm" method="post" target="_self">
      <label for="res_name">Name</label>
      <input type="text" required name="name" placeholder="John Doe"/>
      <label for="res_email">Email</label>
      <input type="email" required name="email" placeholder="john@doe.com"/>
      <label for="res_tel">Telephone Number</label>
      <input type="text" required name="tel"placeholdere="123456789"/>
      <label for="res_notes">Notes (if any)</label>
      <input type="text" name="notes" placeholder="Testing"/>
      <label>Reservation Date</label>
      <input type="date" required id="res_date" name="date" placeholder="<?=date("Y-m-d")?>">
      <label>Reservation Slot</label>
      <select name="slot">
        <option value="AM">AM</option>
        <option value="PM">PM</option>
      </select>
      <input type="submit" value="Submit"/>
      </center>
    </form>
    <footer>
                <a href="FAQ.html">FAQ</a>
                <a href="termsofuse.html">Terms of Use</a>
                <a href="privacypolicy.html">Privacy Policy</a>
               <a href="#">&copy; Chowkdi</a>
                </footer>
    </div>     
  </body>
</html>