const modal = document.querySelector('.modal');
const modalContainer = document.querySelector('.modal__container')
const choice_service = document.querySelector('.choice_service');
const choice_servicecontainer = document.querySelector('.choice_service_container')

function showchoice_service(){
    choice_service.classList.add('open')
    document.getElementById('choice_service_content').classList.remove('hidden');
}


function showRegisterForm() {
    modal.classList.add('open')
    document.getElementById('register-form2').classList.add('hidden');
    document.getElementById('register-form').classList.remove('hidden');
    document.getElementById('login-form').classList.add('hidden');
}

function showRegisterForm2() {
    modal.classList.add('open')
    document.getElementById('register-form').classList.add('hidden');
    document.getElementById('register-form2').classList.remove('hidden');
    document.getElementById('login-form').classList.add('hidden');
}

function showLoginForm() {
    modal.classList.add('open')
    document.getElementById('register-form').classList.add('hidden');
    document.getElementById('register-form2').classList.add('hidden');
    document.getElementById('login-form').classList.remove('hidden');
}

function closeForm() {
    modal.classList.remove('open')
}
function closechoice(){
    choice_service.classList.remove('open')
}

choice_service.addEventListener('click', closechoice)
modal.addEventListener('click', closeForm)



modalContainer.addEventListener('click', function (event) {
    event.stopPropagation()
})


choice_servicecontainer.addEventListener('click', function (event) {
    event.stopPropagation()
})

    // ---------------slider-------------------
    const btnright = document.querySelector('.fa-chevron-right')
    const btnleft = document.querySelector('.fa-chevron-left')
    const imgbanner = document.querySelectorAll('.banner_img-img img')
    let index = 0
   

    btnright.addEventListener("click",function(){
        index=index+1
        if(index> imgbanner.length-1){
            index = 0
        }
        document.querySelector(".banner_img-img").style.right = index *100+"%"
        // console.log("ok")
    })


    btnleft.addEventListener("click",function(){
        index=index-1
        if(index<=0){
            index = imgbanner.length-1
        }
        document.querySelector(".banner_img-img").style.right = index *100+"%"
    })

    // --------------slider-auto---------------
    function imgauto(){
        index = index+1
        if(index > imgbanner.length-1){
            index = 0
        }
        document.querySelector(".banner_img-img").style.right = index *100+"%"
    }

    setInterval(imgauto,5000)


// ---------------slider-------------------

const btnrightji = document.querySelector('.fa-angle-left')
const btnleftji = document.querySelector('.fa-angle-right')
const imgbannerji = document.querySelectorAll('.jobinteresting_right-img-number img')
let indexji = 0



btnrightji.addEventListener("click",function(){
    indexji=indexji+1
    if(indexji> imgbannerji.length-1){
        indexji = 0
    }
    document.querySelector(".jobinteresting_right-img-number").style.right = indexji *100+"%"
    // console.log("ok")
})


btnleftji.addEventListener("click",function(){
    indexji=indexji-1
    if(indexji<=0){
        indexji = imgbannerji.length-1
    }
    document.querySelector(".jobinteresting_right-img-number").style.right = indexji *100+"%"
})

// --------------slider-auto---------------
function imgauto1(){
    indexji = indexji+1
    if(indexji > imgbannerji.length-1){
        indexji = 0
    }
    document.querySelector(".jobinteresting_right-img-number").style.right = indexji*100+"%"
}
setInterval(imgauto1,5000)





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


