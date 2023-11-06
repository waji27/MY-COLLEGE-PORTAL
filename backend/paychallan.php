<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pay Challan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font: 14px sans-serif;
        }
    </style>
</head>

<body>
    <?php require "../components/nav.php" ?>

    <div class="container m-5 d-flex flex-column gap-3 justify-content-evenly align-items-center">
        <img id="output" style=" height: 300px; width: 600px; border:2px solid green;" />
        <input type="text" placeholder="Enter Your Name">
        <input type="date">
        <label for="upload-button" class="btn btn-primary">Pay Challan</label>
    </div>

    <?php require "../components/footer.php" ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>