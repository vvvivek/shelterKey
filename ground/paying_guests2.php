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
    <form action="http://localhost/ShelterKeyWebSite/php/pg2.php" method="post" class="form-ui">
       <div class="form-horizontal">
            <label for=""> You are</label>
        <input type="radio" name="person" value="Individual" checked>Individual
        <input type="radio" name="person" value="Broker">Broker
        <br><label for="">Property Types </label> 
        <input type="radio" name="property" value="Apartment" checked> Apartment
        <input type="radio" name="property" value="individual_house"> Individual House
        <br><label for="">Area </label> 
        <input type="radio" name="area" value="Mumbai" checked> Mumbai
        <input type="radio" name="area" value="Navi_Mumbai"> Navi Mumbai
        <input type="radio" name="area" value="Thane" checked> Thane
        <input type="radio" name="area" value="Suburb"> Suburb
        <br><label for="">Location: </label> 
        <input type="text" name="location">
        <br><label for="">Bedroom: </label> 
        <select name="bedroom">
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
        </select>
        <br><label for=""> Bathroom:</label> 
        <select name="bathroom">
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
        </select>
        <br><label for=""> Available for: </label>
        <input type="radio" name="available" value="Male">Male
        <input type="radio" name="available" value="FeMale">FeMale
        <input type="radio" name="available" value="Both">Both
        <br> <label for="">Profession: </label>
        <input type="radio" name="profession" value="Student">Student
        <input type="radio" name="profession" value="Working">Working
        <br> <label for=""> Status of Flat:</label>
        <input type="radio" name="status" value="Furnished" checked> Furnished
        <input type="radio" name="status" value="Unfurnished"> Unfurnished
        <input type="radio" name="status" value="semi_furnished"> Semi Furnished Parking:
        <br><label for="">Floor: </label> 
        <input type="text" name="floor">
        <br><label for="">Available from: </label> 
        <input type="date" name="date">
        <br><label for="">Rent: </label> 
        <input type="text" name="rent">
        <br> <label for="">Other Details: </label>
        <input type="text" name="details">
        <br> <label for=""> Minimum Stay: </label>
        <input type="text" name="stay">
        <br><label for="">Preference: Smoking: </label> 
        <input type="radio" name="smoking" value="Yes">Yes
        <input type="radio" name="smoking" value="No">No
        <input type="radio" name="smoking" value="while">For a While
        <br> <label for=""> Overnight:</label>
        <input type="radio" name="overnight" value="Yes">Yes
        <input type="radio" name="overnight" value="No">No
        <input type="radio" name="overnight" value="while">For a While
        <br><label for=""> Drinking</label> 
        <input type="radio" name="drinking" value="Yes">Yes
        <input type="radio" name="drinking" value="No">No
        <input type="radio" name="drinking" value="while">For a While
        <br> <label for="">Food Habit: </label>
        <input type="radio" name="food" value="Veg">Veg
        <input type="radio" name="food" value="NonVeg">NonVeg
        <input type="radio" name="food" value="no">No Constraint
        <br> <label for="">Description: </label>
        <input type="text" name="description">
       
        <br><label for="">Contact Details: Name: </label> 
        <input type="text" name="name">
        <br> <label for="">Contact Number: </label>
        <input type="text" name="mobile">
        <br> <label for="">Email: </label>
        <input type="email" name="email">
        <br> <label for="">Preferred time to call: </label>
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