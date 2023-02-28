/*--------------------------------------------------------------
# Tooltip JS
--------------------------------------------------------------*/
// $(document).ready(function () {
// })

const tooltipTriggerList = $(document).find('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) =>  new bootstrap.Tooltip(tooltipTriggerEl)
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
    return input.replace(/,/g, " ");
  }
}


/** returns the count of remaining options in a select element right from the current selected option*/
export function checkRemainingSelectOptions(attr) {
  let selectedIndex = $(attr).prop("selectedIndex");
  let count = $(`${attr} option:gt(" ${selectedIndex} "), option:eq(" ${selectedIndex} ")`).length;
  console.log(count);
  return count;
}

export function formatDateString(inputString) {
  const year = inputString.substr(0, 8);
  const suffix = inputString.substr(8);
  return year  + "-" + suffix;
}

$(document).ready(function() {
  let quantityInput = $('#quantityInput');
  let upButton = quantityInput.next('button');
  let downButton = quantityInput.prev('button');

  upButton.prop('disabled', true);
  downButton.prop('disabled', true);
});

$(document).ready(function() {
  // Get the input element
  let input = $("#betID");
  // Set the readOnly property to true
  input.readOnly = true;
  $("#betID").on("input", function(e) {
    e.preventDefault();
    console.log("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss")
    
  })

  let originalValue

  $(document).on("focus", "#betID", function(e) {
    originalValue = $(this).val()
    console.log("originalValue", originalValue)

  })

  

  $(document).on("keydown", "#betID", function(event) {
    // Prevent the default behavior of the input field
     originalValue = $(this).val();
    event.preventDefault();
    if ($(this).val() != originalValue) {
      $(this).val(originalValue);
    }
    
    

  });
  $(document).on("input", "#betID", function(event) {
    // Prevent the default behavior of the input field
    console.log("this",$(this).val())
    // event.preventDefault();
    if ($(this).val() != originalValue) {
      $(this).val(originalValue);
    console.log("keydown================================")

    }

  });
});
// let input = $(document).find("#betID");

// let input = $("#betID")
// let observer = new MutationObserver(function(mutationsList, observer) {
//     // Loop through the mutationsList to check for changes to the input field's value
//     for (let mutation of mutationsList) {
//       if (mutation.type === 'attributes' && mutation.attributeName === 'value') {
//         // The value of the input field has changed
//         console.log("New value: " + input.val());
//       }
//     }
  

// });
// // observer.observe(input, { attributes: true });


// function addObserverIfDesiredNodeAvailable() {
//   let inputs = document.querySelectorAll('#betID');


//   if(!inputs) {
//       //The node we need does not exist yet.
//       //Wait 500ms and try again
//       window.setTimeout(addObserverIfDesiredNodeAvailable,11500);
//       return;
//   }
//   // let config = {childList: true};
//   inputs.forEach(function(input) {
//     observer.observe(input, { attributes: true });
//   })
// }
// addObserverIfDesiredNodeAvailable();
// observer.disconnect();


// selectTrackIds.push(trackJson[nextIndex].trackId);
//     $('select[name="first_draw"]').append(
//     `<option value="${trackJson[nextIndex].trackId}">${trackJson[nextIndex].trackId}</option>`
// );

