const modal = document.querySelector('.modal');
const modalContainer = document.querySelector('.modal__container');
const choice_service = document.querySelector('.choice_service');
const choice_servicecontainer = document.querySelector('.choice_service_container');

function showchoice_service() {
    modal.classList.remove('open');
    choice_service.classList.add('open');
    document.getElementById('register-form').classList.add('hidden');
    document.getElementById('register-form2').classList.add('hidden');
    document.getElementById('login-form').classList.add('hidden');
    document.getElementById('choice_service_content').classList.remove('hidden');
}


function showRegisterForm() {
    modal.classList.add('open');
    choice_service.classList.remove('open');
    document.getElementById('register-form').classList.remove('hidden');
    document.getElementById('register-form2').classList.add('hidden');
    document.getElementById('login-form').classList.add('hidden');
    document.getElementById('choice_service_content').classList.add('hidden');
}

function showRegisterForm2() {
    modal.classList.add('open');
    choice_service.classList.remove('open');
    document.getElementById('register-form').classList.add('hidden');
    document.getElementById('register-form2').classList.remove('hidden');
    document.getElementById('login-form').classList.add('hidden');
    document.getElementById('choice_service_content').classList.add('hidden');
}

function showLoginForm() {
    modal.classList.add('open');
    choice_service.classList.remove('open');
    document.getElementById('register-form').classList.add('hidden');
    document.getElementById('register-form2').classList.add('hidden');
    document.getElementById('login-form').classList.remove('hidden');
    document.getElementById('choice_service_content').classList.add('hidden');
}

function closeForm() {
    modal.classList.remove('open');
}
function closechoice() {
    choice_service.classList.remove('open');
}

choice_service.addEventListener('click', closechoice);
modal.addEventListener('click', closeForm);

modalContainer.addEventListener('click', function (event) {
    event.stopPropagation();
})

choice_servicecontainer.addEventListener('click', function (event) {
    event.stopPropagation();
})

// ---------------slider-------------------
const btnright = document.querySelector('.fa-chevron-right')
const btnleft = document.querySelector('.fa-chevron-left')
const imgbanner = document.querySelectorAll('.banner_img-img img')
let index = 0


btnright.addEventListener("click", function () {
    index = index + 1
    if (index > imgbanner.length - 1) {
        index = 0
    }
    document.querySelector(".banner_img-img").style.right = index * 100 + "%"
    // console.log("ok")
})


btnleft.addEventListener("click", function () {
    index = index - 1
    if (index <= 0) {
        index = imgbanner.length - 1
    }
    document.querySelector(".banner_img-img").style.right = index * 100 + "%"
})

// --------------slider-auto---------------
function imgauto() {
    index = index + 1
    if (index > imgbanner.length - 1) {
        index = 0
    }
    document.querySelector(".banner_img-img").style.right = index * 100 + "%"
}

setInterval(imgauto, 5000)


// ---------------slider-------------------

const btnrightji = document.querySelector('.fa-angle-left')
const btnleftji = document.querySelector('.fa-angle-right')
const imgbannerji = document.querySelectorAll('.jobinteresting_right-img-number img')
let indexji = 0



btnrightji.addEventListener("click", function () {
    indexji = indexji + 1
    if (indexji > imgbannerji.length - 1) {
        indexji = 0
    }
    document.querySelector(".jobinteresting_right-img-number").style.right = indexji * 100 + "%"
    // console.log("ok")
})


btnleftji.addEventListener("click", function () {
    indexji = indexji - 1
    if (indexji <= 0) {
        indexji = imgbannerji.length - 1
    }
    document.querySelector(".jobinteresting_right-img-number").style.right = indexji * 100 + "%"
})

// --------------slider-auto---------------
function imgauto1() {
    indexji = indexji + 1
    if (indexji > imgbannerji.length - 1) {
        indexji = 0
    }
    document.querySelector(".jobinteresting_right-img-number").style.right = indexji * 100 + "%"
}
setInterval(imgauto1, 5000)

