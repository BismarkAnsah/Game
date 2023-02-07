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

/** check and unchecks track id checkboxes */
$(document).on("change", "#mmaster", function (e) {
  if ($(this).is(":checked")) {
    $(".slave").prop("checked", true);
  } else {
    $(".slave").prop("checked", false);
  }
});

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
 *
 * @param {*} id
 */
const showCartArea = (id) => {
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

$(document).on("load click", ".nav-item-c:visible", function (e) {
  console.log($(this).data());
});

document.getElementById("tableFixHead").addEventListener("click", function () {
  const rows = document.querySelectorAll("tr.track-entry");
  const data = [];

  for (const row of rows) {
    const cells = row.querySelectorAll("td");
    console.log(cells)
    const obj = {};
    if ($(cells[1]).find(".slave").is(":checked")) {
      console.log(cells[1])

      // console.log(cells[1].firstElementChild.firstElementChild)
      console.log($(cells[1]).find(".slave").is(":checked"))
      
    obj["trackNo"] = cells[0].textContent;
    obj["betId"] = cells[1].textContent.match(/\d/g).join("");
    obj["multiplier"] = $(cells[2]).find(".track-multiplier").val();
    obj["betAmt"] = cells[3].textContent;
    // obj["estimatedDrawTime"] = cells[4].textContent;
    //   obj["nextDay"] = cells[5].textContent;
    data.push(obj);
    }
    // console.log($(cells[2]).find(".track-multiplier").val())
  }

  console.log(data);
});
