/*--------------------------------------------------------------
# Timer JS
--------------------------------------------------------------*/

const hrs = document.getElementById("hrs");
const mins = document.getElementById("mins");
const secs = document.getElementById("secs");
const week = document.getElementById("week");

/**
 * This function implements a countdown timer.
 * @param {Number} seconds - The number of seconds for the countdown timer.
 */
export function countdown(seconds) {
  let intervalId = setInterval(function () {
    let hours = Math.floor(seconds / 3600);
    let minutes = Math.floor((seconds % 3600) / 60);
    let myseconds = seconds % 60;
    seconds--;
    updateProgressBar(seconds, 60, 1);

    if (seconds < 0) {
      clearInterval(intervalId);
    }
    hrs.innerText = formatTime(hours);
    mins.innerText = formatTime(minutes);
    secs.innerText = formatTime(myseconds);
  }, 1000);
}



/**
 * This function formats the time to a human-readable format. eg. 1:1 will give 01:01
 * @param {Number} time - The time in seconds to be formatted.
 * @returns {String} - The formatted time string, with leading zeros if necessary.
 */
function formatTime(time) {
  return time < 10 ? `0${time}` : time;
}



/**
 * This function updates the progress bar on the page based on the start time, duration and reduceAfter time.
 * Always make sure the duration is greater than the startTime
 * @param {Number} startTime - The start time of the progress bar, in seconds.
 * @param {Number} duration - The total duration of the progress bar, in seconds and tells the progressbar where to start from.
 * @param {Number} reduceAfter - The time interval, in seconds, at which the progress bar is updated.
 */
let previousPercent = 100; //stores the percentage and the percent width is not repeatedly updated
function updateProgressBar(startTime, duration, reduceAfter) {
  const progressBar = document.querySelector(".Rectangle_37");
  let elapsedTime = duration - startTime;
  let percent = (((duration - elapsedTime) / duration) * 100);
  // console.log(elapsedTime)
  // console.log("startTime",startTime)

  // console.log("previousPercent",previousPercent)
  // console.log("percent",percent)
  if (previousPercent >= percent) {
    // console.log("sjsjdds================================")

    progressBar.style.width = percent + "%";
    previousPercent = percent;
  }
  if (percent > 0) {
      // requestAnimationFrame(()=>{updateProgressBar(startTime)});
    setTimeout(function () {
      updateProgressBar(startTime, duration, reduceAfter);
    }, reduceAfter * 1000);
  }else{
    previousPercent = 100;

  }
  startTime--;
}

// countdown(30);
