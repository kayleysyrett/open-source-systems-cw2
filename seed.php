<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   // checks whether we are logged in 
   if (isset($_SESSION['id'])) {

   $array_students = array(
       array(
           "firstname" => "Laura"
           "lastname" => "Smith"
           "studentid" => "Laura Smith"
           "password" => "password"
           "dob" => "15/09/1989"
           "house" => "9 Cheddar Lane"
           "town" => "Brie"
           "county" => "Leicester"
           "country" => "England"
           "postcode" => "HP88 OOO"
       ),
       array(
           "firstname" => "April"
           "lastname" => "Smith"
           "studentid" => "002"
           "password" => "password"
           "dob" => "10/05/1947"
           "house" => "9 Cheddar Lane"
           "town" => "Brie"
           "county" => "Leicester"
           "country" => "England"
           "postcode" => "HP88 OOO"
       ),
       array(
           "firstname" => "Andrew"
           "lastname" => "Smith"
           "studentid" => "003"
           "password" => "password"
           "dob" => "10/07/1969"
           "house" => "9 Cheddar Lane"
           "town" => "Brie"
           "county" => "Leicester"
           "country" => "England"
           "postcode" => "HP88 OOO"
       ),
       array(
           "firstname" => "Helen"
           "lastname" => "Smith"
           "studentid" => "004"
           "password" => "password"
           "dob" => "10/10/1963"
           "house" => "9 Cheddar Lane"
           "town" => "Brie"
           "county" => "Leicester"
           "country" => "England"
           "postcode" => "HP88 OOO"
       ),
       array(
           "firstname" => "Amy"
           "lastname" => "Smith"
           "studentid" => "005"
           "password" => "password"
           "dob" => "14/07/1991"
           "house" => "9 Cheddar Lane"
           "town" => "Brie"
           "county" => "Leicester"
           "country" => "England"
           "postcode" => "HP88 OOO"
       ),
   );

   foreach ($array_students as $key => $student_array ){

      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES ('{$student_array['firstname', 'lastname', 'studentid', 'password', 'dob', 'house', 'town', 'county', 'country', 'postcode']}')";
      $result = mysqli_query($conn,$sql);

   }


    
    // build INSERT query 
      //$sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      //VALUES ('001', '08/02/1989','Kayley', 'Syrett', '18 Swan Close', 'Aylesbury', 'Buckinghamshire', 'England','HP19 OUB')";
      //$result = mysqli_query($conn,$sql);

    // run query 

   }

?>