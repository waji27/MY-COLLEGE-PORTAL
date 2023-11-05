<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Board</title>
    <style>
        .message {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Message Board</h1>
    <input type="text" id="titleInput" placeholder="Enter a title">
    <input type="text" id="messageInput" placeholder="Enter a message">
    <button onclick="addMessage()">Add Message</button>
    <div id="messages"></div>
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
