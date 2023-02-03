/*--------------------------------------------------------------
# Tooltip JS
--------------------------------------------------------------*/
// $(document).ready(function () {
// })

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
console.log(tooltipTriggerList)
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
console.log(tooltipList)


/**
 * @param input string to tuncate
 * @param truncateAfter tuncate after character at
 */
export function truncate(input, truncateAfter) {
    if (input.length > truncateAfter) {
       return input.substring(0, truncateAfter) + '...';
    }
    return input;
};
