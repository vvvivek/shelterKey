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
    <form action="http://localhost/ShelterKeyWebSite/php/service2.php" method="post" class="form-ui">
        <div class="form-horizontal">
            <label for="">You are an</label>
            <input type="radio" name="identity" value="individual" checked> Individual
            <input type="radio" name="identity" value="broker"> Broker
            <br>
            <label for="">Property Types</label>
            <input type="radio" name="property" value="Apartment" checked> Apartment
            <input type="radio" name="property" value="individual_house"> Individual House
            <br>
            <label for="">Area</label>
            <input type="radio" name="area" value="Mumbai" checked> Mumbai
            <input type="radio" name="area" value="Navi_Mumbai"> Navi Mumbai
            <input type="radio" name="area" value="Thane" checked> Thane
            <input type="radio" name="area" value="Suburb"> Suburb
            <br>
            <label for=""> Preferred Location:</label>
            <input type="radio" name="location" value="Master" checked> Master
            <br>
            <label for=""> Built-Up Area :</label>
            <input type="text" name="built_area">
            <br>
            <label for="">Bedroom:</label>
            <select name="bedroom">
                <option value="One">One</option>
                <option value="Two">Two</option>
                <option value="Three">Three</option>
                <option value="Studio">Studio</option>
            </select>
            <br>
            <label for="">Bathroom:</label>
            <select name="bathroom">
                <option value="One">One</option>
                <option value="Two">Two</option>
                <option value="Three">Three</option>
            </select>
            <br>
            <label for=""> Status of Flat:</label>
            <input type="radio" name="status" value="Furnished" checked> Furnished
            <input type="radio" name="status" value="Unfurnished"> Unfurnished
            <input type="radio" name="status" value="semi_furnished"> Semi Furnished
            <br>
            <label for="">fare:</label>
            <input type="radio" name="fare" value="per_day">Per day
            <input type="radio" name="fare" value="per_week">Per Week
            <input type="radio" name="fare" value="per_month">Per Month


            <br>
            <label for="">Other Requirements:</label>
            <input type="text" name="requirements">

            <br>
            <br>
            <label for="">Contact Details: Name:</label>
            <input type="text" name="name">
            <br>
            <label for="">Contact Number:</label>
            <input type="text" name="mobile">
            <br>
            <label for=""> Email:</label>
            <input type="email" name="email">
            <br>
            <label for="">Preferred time to call:</label>
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