<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   // check logged in
   if (isset($_SESSION['id'])) {

      $result = mysqli_query($conn,$sql);

      // prepare page content
      $data['content'] .= "<table border='1'>";
      $data['content'] .= "<tr><th>First Name</th>
                           <th>Last Name</th>
                           <th>DOB</th>
                           <th>DOB</th>
                           <th>DOB</th>
                           <th>DOB</th>
                           <th>DOB</th>
                </tr>"
                           
                           
                           
                           ;
      // Display the modules within the html table
      while($row = mysqli_fetch_array($result)) {
         $data['content'] .= "<tr>";
         $data['content'] .= "<td> {$row["firstname"]} </td>";
         $data['content'] .= "<td> {$row["lastname"]}</td>";
         $data['content'] .= "<td> {$row["firstname"]}</td>";
         $data['content'] .= "</tr>";
      }
      $data['content'] .= "</table>";

      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>
