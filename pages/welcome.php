<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

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

    <h1 class="my-5">Hi, <b> <?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>

    <?php require "../components/notifications.php" ?>
    <?php require "../components/cards.php" ?>
    <?php require "../components/footer.php" ?>


    <script>
        const displayMessagesDiv = document.getElementById("displayMessages");

        // Retrieve messages from local storage
        const savedMessages = JSON.parse(localStorage.getItem("messages")) || [];

        savedMessages.forEach((message) => {
            const messageDiv = document.createElement("div");
            messageDiv.classList.add("message");
            messageDiv.innerHTML = `
                <h3>${message.title}</h3>
                <p>${message.message}</p>
            `;
            displayMessagesDiv.appendChild(messageDiv);
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>