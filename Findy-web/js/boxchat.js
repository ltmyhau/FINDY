// Lấy tham chiếu đến các phần tử
const icon = document.querySelector('.icon');
const chatbox = document.getElementById('chatbox');
const closeButton = document.getElementById('close-button');

// Thêm sự kiện click cho biểu tượng để hiện chatbox
icon.addEventListener('click', function() {
  chatbox.style.display = 'block';
  icon.style.display = 'none'; // Ẩn biểu tượng khi hiện chatbox
});

// Thêm sự kiện click cho nút "x" để ẩn chatbox và hiện biểu tượng
closeButton.addEventListener('click', function() {
  chatbox.style.display = 'none';
  icon.style.display = 'block'; // Hiện biểu tượng khi ẩn chatbox
});
