/*--------------------------------------------------------------
# Tooltip JS
--------------------------------------------------------------*/
// $(document).ready(function () {
// })

const tooltipTriggerList = $(document).find('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => {console.log(tooltipTriggerList); new bootstrap.Tooltip(tooltipTriggerEl)}
);

// myTooltipEl.addEventListener('show.bs.tooltip', function () {
//   // do something...
//   console.log("show tooltip")
// })

// export const removeCart = (id) => {
//   console.log("cart removed")
// }



/**
 * Truncates a string with an ellipsis after a certain number of characters and replaces commas with spaces and pipes with commas and spaces.
 *
 * @param {string} input - The string to be truncated and modified.
 * @param {number} [truncateAfter=19] - The maximum length of the string before it should be truncated. Default value is 19 if not provided.
 * @returns {string} The truncated and modified string.
 */
export function truncateEllipsis(input, truncateAfter = 20) {
  if (input.length > truncateAfter) {
    // Replace commas with spaces and pipes with commas followed by spaces
    const modifiedInput = input.replace(/,/g, " ").replace(/\|/g, ", ");
    
    // Extract a substring of length `truncateAfter` from the modified input and add an ellipsis to the end
    return modifiedInput.substring(0, truncateAfter) + " ...";
  } else {
    // If the input string is not longer than `truncateAfter`, return the original string
    return input;
  }
}


/** returns the count of remaining options in a select element right from the current selected option*/
export function checkRemainingSelectOptions(attr) {
  let selectedIndex = $(attr).prop("selectedIndex");
  let count = $(`${attr} option:gt(" ${selectedIndex} "), option:eq(" ${selectedIndex} ")`).length;
  console.log(count);
  return count;
}

// selectTrackIds.push(trackJson[nextIndex].trackId);
//     $('select[name="first_draw"]').append(
//     `<option value="${trackJson[nextIndex].trackId}">${trackJson[nextIndex].trackId}</option>`
// );

