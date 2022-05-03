 <?php

    session_start();

    ?>
 <style>
     #user {
         background-color: black;
         color: aliceblue;
         padding: 10px;
     }

     .dropbtn {
         background-color: #3498DB;
         color: white;
         padding: 5px;
         font-size: 16px;
         border: none;
         cursor: pointer;
         position: relative;
         left: 1100px;
         top: 20px;
         padding: 10px;
     }

     .dropbtn:hover,
     .dropbtn:focus {
         background-color: #2980B9;
     }

     .dropdown {
         position: relative;
         display: inline-block;
         margin-left: auto;
     }


     .dropdown-content {
         display: none;
         position: absolute;
         left: 1100px;
         background-color: #2980B9;
         min-width: 160px;
         overflow: auto;
         margin-top: 27px;
         box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
         z-index: 1;
     }

     .dropdown-content a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
     }

     .dropdown a:hover {
         background-color: #ddd;
     }

     .show {
         display: block;
     }

     .drp1 {
         color: white !important;
         font-weight: bolder;
     }
 </style>
 <div class="navbar">
     <div class="logo-navbar">
         <a href="index.php"><img class="img" src="img/download.png" alt=""></a>
     </div>
     <div class="navigation-bar">

         <ul>

             <a href="index.php">Home</a>
             <a href="about.php">About us</a>

             <?php if (isset($_SESSION['client'])) { ?>

                 <a href="appointment1.php?id=<?php echo $_SESSION['client']['idKlientit'] ?>">Appointment</a>
         </ul>
         <div class="dropdown">
             <?php echo "<a onclick='myFunction()' class='dropbtn' style='color:white; background:black; font-weight:bold;text-transform: uppercase'> " . $_SESSION['client']['emri'] . " " . $_SESSION['client']['mbiemri'] . "</a>"; ?>
             <div id="myDropdown" class="dropdown-content">
                 <?php

                    echo  "<a class='drp1' href='edit_client.php?id=" .  $_SESSION['client']['idKlientit'] . "'>Personal Info</a>";
                    if ($_SESSION['client']['role'] == 1) {
                        echo  "<a class='drp1' href='dashboard.php'>Dashboard</a>";
                    }

                    echo "<a class='drp1' href='logout.php'>Log out</a>";

                    ?>
             </div>

         </div>
     <?php } else { ?>

         <a href="appointment.php">Appointment</a>
         <a href="register.php">Register</a>
         <a href="login.php">Login</a>
         </ul>
     <?php }  ?>



     </div>
 </div>

 <script>
     var rewards = document.getElementById('rewards');

     function myFunction() {
         document.getElementById("myDropdown").classList.toggle("show");
     }

     // Close the dropdown if the user clicks outside of it
     window.onclick = function(event) {
         if (!event.target.matches('.dropbtn')) {
             var dropdowns = document.getElementsByClassName("dropdown-content");
             var i;
             for (i = 0; i < dropdowns.length; i++) {
                 var openDropdown = dropdowns[i];
                 if (openDropdown.classList.contains('show')) {
                     openDropdown.classList.remove('show');
                 }
             }
         }
     }
 </script>