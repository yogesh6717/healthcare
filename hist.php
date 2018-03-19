<?php 
/* Main page with two forms: sign up and log in */
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>History Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" type="text/css" href="css/style3.css">


</head>

<body>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
       
    </head>
    <body>

      <form method="post"  action="histsession.php" >
     
	  <div class="header">
        <h4>General Patient Information </h4>
        </div>
        <fieldset>

<b>Full name:</b>
<input type="text" name="fullname" required><br>&nbsp;
<b>Case Number:</b>
<input type="text" name="caseno" required><br>&nbsp;
<b><h>Gender</h><br></b>
<input type="radio" name="gender" value="Male" required>Male
<input type="radio" name="gender" value="Female" required>Female
<input type="radio" name="gender" value="Other" required>Other <br>&nbsp;

            <b>Birth Date:</b>
<input type="date" name="bdate"><span style="color: red;" required> *</span><br>
<b>Patiets height:</b>
<input type="number" name="pheight" required><br>&nbsp;
<b>Patiets weight:</b>
<input type="number" name="pweight" required><br>&nbsp;

<p>Patients history</p>
    
            <b>Please list any drug allergies:</b>
<br>
<input type="text" name="drugs">  <br>


            <b>Please enter current medications:</b>
<br>
<input type="text" name="current">  <br>

            <b> Include other comments regarding your Medical History:</b>
           <br>
<input type="text" name="comment">  <br>
          
<input type="Submit" name="Submit" value="Submit" >
<input type="Reset"  value="reset">
        </fieldset>


      </form>

    </body>




</body>

</html>
