<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>
  </title>
  <script>
    function bookNow(event) {
      
      event.preventDefault();
      
      alert("Thank you, you have been successfully booked.");
     
      document.getElementById("name").value = "";
      document.getElementById("email").value = "";
      document.getElementById("checkin").value = "";
      document.getElementById("checkout").value = "";
      document.getElementById("room").selectedIndex = 0;
    }
  </script>
</head>
<body>
  <div class="menu">
    <div class="preview">
            <a href=""><i class="fa-solid fa-camera"></i>&nbsp; Gallery <a>
            <a href="https://www.google.com/maps"><i class="fa-solid fa-location-dot"></i>&nbsp; Location &nbsp;|<a>
            <a href="../login"><i class="fa-regular fa-user"></i> Sign In &nbsp;&nbsp;|</a>
            <a > THE STANDARD </a>
        </div>
        <div class="secondline">
          <div class="logo">
              <img class="logo" src="../images/logo.png">        
          </div>
          <div class="nav">
              <ul>
                  <li><a href="../index.html">HOME</a></li>
                  <li><a href="../webpages/rooms.php">ROOMS</a></li>
                  <li><a href="../webpages/contact.php">CONTACT US</a></li>
                  <li><a href="../webpages/book.php">BOOK NOW</a></li>
              </ul>
          </div>
        </div>   
  </div>
	<div class="banner-full">
  </div>
  <div class="booking">
    <div class="booking-form-container">
      <h2>Hotel Booking Form</h2>
      <form action="" method="post" onsubmit="bookNow(event)">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="checkin">Check-in Date</label>
        <input type="date" id="checkin" name="checkin" required>

        <label for="checkout">Check-out Date</label>
        <input type="date" id="checkout" name="checkout" required>

        <label for="room">Room Type</label>
        <select id="room" name="room" required>
          <option value="single">Standard Room</option>
          <option value="double">Deluxe Room</option>
          <option value="suite">Luxury Single</option>
          <option value="suite">Family Suite</option>
          <option value="suite">Executive Suite</option>
          <option value="suite">Junior Suite</option>
        </select>
        <button type="submit">BOOK</button>

      </form>
    </div>
  </div>

  


</body>

</html>