// Có cách nào nhanh hơn không ta =))

// Ẩn hiện menu Địa điểm
var togglePlaceMenu = document.getElementById("filter__place-item");
var placeMenu = document.getElementById("filter__place-menu");
var placeIconDown = document.getElementById("filter__place-icon-down");
var placeIconUp = document.getElementById("filter__place-icon-up");

togglePlaceMenu.addEventListener("click", function() {
    if (placeMenu.style.display === "none" || placeMenu.style.display === "") {
        placeMenu.style.display = "block";
        placeIconDown.style.display = "none";
        placeIconUp.style.display = "block";
        togglePlaceMenu.classList.add("selected");
    } else {
        placeMenu.style.display = "none";
        placeIconDown.style.display = "block";
        placeIconUp.style.display = "none";
        togglePlaceMenu.classList.remove("selected");
    }
});

// Ẩn hiện menu Giá
var togglePriceMenu = document.getElementById("filter__price-item");
var priceMenu = document.getElementById("filter__price-menu");
var priceIconDown = document.getElementById("filter__price-icon-down");
var priceIconUp = document.getElementById("filter__price-icon-up");

togglePriceMenu.addEventListener("click", function() {
    if (priceMenu.style.display === "none" || priceMenu.style.display === "") {
        priceMenu.style.display = "block";
        priceIconDown.style.display = "none";
        priceIconUp.style.display = "block";
        togglePriceMenu.classList.add("selected");
    } else {
        priceMenu.style.display = "none";
        priceIconDown.style.display = "block";
        priceIconUp.style.display = "none";
        togglePriceMenu.classList.remove("selected");
    }
});

// Ẩn hiện menu Kinh nghiệm
var toggleExperienceMenu = document.getElementById("filter__experience-item");
var experienceMenu = document.getElementById("filter__experience-menu");
var experienceIconDown = document.getElementById("filter__experience-icon-down");
var experienceIconUp = document.getElementById("filter__experience-icon-up");

toggleExperienceMenu.addEventListener("click", function() {
    if (experienceMenu.style.display === "none" || experienceMenu.style.display === "") {
        experienceMenu.style.display = "block";
        experienceIconDown.style.display = "none";
        experienceIconUp.style.display = "block";
        toggleExperienceMenu.classList.add("selected");
    } else {
        experienceMenu.style.display = "none";
        experienceIconDown.style.display = "block";
        experienceIconUp.style.display = "none";
        toggleExperienceMenu.classList.remove("selected");
    }
});

// Ẩn hiện menu Kỹ năng
var toggleSkillMenu = document.getElementById("filter__skill-item");
var skillMenu = document.getElementById("filter__skill-menu");
var skillIconDown = document.getElementById("filter__skill-icon-down");
var skillIconUp = document.getElementById("filter__skill-icon-up");

toggleSkillMenu.addEventListener("click", function() {
    if (skillMenu.style.display === "none" || skillMenu.style.display === "") {
        skillMenu.style.display = "block";
        skillIconDown.style.display = "none";
        skillIconUp.style.display = "block";
        toggleSkillMenu.classList.add("selected");
    } else {
        skillMenu.style.display = "none";
        skillIconDown.style.display = "block";
        skillIconUp.style.display = "none";
        toggleSkillMenu.classList.remove("selected");
    }
});

// Ẩn hiện menu Đánh giá
var toggleRatingMenu = document.getElementById("filter__rating-item");
var ratingMenu = document.getElementById("filter__rating-menu");
var ratingIconDown = document.getElementById("filter__rating-icon-down");
var ratingIconUp = document.getElementById("filter__rating-icon-up");

toggleRatingMenu.addEventListener("click", function() {
    if (ratingMenu.style.display === "none" || ratingMenu.style.display === "") {
        ratingMenu.style.display = "block";
        ratingIconDown.style.display = "none";
        ratingIconUp.style.display = "block";
        toggleRatingMenu.classList.add("selected");
    } else {
        ratingMenu.style.display = "none";
        ratingIconDown.style.display = "block";
        ratingIconUp.style.display = "none";
        toggleRatingMenu.classList.remove("selected");
    }
});