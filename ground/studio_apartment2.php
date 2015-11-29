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
    <form action="http://localhost/ShelterKeyWebSite/php/studio2.php" method="post" class="form-ui">
        <div class="form-horizontal">
           <label for="">I'm/We're</label>
               <input type="radio" name="person" value="Male" checked>Male
        <input type="radio" name="person" value="Female">Female
        <input type="radio" name="person" value="Group">Group
        <input type="radio" name="person" value="Couple">Couple
        <br>  <label for="">Area</label> 
        <input type="radio" name="area" value="Mumbai" checked> Mumbai
        <input type="radio" name="area" value="Navi_Mumbai"> Navi Mumbai
        <input type="radio" name="area" value="Thane" checked> Thane
        <input type="radio" name="area" value="Suburb"> Suburb
        <br>  <label for="">Preferred Location:</label>
        <input type="radio" name="location" value="Master" checked> Master
        <br> <label for=""> Built-Up Area :</label>
        <input type="text" name="built_area">
        <br> <label for="">Bedroom:</label> 
        <select name="bedroom">
            <option value="One">One</option>
        </select>
        <br>  <label for="">Bathroom:</label>
        <select name="bathroom">
            <option value="One">One</option>
        </select>
             <br>
               <label for="">Minimum Period:</label>
              <input type="radio" name="period" value="3Month">3 Month
              <input type="radio" name="period" value="6Month">6 Month
              <input type="radio" name="period" value="12Month">12 Month
            <br> <label for=""> Parking</label>
            <input type="radio" name="parking" value="No" checked> No
            <input type="radio" name="parking" value="Yes"> Yes
            <br>  <label for="">Required from</label>
            <input type="date" name="required">
            <br>  <label for="">Set your Price:</label>
            <input type="text" name="price">
            <br> <label for="">Other Requirements:</label> 
            <input type="text" name="requirements">
            <br>
            <br>  <label for="">Contact Details: Name:</label>
            <input type="text" name="name">
            <br>  <label for="">Contact Number:</label>
            <input type="text" name="mobile">
            <br>  <label for="">Email:</label>
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