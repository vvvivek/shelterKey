<?php include 'header.php'; ?>


<body>
       <!--- Nav Starts Here        -->
  <?php include 'nav.php'; ?>
    <!--- Nav Ends Here        -->
    <!--- Jumbotrain Starts Here        -->
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Best Flat, PG &amp; Vacation Rentals</h1>
            <p>ShelterKey</p>
            <a class="btn btn-primary btn-lg">Start Now!</a>
        </div>
    </div>
    <!--- Jumbotrain Ends Here        -->
    <form action="http://localhost/ShelterKeyWebSite/php/flatmates1.php" method="post" class="form-ui">
        <div class="form-horizontal">
            <label for="">I'm/We're</label>
        <input type="radio" name="person" value="Male" checked>Male
        <input type="radio" name="person" value="Female">Female
        <input type="radio" name="person" value="Group">Group
        <input type="radio" name="person" value="Couple">Couple
        <br> <label for="">Should be</label> 
        <input type="radio" name="tenant" value="Working">Working
        <input type="radio" name="tenant" value="Student">Student
        <br>
         <label for="">Location:</label>
        <input type="text" name="location">
        <br>  <label for="">Room Type</label>
        <input type="radio" name="room" value="Sharing">Sharing
        <input type="radio" name="room" value="Single">Single
        <br> <label for="">Duration of Stay:</label>
        
        <input type="radio" name="stay" value="LongTerm">LongTerm
        <input type="radio" name="stay" value="ShortTerm">ShortTerm
        <br>  <label for="">Furnishing Type</label>
        <input type="radio" name="furnish" value="Unfurnished">Unfurnished
        <input type="radio" name="furnish" value="Semi-Furnished">Semi-furnished
        <input type="radio" name="furnish" value="Furnished">Furnished
        <br> <label for="">Rent:</label> 
        <input type="text" value="rent" name="rent">
        <br>  <label for="">Deposit:</label>
        <input type="text" value="Deposit" name="deposit">
         <br> <label for="">Moving Date:</label> 
        <input type="date" name="moving"><br>
          <label for="">Easy with: Smoking:</label>
        <input type="radio" name="smoking" value="Yes">Yes
        <input type="radio" name="smoking" value="No">No
        <br>  <label for="">Overnight:</label>
        <input type="radio" name="overnight" value="Yes">Yes
        <input type="radio" name="overnight" value="No">No
        <br>  <label for="">Drinking:</label>
        <input type="radio" name="drinking" value="Yes">Yes
        <input type="radio" name="drinking" value="No">No
        <br> <label for=""> Food Habit:</label>
        <input type="radio" name="food" value="Veg">Veg
        <input type="radio" name="food" value="no">No Constraint
        <br>
         <label for="">Other Details:</label>
        <input type="text" name="other">
        <br>  <label for="">Contact Details: Name:</label>
        <input type="text" name="name" >
        <br> <label for="">Contact Number:</label> 
        <input type="text"  name="mobile">
        <br> <label for="">Email:</label> 
        <input type="email" name="email">
        <br> <label for="">Preferred time to call:</label> 
        <input type="time" name="time">
       
        <br>
        <input type="submit" value="Submit">
        </div>
        
    </form>
</body>
<footer>
    <ul>
    <li><a href="../footer/privacy.html">Privacy</a>
    </li>
    <li><a href="../footer/terms.html">Terms and Conditions</a>
    </li>
    <li><a href="../footer/feedback.html">Send Feedback</a>
    </li>
</ul>
</footer>

</html>