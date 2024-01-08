<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chat Page</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Add your custom styles here */
    #chat-container {
      max-width: 600px;
      margin: auto;
    }
    #chat-messages {
      max-height: 300px;
      overflow-y: auto;
    }
  </style>
</head>
<body>

<div class="container mt-5" id="chat-container">
  <div class="card">
    <div class="card-header bg-primary text-white">
      Chat History
    </div>
    <div class="card-body" id="chat-messages">
      <!-- Chat messages will be appended here dynamically -->
    </div>
    <div class="card-footer">
      <div class="form-group">
        <label for="replyBox">Reply:</label>
        <textarea class="form-control" id="replyBox" rows="2"></textarea>
      </div>
      <button class="btn btn-primary" onclick="sendMessage()">Send</button>
    </div>
  </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function getCurrentTime() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    return `${hours}:${minutes}`;
  }

  function appendMessage(user, message) {
    const chatMessages = document.getElementById('chat-messages');
    const currentTime = getCurrentTime();
    const messageHTML = `
      <div class="mb-2">
        <strong>${user}</strong> (${currentTime}): ${message}
      </div>
    `;
    chatMessages.innerHTML += messageHTML;
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  function sendMessage() {
    const replyBox = document.getElementById('replyBox');
    const message = replyBox.value.trim();
    if (message !== '') {
      appendMessage('You', message);
      // You can send the message to the server or perform any other necessary actions here
      replyBox.value = ''; // Clear the reply box after sending the message
    }
  }

  // Sample chat history
  appendMessage('User1', 'Hello!');
  appendMessage('User2', 'Hi there!');
  appendMessage('User1', 'How are you doing?');
</script>

</body>
</html>
