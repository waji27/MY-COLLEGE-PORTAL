<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      font: 14px sans-serif;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php require "../components/nav.php" ?>

  <form class=" m-5 d-flex flex-column justify-content-evenly align-items-center gap-5 ">
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">First name</label>
      <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
    </div>
    <div class="col-md-4">
      <label for="validationDefault02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
    </div>
    <div class="col-md-4">
      <label for="validationDefaultUsername" class="form-label">Username</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
          required>
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationDefaultemail" class="form-label">Email</label>
      <div class="input-group">
        <input type="text" class="form-control" id="validationDefaultemail" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    <div class="col-md-3">
      <label for="phoneNumber" class="form-label">Phone Number</label>
      <input type="text" class="form-control" id="phoneNumber" required>
    </div>
    <div class="col-md-6">
      <label for="validationDefault03" class="form-label">City</label>
      <input type="text" class="form-control" id="validationDefault03" required>
    </div>
    <div class="col-md-3">
      <label for="validationSubject" class="form-label">Subject</label>
      <select class="form-select" id="validationSubject" required>
        <option selected disabled value="">Choose...</option>
        <option>BS Computer Science</option>
        <option>BS Mathematics</option>
        <option>BS Chemistry</option>
        <option>BS Physics</option>
        <option>BS Botany</option>
      </select>
    </div>
    <!-- <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div> -->
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>

  <?php require "../components/footer.php" ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>