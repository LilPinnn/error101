<?php 
require_once('db.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <!-- CSS -->
    <link rel="stylesheet" href="stylepopup.css" />

    <!-- Fontawesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
  </head>
  <body>
    <section>
      
      <span class="overlay"></span>

      <div class="modal-box">
        <i class="fa-regular fa-circle-check"></i>
        <h2>Booking Completed</h2>
        <h3>You have sucessfully reserved.</h3>

        <div class="buttons">
          <button class="close-btn">Ok, Close</button>

          
        </div>
      </div>

     


<head>
    <link rel="stylesheet" href="styleres.css">
    <title>Booking</title>
</head>

    <nav>
        <div class="navlogo">
            <a href="#">
                <img src="logo.jpg">
            </a>
        </div>

        <ul class="navbar">
            <li class="link"><a href="index.html">Home</a></li>
            <li id="link1" class="link"><a href="book.html">Booking</a></li>
            <li id="link2" class="link"><a href="gallery.html">Gallery</a></li>
            <li id="link3" class="link"><a href="about.html">About</a></li>
            <li id="link5" class="link"><a href="contact.html">Contact</a></li>
        </ul> 
        </ul> 
        </ul> 
        </ul>
    </nav>

<header class="container">
    <div class="content">
        <span class="blur"></span>
        <span class="blur"></span>
        <h4> </h4>
   
        <p>
           
        </p>
    </div>
</header>
          

      

    <div class="main-background">
        <div class="main-text">
        <h1> booking </h1>
            <h2> Please select date and room type</h2>
        </div>
        
    </div>
    
    

<body>
  <form method = "POST" id = "form">
    <div class="book-section">
        <div class="inner-book">
            <label>Check in</label>
      <input type = "date" class = "form-control" name = "checkindate" required = "required" />
            <label>Check out</label>
      <input type = "date" class = "form-control" name = "checkoutdate" required = "required" />
      <select name="chooseroom" style="">
      <?php
      //select USERGROUP_ID, USERGROUP_NAME from USERGROUP
      $q3 = 'select type_name from room_type;';
      if ($result = $mysqli->query($q3)) {
       while ($row = $result->fetch_array()) {
        echo '<option value="' . $row[0] . '">' . $row[0] . '</option>';
       }
      } else {
       echo 'Query error: ' . $mysqli->error;
      }
      ?>
       </select>
            <input type="text" name="person" placeholder="1 Person">
            <?php
             require_once 'db.php';
             $type_name = $_POST['chooseroom'];
             $checkindate = $_POST['checkindate'];
             $checkoutdate = $_POST['checkoutdate'];

              $query    = "INSERT into reservation (Checkindate, Checkoutdate, type_name) VALUES ('$checkindate','$checkoutdate','$type_name')";
              $result = $mysqli->query($query);
            ?>
        <button class="show-modal" type="submit" style="margin-left: 35%; margin-top: 19.5%;">Confirm</button>

        </div>
    </div>
    </form>
</body> 
      
    </section>

    <script>
      const section = document.querySelector("section"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        closeBtn = document.querySelector(".close-btn");

      showBtn.addEventListener("click", () => section.classList.add("active"));
      

      overlay.addEventListener("click", () =>
        section.classList.remove("active")
      );

      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")
      );
    </script>
  </body>
</html>