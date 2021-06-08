<?php
include_once '../php/init.php';
//include_once '../php/includes/autoload.inc.php';
include_once '../php/autoload.inc.php';
?>

<html>
<body>
      <head>
        <link href = "../css/style.css" type = "text/css" rel = "stylesheet">
        </head>

        <header>
          <h1>Your shifts</h1>
        </header>

        <div class="firstnameOfTheUser">

            Welcome
               <?php
               if(isset($_SESSION['FirstName']))
               echo($_SESSION['FirstName']);
               else{
                 echo "";

               }
               ?>
        </div>
      <input class = "btnlogout" value = "Profile" onclick="location='Profile.php'" />
       <input class = "btnlogout" value = "Log Out" onclick="location='../php/logout.php'"/>
       <input class = "btnlogout" value = "Preffered shifts" onclick="location='preference.php'"/>
       <input class = "btnlogout" value = "Availability" onclick="location='availability.php'"/>
        <table>
          <tr>
            <th>Shift Number</th>
            <th>Date</th>
            <th>Department</th>
          </tr>

          <?php
                    $control = new ShiftControl();
                    $control->DisplayShifts($_SESSION['ID']);
                    unset($control);
          ?>

       </table>


</body>
</html>
