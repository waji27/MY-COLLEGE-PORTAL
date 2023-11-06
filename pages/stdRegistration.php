<?php

// Include config file
require_once "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  // $name = "";
  // $fathername = "";
  // $email = "";
  // $phoneNo = "";
  // $gender = "";
  // $address = "";
  // $city = "";
  // $zip = "";
  // $subject = "";
  $name = $_POST['name'];
  $fathername = $_POST['fathername'];
  $email = $_POST['email'];
  $phoneNo = $_POST['phoneNo'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $subject = $_POST['subject'];
  $terms_accepted = isset($_POST['terms']) ? 1 : 0;

  if (
    $name != "" || $fathername != "" || $email != "" || $phoneNo != "" || $gender != ""
    || $address != "" || $city != "" || $zip != "" || $subject != ""
  ) {

    $query = "INSERT INTO students (name, fathername, email, phoneNo, gender, address, city, zip, subject, terms_accepted) VALUES ('$name', '$fathername', '$email', '$phoneNo', '$gender', '$address', '$city', '$zip', '$subject', $terms_accepted)";

    if (mysqli_query($link, $query)) {
      echo "Form data has been successfully submitted to the database.";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

  } else {
    echo "some data missing";
  }




}



// mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      font: 14px sans-serif;
    }
  </style>
</head>

<body>
  <?php require "../components/nav.php" ?>

  <form class="row g-5 m-3 p-5" method="POST" action="stdRegistration.php">
    <div class="col-6">
      <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" aria-label="First name"
        required>
    </div>
    <div class="col-6">
      <input type="text" id="fathername" name="fathername" class="form-control" placeholder="Enter Father Name"
        aria-label="Last name" required>
    </div>
    <div class="col-md-6">
      <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email here" required>
    </div>
    <div class="col-md-6">
      <input type="text" id="phoneNo" name="phoneNo" class="form-control" placeholder="Enter Phone number here"
        required>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
        <label class="form-check-label" for="female">Female</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="other" value="Other" required>
        <label class="form-check-label" for="other">Other</label>
      </div>
    </div>
    <div class="col-12">
      <input type="text" id="inputAddress" name="address" class="form-control" placeholder="Enter Home Address"
        required>
    </div>
    <div class="col-md-6">
      <input type="text" id="inputCity" name="city" class="form-control" placeholder="City" required>
    </div>
    <div class="col-md-6">
      <input type="text" id="inputZip" name="zip" class="form-control" placeholder="Zip" required>
    </div>
    <div class="col-md-6">
      <select id="inputState" name="subject" class="form-select" required>
        <option selected disabled>Choose Subject...</option>
        <option value="BS Computer Science">BS Computer Science</option>
        <option value="BS Mathematics">BS Mathematics</option>
        <option value="BS Chemistry">BS Chemistry</option>
        <option value="BS Physics">BS Physics</option>
        <option value="BS Botany">BS Botany</option>
      </select>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="terms" id="gridCheck" required>
        <label class="form-check-label" for="gridCheck">
          I accept all terms & conditions of SE-College
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>


  <?php require "../components/footer.php" ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>