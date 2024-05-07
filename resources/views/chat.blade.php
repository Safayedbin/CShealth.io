<!-- resources/views/chat.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
</head>
<body>
    <input type="text" id="messageInput">
    <button onclick="sendMessage()">Send</button>
    <ul id="messages"></ul>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.3.2/socket.io.min.js"></script>
    <script>
        const socket = io('http://localhost:6001');

        socket.on('connect', () => {
            console.log('Connected to WebSocket server');
        });

        socket.on('chat', (message) => {
            // Decrypt message with user's private key (not shown here)
            // For simplicity, assume decryption function is implemented elsewhere
            
            // Display decrypted message in chat interface
            const messagesList = document.getElementById('messages');
            const listItem = document.createElement('li');
            listItem.textContent = message;
            messagesList.appendChild(listItem);
        });

        function sendMessage() {
            const messageInput = document.getElementById('messageInput');
            const message = messageInput.value.trim();

            // Encrypt message with recipient's public key (not shown here)
            // For simplicity, assume encryption function is implemented elsewhere

            // Send encrypted message to server
            socket.emit('send-chat-message', encryptedMessage);

            // Clear input field
            messageInput.value = '';
        }
    </script>
</body>
</html>
