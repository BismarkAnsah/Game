

// console.log(timePassed);

const decrementButton = document.getElementById("decrement");
const incrementButton = document.getElementById("increment");
const result = document.getElementById("btnMultiBetCount");
let currentValue = 1;

decrementButton.addEventListener("click", function () {
  if (currentValue > 1) {
    currentValue -= 1;
    result.value = "X" + currentValue;
  }
});

incrementButton.addEventListener("click", function () {
  currentValue += 1;
  result.value = "X" + currentValue;
});

const button = document.querySelector(".btn-mask-balance");
const mask_balance = document.querySelector(".mask-balance");
const unmask_balance = document.querySelector(".unmasked-balance");
let isMasked = false;

button.addEventListener("click", function () {
  if (isMasked) {
    mask_balance.classList.toggle("visually-hidden");
    unmask_balance.classList.toggle("visually-hidden");
    button.className = "bi bi-eye";
    isMasked = false;
  } else {
    button.className = "bi bi-eye-slash";
    mask_balance.classList.toggle("visually-hidden");
    unmask_balance.classList.toggle("visually-hidden");
    isMasked = true;
  }
});

const master = document.getElementById("master");
const slaves = document.querySelectorAll(".slave");

// console.log(master);
master.addEventListener("change", function () {
  for (let slave of slaves) {
    slave.checked = master.checked;
  }
});

const showModal = (title, button_type) => {
  // showModal()
  // var myModal = new bootstrap.Modal(document.getElementById("m-betModal"));
  document.querySelector(".modal-title").innerText = title;
  document.querySelector(".button-type").innertext = button_type;
  // myModal.closest(".modal-title").innerHTML = "title.innerHTML";
  console.log(myModal);

  myModal.show();
};

const showCartArea = (id) => {
  let triggerEl = document.getElementById(id)
  let tabTrigger = new bootstrap.Tab(triggerEl)
  
  bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
  $('html, body').animate({
    scrollTop: $(".cart-track-bet").offset().top
  }, 500);
};

