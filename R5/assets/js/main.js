/*--------------------------------------------------------------
# Tooltip JS
--------------------------------------------------------------*/
// $(document).ready(function () {
// })

const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
console.log(tooltipTriggerList);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);
console.log(tooltipList);

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

/** returns the count of remaining options in a select element */
export function checkRemainingSelectOptions(attr) {
  let selectedIndex = $(attr).prop("selectedIndex");
  let count = $(`${attr} option:gt(" ${selectedIndex} ")`).length;
  console.log(count);
  return count;
}
