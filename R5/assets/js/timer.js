/*--------------------------------------------------------------
# Timer JS
--------------------------------------------------------------*/

const hrs = document.getElementById("hrs");
const mins = document.getElementById("mins");
const secs = document.getElementById("secs");
const week = document.getElementById("week");

/** countdown timer */
function countdown(seconds) {
  let intervalId = setInterval(function () {
    let hours = Math.floor(seconds / 3600);
    let minutes = Math.floor((seconds % 3600) / 60);
    let myseconds = seconds % 60;
    seconds--;
    updateProgressBar(seconds, 300, 1);

    if (seconds < 0) {
      clearInterval(intervalId);
    }
    hrs.innerText = formatTime(hours);
    mins.innerText = formatTime(minutes);
    secs.innerText = formatTime(myseconds);
  }, 1000);
}



/** formats time and makes it human readerble eg. 1:1 will give 01:01 */
function formatTime(time) {
  return time < 10 ? `0${time}` : time;
}


/** changes the progress bar with respect to time in seconds */
function updateProgressBar(startTime, duration, reduceAfter) {
  const progressBar = document.querySelector(".Rectangle_37");

  let elapsedTime = duration - startTime;

  let percent = Math.round(((duration - elapsedTime) / duration) * 100);
  progressBar.style.width = percent + "%";
  if (percent > 0) {
      // requestAnimationFrame(()=>{updateProgressBar(startTime, duration, reduceAfter)});
    setTimeout(function () {
      updateProgressBar(startTime, duration, reduceAfter);
    }, reduceAfter * 1000);
  }
  startTime--;
}


countdown(300);
