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

/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

  'use strict';
  
  // class helper functions from bonzo https://github.com/ded/bonzo
  
  function classReg( className ) {
    return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
  }
  
  // classList support for class management
  // altho to be fair, the api sucks because it won't accept multiple classes at once
  let hasClass, addClass, removeClass;
  
  if ( 'classList' in document.documentElement ) {
    hasClass = function( elem, c ) {
      return elem.classList.contains( c );
    };
    addClass = function( elem, c ) {
      elem.classList.add( c );
    };
    removeClass = function( elem, c ) {
      elem.classList.remove( c );
    };
  }
  else {
    hasClass = function( elem, c ) {
      return classReg( c ).test( elem.className );
    };
    addClass = function( elem, c ) {
      if ( !hasClass( elem, c ) ) {
        elem.className = elem.className + ' ' + c;
      }
    };
    removeClass = function( elem, c ) {
      elem.className = elem.className.replace( classReg( c ), ' ' );
    };
  }
  
  function toggleClass( elem, c ) {
    let fn = hasClass( elem, c ) ? removeClass : addClass;
    fn( elem, c );
  }
  
  let classie = {
    // full names
    hasClass: hasClass,
    addClass: addClass,
    removeClass: removeClass,
    toggleClass: toggleClass,
    // short names
    has: hasClass,
    add: addClass,
    remove: removeClass,
    toggle: toggleClass
  };
  
  // transport
  if ( typeof define === 'function' && define.amd ) {
    // AMD
    define( classie );
  } else {
    // browser global
    window.classie = classie;
  }
  
  })( window );
  
  
  /**
   * modalEffects.js v1.0.0
   * http://www.codrops.com
   *
   * Licensed under the MIT license.
   * https://www.opensource.org/licenses/mit-license.php
   * 
   * Copyright 2013, Codrops
   * http://www.codrops.com
   */
  let ModalEffects = (function() {
  
    function init() {
  
      let overlay = document.querySelector( '.md-overlay' );
  
      [].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {
  
        let modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
          close = modal.querySelector( '.md-close' );
  
        function removeModal( hasPerspective ) {
          classie.remove( modal, 'md-show' );
  
          if( hasPerspective ) {
            classie.remove( document.documentElement, 'md-perspective' );
          }
        }
  
        function removeModalHandler() {
          removeModal( classie.has( el, 'md-setperspective' ) ); 
        }
  
        el.addEventListener( 'click', function( ev ) {
          classie.add( modal, 'md-show' );
          overlay.removeEventListener( 'click', removeModalHandler );
          overlay.addEventListener( 'click', removeModalHandler );
  
          if( classie.has( el, 'md-setperspective' ) ) {
            setTimeout( function() {
              classie.add( document.documentElement, 'md-perspective' );
            }, 25 );
          }
        });
  
        close.addEventListener( 'click', function( ev ) {
          ev.stopPropagation();
          removeModalHandler();
        });
  
      } );
  
    }
  
    init();
  
  })();