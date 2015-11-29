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
    <form action="http://localhost/ShelterKeyWebSite/php/flatmates2.php" method="post" class="form-ui">
           <div class="form-horizontal">
            <label for=""> Looking for</label>  
           <input type="radio" name="identity" value="Male">Male
           <input type="radio" name="identity" value="Female">Female
           <br>
           <label for=""> Should be</label> 
           <input type="radio" name="tenant" value="Working">Working
           <input type="radio" name="tenant" value="Student">Student
           <br>
           <label for="">  Room Type</label>
           <input type="radio" name="room" value="Sharing">Sharing
           <input type="radio" name="room" value="Single">Single
            <br>
             <label for="">Flat Type</label> 
            <input type="radio" name="flat" value="1HK">1HK
            <input type="radio" name="flat" value="2HK">2HK
            <input type="radio" name="flat" value="1BHK">1BHK
            <input type="radio" name="flat" value="1.5BHK">1.5BHK
            <input type="radio" name="flat" value="2BHK">2BHK
            <br>
             <label for="">Furnishing Type</label> 
            <input type="radio" name="furnish" value="Unfurnished">Unfurnished
            <input type="radio" name="furnish" value="Semi-Furnished">Semi-furnished
            <input type="radio" name="furnish" value="Furnished">Furnished
            <br>
            <label for=""> Price:</label> 
            <input type="text" name="price">
            <br>
            <label for=""> Deposit:</label> 
            <input type="text" name="deposit">
            <br>
            <label for="">Available from</label>  
            <input type="date" name="date">
            <br>
            <label for=""> Minimum Stay:</label> 
            <input type="text" name="stay">
            <br>
            <label for="">Address:</label>  
            <input type="text" name="address">
            <br>
             <label for="">Landmark:</label> 
            <input type="text" name="landmark">
            <br>
            <label for="">Preference:</label>  
             <label for="">Smoking:</label> 
            <input type="radio" name="smoking" value="Yes">Yes
            <input type="radio" name="smoking" value="No">No
            <input type="radio" name="smoking" value="while">For a While
            <br>
             <label for="">Overnight:</label>  
            <input type="radio" name="overnight" value="Yes">Yes
            <input type="radio" name="overnight" value="No">No
            <input type="radio" name="overnight" value="while">For a While
            <br>
            <label for=""> Drinking:</label>  
            <input type="radio" name="drinking" value="Yes">Yes
            <input type="radio" name="drinking" value="No">No
            <input type="radio" name="drinking" value="while">For a While
            <br>
             <label for=""> Food Habit:</label> 
            <input type="radio" name="food" value="Veg">Veg
            <input type="radio" name="food" value="NonVeg">NonVeg
            <input type="radio" name="food" value="no">No Constraint 
            <br>
            <label for="">Description:</label>  
            <input type="text" name="description">
          
            
            <br> <label for=""> Contact Details: Name:</label> 
            <input type="text" name="name">
            <br> <label for=""> Contact Number:</label> 
            <input type="text" name="mobile">
            <br> <label for="">  Email:</label>
            <input type="email" name="email">
            <br>  <label for="">Preferred time to call:</label> 
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