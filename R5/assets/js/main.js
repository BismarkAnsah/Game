/*--------------------------------------------------------------
# Tooltip JS
--------------------------------------------------------------*/
// $(document).ready(function () {
// })

const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => {}
);


/**
 * @param input string to tuncate
 * @param truncateAfter tuncate after character at
 */
export function truncateEllipsis(input, truncateAfter) {
  if (input.length > truncateAfter) {
    return input.substring(0, truncateAfter) + "...";
  }
  return input;
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
