 // Lấy tham chiếu đến input file và hình ảnh
 const anhThoInput = document.getElementById("anhThoInput");
 const hinhAnh = document.getElementById("hinhAnh");

 // Đặt sự kiện khi thay đổi giá trị của input file
 anhThoInput.addEventListener("change", function () {
     // Kiểm tra xem có tệp hình ảnh được chọn không
     if (anhThoInput.files.length > 0) {
         // Lấy tệp hình ảnh đầu tiên trong danh sách
         const selectedImage = anhThoInput.files[0];
         
         // Tạo URL cho tệp hình ảnh được chọn
         const imageURL = URL.createObjectURL(selectedImage);

         // Hiển thị hình ảnh trong thẻ img
         hinhAnh.src = imageURL;
     } else {
         // Nếu không có tệp nào được chọn, đặt hình ảnh thành hình ảnh mặc định (placeholder)
         hinhAnh.src = "placeholder.jpg";
     }
 });

        function selectImage(element) {
            const fileInput = element.querySelector('input[type="file"]');
            fileInput.click();
        }

        function displayImage(input) {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageContainer = input.parentElement;
                    const image = new Image();
                    image.src = e.target.result;
                    image.style.maxWidth = "100%";
                    image.style.maxHeight = "100%";
                    imageContainer.innerHTML = "";
                    imageContainer.appendChild(image);
                };
                reader.readAsDataURL(file);
            }
        }