// ---------translate
var isVietnamese = true;
function switchLanguage() {
    isVietnamese = !isVietnamese;

    if (isVietnamese) {
        document.getElementById("contentVi").style.display = "block";
        document.getElementById("contentEn").style.display = "none";
        document.getElementById("contentVi2").style.display = "block";
        document.getElementById("contentEn2").style.display = "none";
        document.getElementById("timkiem").style.display = "block";
        document.getElementById("searcheveryone").style.display = "none";
        document.getElementById("input").style.display = "block";
        document.getElementById("inputen").style.display = "none";
        document.getElementById("logoutVi").style.display = "block";
        document.getElementById("logoutEn").style.display = "none";
        document.getElementById("24hVi").style.display = "block";
        document.getElementById("24hEn").style.display = "none";
    } else {
        document.getElementById("contentVi").style.display = "none";
        document.getElementById("contentEn").style.display = "block";
        document.getElementById("contentVi2").style.display = "none";
        document.getElementById("contentEn2").style.display = "block";
        document.getElementById("timkiem").style.display = "none";
        document.getElementById("searcheveryone").style.display = "block";
        document.getElementById("input").style.display = "none";
        document.getElementById("inputen").style.display = "block";
        document.getElementById("logoutVi").style.display = "none";
        document.getElementById("logoutEn").style.display = "block";
        document.getElementById("24hVi").style.display = "none";
        document.getElementById("24hEn").style.display = "block";
    }
}

// ---------------jobinteresting_slider-------------------



function dragOverHandler(event) {
    event.preventDefault();
}

function dropHandler(event) {
    event.preventDefault();
    const files = event.dataTransfer.files;
    handleFile(files);
}

function handleFile(files) {
    const dropArea = document.getElementById('dropArea');
    const preview = document.getElementById('preview');
   var fileInput = document.getElementById('fileInput');
    if (files.length > 0) {
        const file = files[0];
        const fileType = file.type.split('/')[0];

        if (fileType === 'image' || fileType === 'video') {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                
                preview.style.display = 'flex';
                dropArea_p.style.display = 'none';
                img_holder.style.display = 'none';  
                browseButton.style.display = 'none';
            };
            reader.readAsDataURL(file);
        } else {
            alert('Vui lòng chọn một ảnh hoặc video.');
        }
    }

    
}

// Kích hoạt input file khi click vào vùng drop
const dropArea = document.getElementById('dropArea');
const fileInput = document.getElementById('fileInput');

dropArea.addEventListener('click', function () {
    fileInput.click();
});
function browseFiles() {
    const fileInput = document.getElementById('fileInput');
    fileInput.click();
}
function confirmCancel() {
    const confirmDialog = document.getElementById('confirmDialog');
    confirmDialog.style.display = 'flex';
    document.querySelector('.dim').classList.add('active');
}

function closeConfirmDialog() {
    const confirmDialog = document.getElementById('confirmDialog');
    confirmDialog.style.display = 'none';
    document.querySelector('.dim').classList.remove('active');
}

function cancelUpload() {
    window.location.href = 'profilephoto.php';
}


function likePost(btn) {
    var likeCount = btn.parentNode.querySelector('.like-count');
    var currentLikes = parseInt(likeCount.innerText);

    if (btn.classList.contains('liked')) {
        // Nếu đã like, thực hiện unlike
        likeCount.innerText = (currentLikes - 1) + '';
        btn.classList.remove('liked');
        btn.innerHTML = '<i class="far fa-heart"></i>';
    } else {
        // Nếu chưa like, thực hiện like
        likeCount.innerText = (currentLikes + 1) + '';
        btn.classList.add('liked');
        btn.innerHTML = "<i style='color:#478C43' class='fas fa-heart'></i>";
    }
}

function openPopup() {
    document.getElementById('popup').classList.add('active');
    document.querySelector('.dim').classList.add('active');
    $(document).on('click', '.darken', function() {
        var rowId = $(this).data('id');
    
        // Use AJAX to send the ID to the server
        $.ajax({
            type: "POST",
            url: "expand_img.php",
            data: { row_id: rowId },
            success: function(response) {
                // Display the result in the result-container
                $("#popup").html(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
}

function closePopup() {
    document.getElementById('popup').classList.remove('active');
    document.querySelector('.dim').classList.remove('active');
    closeConfirmDialog();
}
