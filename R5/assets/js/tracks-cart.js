// console.log(timePassed);
$(function () {
let result;

$(document).on("click", "#decrement", function (e) {
  $(this).siblings()
  let currentValue = $(this).siblings(".input-multibet-counter").val().replace(/\D/g, '');
  // console.log($(document).find(".input-multibet-counter").val().replace(/\D/g, ''));
  // console.log();

  result = $(this).siblings(".input-multibet-counter");
  if (currentValue > 1) {
    currentValue --;
    result.val("X" + currentValue);
  }
});

$(document).on("click", "#increment", function (e) {
  let currentValue = $(this).siblings(".input-multibet-counter").val().replace(/\D/g, '');
  console.log(currentValue);

  result = $(this).siblings(".input-multibet-counter");
  currentValue ++;
  result.val( "X" + currentValue);
});

const button = document.querySelector(".btn-mask-balance");
const mask_balance = document.querySelector(".mask-balance");
const unmask_balance = document.querySelector(".unmasked-balance");
let isMasked = false;

button.addEventListener("click", function () {
  if (isMasked) {
    mask_balance.classList.toggle("visually-hidden");
    unmask_balance.classList.toggle("visually-hidden");
    button.className = "fa-solid fa-eye";
    isMasked = false;
  } else {
    button.className = "fa-solid fa-eye-slash eye-slash";
    mask_balance.classList.toggle("visually-hidden");
    unmask_balance.classList.toggle("visually-hidden");
    isMasked = true;
  }
});


})


/**
 *
 *
 * @param {*} title
 * @param {*} button_type
 */
const showModal = (title, button_type) => {
  // showModal()
  // var myModal = new bootstrap.Modal(document.getElementById("m-betModal"));
  document.querySelector(".modal-title").innerText = title;
  document.querySelector(".button-type").innertext = button_type;
  // myModal.closest(".modal-title").innerHTML = "title.innerHTML";
  console.log(myModal);

  myModal.show();
};

/**
 *
 * scroll to and shows the cart area
 * @param {*} id
 */
export const showCartArea = (id) => {
  let triggerEl = document.getElementById(id);
  let tabTrigger = new bootstrap.Tab(triggerEl);

  bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
  $("html, body").animate(
    {
      scrollTop: $(".cart-track-bet").offset().top,
    },
    500
  );
};

// $(document).on("load click", ".nav-item-c:visible", function (e) {
//   console.log($(this).data());
// });

// document.getElementById("tableFixHead").addEventListener("click", function () {
  
// });
