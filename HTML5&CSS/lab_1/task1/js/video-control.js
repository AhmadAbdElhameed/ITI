

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
  // Go 10 second Backward Button Function
function backward() {
    var myvideo = document.getElementById("frozen")
    myvideo.currentTime -= 10;
};

  // Go 10 seconds forward Button Function
function forward() {
    var myvideo = document.getElementById("frozen")
    myvideo.currentTime += 10;
};



// Go To Start Of Vedio Button Function
function toBegin() {
    var myvideo = document.getElementById("frozen")
    myvideo.currentTime = 0;
    if (myvideo.paused) {
        myvideo.play();
        playBtn.innerHTML = "Stop";
    }
};
  // Go To End Of Vedio Button Function
function toEnd() {
    var myvideo = document.getElementById("frozen")
    myvideo.currentTime = myvideo.duration;
    if (!myvideo.paused) {
        myvideo.pause();
        playBtn.innerHTML = "Start";
    }
};






