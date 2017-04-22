$(document).ready(function() {
  
  $("#myMovie").on(
    "timeupdate","play",
    function(event) {
      
      function format(s) {
    m = Math.floor(s / 60);
    m = (m >= 10) ? m : "0" + m;
    s = Math.floor(s % 60);
    s = (s >= 10) ? s : "0" + s;
    return m + ":" + s;
  }

   var time = format(Math.floor(this.currentTime) + 1);
   var duration = format(Math.floor(this.duration) + 1);
      
      onTrackedVideoFrame(time,duration);
    });
});

function onTrackedVideoFrame(currentTime, duration){
    $("#current").text(currentTime + " / ");
    $("#duration").text(duration);
}

$("#myMovie").on("ended",
function(event) {
  alert("f");
});

function doFirst(){
  barSize=575;
  myMovie=document.getElementById('myMovie');
  playButton=document.getElementById('buttons');
  defaultBar=document.getElementById('defaultBar');
  progressBar=document.getElementById('progressBar');
  
  playButton.addEventListener('click', playOrPause, false);
  defaultBar.onclick=clickedBar('click', clickedBar, false);
}

function playOrPause(){
  if(!myMovie.paused && !myMovie.ended){
    myMovie.pause();
    playButton.innerHTML='<i class="fa fa-play" aria-hidden="true" id="playButton"></i>';
    window.clearInterval(updateBar);
  }else{
    myMovie.play();
    playButton.innerHTML='<i class="fa fa-pause" aria-hidden="true" id="playButton"></i>';
    updateBar=setInterval(update, 500);
  }
}

function update(){
  var size=parseInt (myMovie.currentTime*barSize/myMovie.duration);
  if(!myMovie.ended){
    progressBar.style.width=size+'px';
  }else{
    progressBar.style.width=size+'px';
    playButton.innerHTML='<i class="fa fa-play" aria-hidden="true" id="playButton"></i>';
    window.clearInterval(updateBar);
  }
}

function clickedBar(e){
  if(!myMovie.paused && !myMovie.ended){
    var mouseX=e.pageX-bar.offsetLeft;
    var newTime=mouseX*myMovie.duration/barSize;
    myMovie.currentTime=newTime;
    progressBar.style.width=mouseX+'px';
  }
}

window.addEventListener('load', doFirst, false);