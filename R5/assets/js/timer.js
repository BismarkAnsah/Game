/*--------------------------------------------------------------
# Timer JS
--------------------------------------------------------------*/

const hrs = document.getElementById("hrs");
const mins = document.getElementById("mins");
const secs = document.getElementById("secs");
// const week = document.getElementById("week");

/**
 * This function implements a countdown timer.
 * @param {Number} seconds - The number of seconds for the countdown timer.
 */
// export function countdown(seconds) {
//   let intervalId = setInterval(function () {
//     let hours = Math.floor(seconds / 3600);
//     let minutes = Math.floor((seconds % 3600) / 60);
//     let myseconds = seconds % 60;
//     seconds--;
//     updateProgressBar(seconds, 60, 1);

//     if (seconds < 0) {
//       clearInterval(intervalId);
//     }
//     hrs.innerText = formatTime(hours);
//     mins.innerText = formatTime(minutes);
//     secs.innerText = formatTime(myseconds);
//   }, 1000);
// }

/**
 * Updates a progress bar and a displayed countdown timer based on the time left and the total time.
 * @param {number} timeleft - The number of seconds left in the countdown.
 * @param {number} timetotal - The total number of seconds in the countdown.
 * @param {jQuery} $element - The jQuery object for the progress bar element.
 */
export let progress = (timeleft, timetotal, $element) => {
  if (timeleft === 0) 
    return;
  
  // Get the elements that will display hours, minutes, and seconds
  // let hrs = document.getElementById("hrs");
  // let mins = document.getElementById("mins");
  // let secs = document.getElementById("secs");

  // Calculate the total number of minutes remaining
  let totalMinutes = Math.floor(timeleft / 60);

  // Calculate the number of seconds remaining, as well as the number of hours and minutes remaining
  let seconds = timeleft % 60;
  let hours = Math.floor(totalMinutes / 60);
  let minutes = totalMinutes % 60;

  // Calculate the current width of the progress bar based on the time left and the total time
  let progressBarWidth = (timeleft * $element.width()) / timetotal;

  // Update the progress bar by animating its width
  $element
    .find("div")
    .animate({ width: progressBarWidth }, 500)

  // Update the displayed time in hours, minutes, and seconds
  // Format the time to add a leading zero if the number is less than 10
  if (timeleft >= 0) {
    let timeOut = setTimeout(function () {
      progress(timeleft - 1, timetotal, $element);
      hrs.innerText = formatTime(hours);
      mins.innerText = formatTime(minutes);
      secs.innerText = formatTime(seconds);
      clearTimeout(timeOut);
    }, 1000);
  }else{
    clearTimeout(timeleft);

  }
  // console.log("timeleft", timeleft);
  // console.log("===============super==================")
}





/**
 * This is a helper function that formats a number to add a leading zero if the number is less than 10
 * This function formats the time to a human-readable format. eg. 1:1 will give 01:01
 * @param {Number} time - The time in seconds to be formatted.
 * @returns {String} - The formatted time string, with leading zeros if necessary.
 */
let formatTime = (time) => {
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
  let progressBar = $(".Rectangle_37");
  let elapsedTime = duration - startTime;
  let percent = (((duration - elapsedTime) / duration) * 100);
  // console.log(elapsedTime)
  // console.log("startTime",startTime)

  // console.log("previousPercent",previousPercent)
  // console.log("percent",percent)
  if (previousPercent >= percent) {
    // console.log("sjsjdds================================")

    progressBar.animate({ width: percent }, 500);
    previousPercent = percent;
  }
  if (percent > 0) {
      requestAnimationFrame(()=>{updateProgressBar(startTime)});
    setTimeout(function () {
      updateProgressBar(startTime, duration, reduceAfter);
    }, reduceAfter * 1000);
  }else{
    previousPercent = 100;

  }
  startTime--;
}

// countdown(30);
