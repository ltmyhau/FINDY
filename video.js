// ---------------video-----------------
var video = document.getElementById("myVideo");
video.muted = true;
video.addEventListener("ended", function () {

    this.currentTime = 0;

    this.play();

});
var video = document.getElementById("myVideo");

function adjustVolume(step) {
    var currentVolume = video.volume;
    var newVolume = currentVolume + step;

    if (newVolume >= 0 && newVolume <= 1) {
        video.volume = newVolume;
    }
}


// ---------------video-----------------
var video1 = document.getElementById("mVideo");
video1.muted = true;
console.log(video1)
video1.addEventListener("ended", function () {

    this.currentTime = 0;

    this.play();

});


