$(document).ready(function() {
    // Sự kiện khi form được submit
    $("#messageForm").submit(function(event) {
        event.preventDefault();

        // Lấy thông tin từ các input
        var senderID = $("#senderID").val();
        var receiverID = $("#receiverID").val();
        var message = $("#message").val();

        // Gửi dữ liệu đến máy chủ để lưu trữ
        $.ajax({
            type: "POST",
            url: "save_message.php", // Đường dẫn đến tệp PHP xử lý lưu trữ tin nhắn
            data: {
               
                receiverID: receiverID,
                message: message
            },
            success: function(response) {
                // Xử lý thành công
                $("#message").val(""); // Xóa nội dung tin nhắn sau khi gửi
                loadChat(); // Tải lại cuộc trò chuyện
            },
            error: function() {
                // Xử lý lỗi
                alert("Đã xảy ra lỗi khi gửi tin nhắn.");
            }
        });
    });

    // Hàm để tải cuộc trò chuyện
    function loadChat() {
        $.ajax({
            type: "GET",
            url: "get_messages.php", // Đường dẫn đến tệp PHP xử lý tải tin nhắn
            success: function(response) {
                $("#chatbox-content").html(response);
            },
            error: function() {
                alert("Đã xảy ra lỗi khi tải cuộc trò chuyện.");
            }
        });
    }

    // Tải cuộc trò chuyện ban đầu
    loadChat();
});