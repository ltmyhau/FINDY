<div class="icon">
            <i class="fas fa-comment"></i>
            </div>

            <div class="chatbox" id="chatbox">
            <!-- Nội dung của chatbox ở đây -->
            <div class="chatbox-header">
    <h2>Chatbox</h2>
    <button class="close-button" id="close-button">&times;</button>
  </div>
  <div class="chatbox-content" id="chatbox-content">
    <!-- Nội dung của chatbox ở đây -->
    
  </div>
  <div class="message-input">
    <form id="messageForm" method = "POST">
          <input type="text" id="senderID" placeholder="ID người gửi">
          <input type="text" id="receiverID" placeholder="ID người nhận">
          <input type="text" id="message" placeholder="Tin nhắn">
          <button type="submit">Gửi</button>
      </form>
  </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="./relation.js"></script>
        <script src="./js/boxchat.js"></script>
        