<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Page</title>
</head>

<body>
    <?php require "../components/nav.php" ?>

    <div class="card m-5">
        <h1 class="card-header ">Notifications Board</h1>
        <div class="card-body d-flex justify-content-center align-items-center flex-column gap-3">
            <input class="card-title" type="text" id="titleInput" placeholder="Enter a title">
            <input class="card-text" type="text" id="messageInput" placeholder="Enter a message">
            <button class="btn btn-primary" onclick="addMessage()">Add Message</button>
            <div id="messages"></div>
        </div>
    </div>

    <div class="card m-5">
    <h1 class="card-header ">Challan</h1>
        <div class="container p-3 d-flex flex-column gap-3 justify-content-evenly align-items-center">
            <img id="output" style=" height: 300px; width: 600px; border:2px solid green;" />
            <input class="d-none" type="file" accept="image/*" id="upload-button" onchange="loadFile(event)">
            <label for="upload-button" class="btn btn-primary">Upload Challan</label>
        </div>
    </div>



    <div class="card m-5">
        <h1 class="card-header ">Check Students</h1>
        <div class="card-body d-flex justify-content-center align-items-center flex-column gap-3">

            <form action="admin.php" method="POST"
                class="d-flex justify-content-center align-items-center flex-column gap-3">
                <div class="col-md-12">
                    <select id="inputState" name="subject" class="form-select" required>
                        <option selected disabled>Choose Subject...</option>
                        <option value="BS Computer Science">BS Computer Science</option>
                        <option value="BS Mathematics">BS Mathematics</option>
                        <option value="BS Chemistry">BS Chemistry</option>
                        <option value="BS Physics">BS Physics</option>
                        <option value="BS Botany">BS Botany</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
            <?php

            // Database connection    
            $conn = new mysqli("localhost", "root", "", "portal");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if a subject was selected in the form
            if (isset($_POST['subject'])) {
                $selectedSubject = $_POST['subject'];

                // SQL query to fetch students with the selected subject
                $sql = "SELECT * FROM students WHERE subject = '$selectedSubject'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Display the students
                    echo "<h2>Students with subject: " . htmlspecialchars($selectedSubject) . "</h2>";
                    echo "<ul>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . htmlspecialchars($row['name']) . "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "No students found with the selected subject.";
                }
            }

            // Close the database connection
            $conn->close();
            ?>



        </div>
    </div>








    <script>
        // Initialize messages from local storage or an empty array
        let messages = JSON.parse(localStorage.getItem('messages')) || [];

        function addMessage() {
            const titleInput = document.getElementById("titleInput");
            const messageInput = document.getElementById("messageInput");

            const title = titleInput.value;
            const message = messageInput.value;

            if (title && message) {
                messages.push({ title, message });
                titleInput.value = "";
                messageInput.value = "";
                displayMessages();
                saveMessagesToLocalStorage();
            }
        }

        function editMessage(index) {
            const editedTitle = prompt("Edit the title:", messages[index].title);
            const editedMessage = prompt("Edit the message:", messages[index].message);

            if (editedTitle !== null && editedMessage !== null) {
                messages[index] = { title: editedTitle, message: editedMessage };
                displayMessages();
                saveMessagesToLocalStorage();
            }
        }

        function deleteMessage(index) {
            messages.splice(index, 1);
            displayMessages();
            saveMessagesToLocalStorage();
        }

        function displayMessages() {
            const messagesDiv = document.getElementById("messages");
            messagesDiv.innerHTML = "";

            for (let i = 0; i < messages.length; i++) {
                const messageDiv = document.createElement("div");
                messageDiv.classList.add("message");
                messageDiv.innerHTML = `
                    <h3>${messages[i].title}</h3>
                    <p>${messages[i].message}</p>
                    <button onclick="editMessage(${i})">Edit</button>
                    <button onclick="deleteMessage(${i})">Delete</button>
                `;
                messagesDiv.appendChild(messageDiv);
            }
        }

        function saveMessagesToLocalStorage() {
            localStorage.setItem('messages', JSON.stringify(messages));
        }

        displayMessages();
    </script>
</body>

</html>