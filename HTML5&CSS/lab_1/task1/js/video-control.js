

function play(){
    var myvideo = document.getElementById("frozen")

    if (myvideo.paused){
        myvideo.play()
    }
}

function pause(){
    var myvideo = document.getElementById("frozen")

    if (myvideo.play){
        myvideo.pause()
    }
}

function bigScreen(){
    var myvideo = document.getElementById("frozen")
    myvideo.width = 1000;
}

function smallScreen(){
    var myvideo = document.getElementById("frozen")
    myvideo.width = 400;
}
function normalScreen(){
    var myvideo = document.getElementById("frozen")
    myvideo.width = 700;


}

function mute(){
    var myvideo = document.getElementById("frozen")
	if(myvideo.muted){
		myvideo.muted = false;
	} else {
		myvideo.muted = true;
	}
}

// volume bar 
const volRangeVid = document.getElementById('volRange');
volRangeVid.addEventListener('input', () => {
    var myvideo = document.getElementById("frozen")
    myvideo.volume = volRangeVid.value / 100;

});



  // Go 10 second Backward
function backward() {
    var myvideo = document.getElementById("frozen")
    myvideo.currentTime -= 10;
};

  // Go 10 seconds forward
function forward() {
    var myvideo = document.getElementById("frozen")
    myvideo.currentTime += 10;
};



// Go To Start Of Video
function toBegin() {
    var myvideo = document.getElementById("frozen")
    myvideo.currentTime = 0;
    if (myvideo.paused) {
        myvideo.play();
        playBtn.innerHTML = "Stop";
    }
};
  // Go To End Of Video
function toEnd() {
    var myvideo = document.getElementById("frozen")
    myvideo.currentTime = myvideo.duration;
    if (!myvideo.paused) {
        myvideo.pause();
        playBtn.innerHTML = "Start";
    }
};


// time line for video
function vidStartTime() {
    var myvideo = document.getElementById("frozen")
    var min = parseInt(myvideo.currentTime / 60, 10);
    var sec = Math.round(myvideo.currentTime % 60);
    startTime.innerHTML = `${min}:${sec}`;
    vidBar.value = myvideo.currentTime;
    setInterval(() => {
        vidStartTime();
    }, 1);

} // to display start time of video by minutes and seconds

document.body.addEventListener('load', vidStartTime());




