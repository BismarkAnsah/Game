import * as $C from "../libs/combinatorics/combinatorics.js";
import { truncateEllipsis, checkRemainingSelectOptions } from "./main.js";
import { showCartArea } from "./tracks-cart.js";
import { countdown, progress } from "./timer.js";
import { startAnimation } from "../libs/velocity/slot_animator.js";
import { chunkArray, getCombination } from "./utilityFunctions.js";
//todo: test next day.
/**hides and shows balance */
// import fixedPlace from "./c1`omponents/fixed_place.js";

$(".eye, .eye-slash").click(function () {
  $(".balance-box").toggleClass("show-balance");
});

export class Royal5utils {
  /***
   *
   * README.md
   *
   * methods use jQuery style selections.
   * parameter names use css selectors.
   * For example,  parameters named 'target' and 'effects' are css selectors.
   * 'effects' adds the class to the 'target'
   *
   */
  // gameId = 9;
  // type = "All 5 group 5";
  // sample1 = 1;
  // sample2 = 1;
  // multiplier = 1;
  // unitAmt = 1;
  // errorBets = 0;
  // allBets = [];
  // betAmt = "";
  // rows = {};
  // cart = [];
  // readyData = {};

  decimalPlaces = 3;
  page;
  groupName = ".group-joint";
  units = [2, 1, 0.2, 0.1, 0.02, 0.01, 0.002, 0.001];
  multiplier = 1;
  unitAmt = 2;
  betType = "";
  totalBets = 0;
  totalDraws = 10;
  firstMultiplier = 1;
  multiplyAfterEvery = 1;
  multiplyBy = 1;
  trackJson;
  savepoint = {
    cart: [],
    data: {
      gameId: 1,
      // betSelection,
      // allSelections,
      // multiplier,
      // totalBets,
      // eachBet
    },
  };

  constructor() {
    // this.pageId = pageId;
    // this.page = $(pageId);
  }

  /**
   * used to hide and show elements with multiple classes. Useful in switching tabs and interfaces.
   * @param {string} hideAll elements with this class is hidden. eg. '.test-page' hides all elements with this class
   * @param {string} except  unhides all elements with this class.
   */
  hideAllExcept(hideAll, except) {
    $(hideAll).hide();
    $(except).show();
  }

  /**
   * selects element in jQuery style
   * @param {string} element jQuery element selector
   * @returns jQuery element
   */
  $(element = "") {
    // return element ? $(this.pageId).find(element) : this.$(this.pageId);
    return $(element);
  }


  /**
   *
   * gets current bet type
   * @return {*} currentBetType
   * @memberof Royal5utils
   */
  getBetType() {
    let svg = $(".nav-item-c:visible.active-svg");
    let currentBetType = svg.find(".nav-text").text();

    return currentBetType;
  }

  /**
   * Retrieves track information such as total draws, total amount of bets, and total amount to pay.
   * @function
   * @returns {Object} An object containing the track information.
   * @memberof Royal5utils
   */
  getTrackInfo() {
    let trackInfo = {};

    // Retrieve the total number of draws from the track element with ID "trackInfo" and class "totalDraws".
    let total_draws = game.getTrackElement("trackInfo", "totalDraws");

    // Retrieve the total amount of bets from the track element with ID "trackInfo" and class "eachTotalBets",
    // and multiply it by the total number of draws.
    let total_amt_bets =
      game.getTrackElement("trackInfo", "eachTotalBets") * total_draws;

    // Retrieve the total amount to pay from the track element with ID "trackInfo" and class "totalBetAmt".
    let total_amt_to_pay = game.getTrackElement("trackInfo", "totalBetAmt");

    // Check if the "stop if win" checkbox is checked, and set the value of stop_if_win accordingly (1 if checked, 0 if not).
    let stop_if_win;
    $("#stop_if_win").is(":checked") ? (stop_if_win = 1) : (stop_if_win = 0);

    // Check if the "stop if not win" checkbox is checked, and set the value of stop_if_not_win accordingly (1 if checked, 0 if not).
    let stop_if_not_win;
    $("#stop_if_not_win").is(":checked")
      ? (stop_if_not_win = 1)
      : (stop_if_not_win = 0);

    // Store the retrieved values in the trackInfo object using descriptive keys.
    trackInfo["total_draws"] = total_draws;
    trackInfo["total_amt_bets"] = total_amt_bets;
    trackInfo["total_amt_to_pay"] = total_amt_to_pay;
    trackInfo["stop_if_win"] = stop_if_win;
    trackInfo["stop_if_not_win"] = stop_if_not_win;

    // Return the trackInfo object.
    return trackInfo;
  }

  /**
   * Sets the contents of the top track table with the given track information.
   * @function
   * @param {Object} trackJson - An object containing the track information.
   */
  setTrackTopTableContents(trackJson) {
    // Find the track table with class "track-table-top".
    let track_table = $(document).find(".track-table-top");

    // Set the HTML contents of the track table row with the appropriate table columns,
    // using values obtained from various game methods and the given trackJson object.
    track_table.html(`<tr class="track-table-top-items">
    <th scope="row">${1}</th>
    <td class="m-group-type">${game.getBetType()}</td>
    <td class="text-truncate text-center"><span style="max-width: 80px" class="m-detail" >${truncateEllipsis(
      game.getSavedData().userSelections
    )}</span></td>
    <td class="m-bet">${game.getSavedData().totalBets}</td>
    <td class="m-units">${game.getSavedData().unitStaked}</td>
    <td>
      <span class="m-currency-symbol">&yen;</span>&nbsp;<span class="m-currency">${
        game.getSavedData().totalBetAmt
      }</span>
    </td>
  </tr>`);

    // Update the text contents of various elements on the track UI using values from the given trackJson object.
    $(".track__total__amt__to_pay").text(trackJson.trackInfo.totalBetAmt);
    $(".track__total__draws").text(trackJson.trackInfo.totalDraws);
    $(".track__total__bets").text(
      game.calcTotalBets() * trackJson.trackInfo.totalDraws
    );

    // Set the text contents of the element with class "track__total__balance" to the value of the balance variable (which is not defined in this function).
    $(".track__total__balance").text(balance);
  }

  /**
   *
   * @returns the page id of the active class. eg '#all5', '#all4'
   */
  getPageId() {
    return this.pageId;
  }

  /**
   * applies colors to all target elements [0-9] after selection.
   * @param {string} row target row. eg row1, row2
   */
  selectAll(row, effects) {
    this.$(row).addClass(effects);
  }

  /**
   * applies colors to all target elements [0-5] after selection.
   * @param {string} row target row. eg row1, row2
   * a
   */
  selectBig(row, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(`${row}:nth-child(n+7)`).addClass(effects);
  }

  /**
   * applies colors to all target elements [0-5] after selection.
   * @param {string} row target row. eg row1, row2
   */
  selectSmall(row, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(`${row}:nth-child(-n+6)`).addClass(effects);
  }

  /**
   * applies colors to all target elements [0,2,4,6,8] after selection.
   * @param {string} row target row. eg row1, row2
   * @param {string} effects the css class containing the styles to apply
   */
  selectEven(row, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(`${row}:nth-child(even)`).addClass(effects);
  }

  /**
   * applies colors to all target elements [1,3,5,7,9] after selection.
   * @param {string} row target row. eg row1, row2
   * @param {string} effects the css class containing the styles to apply
   */
  selectOdd(row, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(`${row}:nth-child(odd)`).addClass(effects);
  }

  /**
   * removes colors from target elements [0-9] after selection.
   * @param {string} row target row. eg row1, row2
   * @param {string} effects the css class to remove
   */
  clear(row, effects = "active-btn") {
    this.$(row).removeClass(effects);
  }

  /**
   * applies colors to all target elements [2,1,0.2,0.1,0.002...] after selection.
   * @param {string} row target row. eg row1, row2
   * @param {string} effects the css class containing the styles to apply
   */
  selectAmount(row, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(row).addClass(effects);
  }

  /**
   * applies colors to all target number button after selection.
   * @param {string} row target row. eg row1, row2
   * @param {string} effects the css class containing the styles to apply
   */
  selectElement(target, effects = "active-btn") {
    this.$(target).removeClass(effects);
    console.log(this.$(this));
    this.$(this).addClass(effects);
  }

  // toggleBetsDisplay(totalBets) {
  //   if (totalBets) {
  //     this.$(".least-bet-info").hide();
  //   } else this.$(".total-bets-info").hide();
  // }

  // applyEffects(effectsClass, elementSelector) {
  //   this.$(elementSelector).addClass(effectsClass);
  // }

  /**
   * Hides all game interfaces and displays specific interface elements based on given parameters.
   * @param {boolean} [label=false] - If false, shows only the first row of interface. If an array is provided, displays interface elements for each label in the array.
   * @param {boolean} [manual=false] - If true, shows the manual game interface.
   */
  createGameInterface(label = false, manual = false) {
    this.$(".game-interface").hide();
    if (!manual) {
      this.$(".interface-item").hide();
      this.$(".game-interface").hide();
      if (!label) {
        this.$(`.interface-item>.num-group.row1>label`).hide();
        this.$(`.game-interface .row${1}`).show();
      } else {
        for (let i = 1; i <= label.length; i++) {
          this.$(`.interface-item>.num-group.row${i}>label`).html(label[i - 1]);
          this.$(`.interface-item>.num-group.row${i}>label`).show();
          this.$(`.game-interface .row${i}`).show();
        }
      }
      this.$(".game-interface.allRows").show();
    } else {
      this.$(".game-interface").hide();
      this.$(".game-interface.manual").show();
    }
  }

  /**
   * append to cart by adding to HTML DOM.
   * @param {string} type the selected game type. eg. All 5 Group 120
   * @param {string} detail the selections made by the user eg 0,1,2|2,3 for two rows selectors 7||5 for three rows selectors
   * @param {number} bets total number of bets
   * @param {number} unit each bet unit
   * @param {number} multiplier bet multiplier
   * @param {number} betAmt total amount for selected bet
   * @param {number} index used to identify particular item in cart
   */
  appendRow(type, detail, bets, unit, multiplier, betAmt, index) {
    // Creates the HTML code for the cart row
    let cartItem = `
    <tr id="cart-row${index}" class="m-cart-row">
      <th scope="row">${type}</th>
      <td class="cart-item-details" data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="${detail}">${truncateEllipsis(
      detail
    )}</td>
      <td class="cart-item-bets">${bets}</td>
      <td class="cart-item-unit">${unit}</td>
      <td>
        ${multiplier}
        <div class="row visually-hidden">
          <ul class="multibetCounter">
            <li data-btn-type="decrement" class="cart-decrement" id="decrement">
              <span class="romoveBtn"><i class="bi bi-dash"></i></span>
            </li>

            <input
              class="input-multibet-counter text-center"
              id="btnMultiBetCount"
              name="multiBetCount"
              type="text"
              value="${multiplier}"
              disabled
            />
            <li data-btn-type="increment" id="increment" class="cart-increment">
              <span class="romoveBtn"><i class="bi bi-plus"></i></span>
            </li>
          </ul>
        </div>
      </td>
      <td class="cart-item-betamt"><span class="fa-solid fa-yen-sign currency"></span>&nbsp;&nbsp;${betAmt}</td>
      <td><span class="bi bi-trash3 delete-cart" data-id="${index}"></span></td>
    </tr>`;

    let cartItemsBets = `
    <tr>
      <th>
          <h5>
              Total <strong class="cart-total-bets total-bets">${
                game.sumBetAmtAndBets(cart)[1]
              }</strong> bets
          </h5>
          <h6>Total amt. <strong class="text-danger  cart-total-bet-amt">${
            game.sumBetAmtAndBets(cart)[0]
          }</strong></h6>
      </th>
    </tr>
    <tr>
      <th>
          <button class="cart-btn-track m-btn-orange">Track</button>
          <button class="btn-bet-now">Bet Now</button>
      </th>
    </tr>`;

    $(this).fadeIn("slow", function () {
      $(".cart-items").append(cartItem);
      $(".cart-items-track-bets").html(cartItemsBets);
      showCartArea("cart-tab");
      $("#cart-submit").show();
      $(".clear-cart").show();
    });
  }

  /**
   *
   *
   * @param {*} obj
   * @return {*}
   * @memberof Royal5utils
   */
  //  sumBetAmtAndBets(obj) {
  //     const results = [];

  //     for (const key in obj) {
  //       const totalBetAmt = obj[key].totalBetAmt;
  //       const totalBets = obj[key].totalBets;
  //       const sum = totalBetAmt + totalBets;
  //       results.push(sum);
  //     }

  //     return results;
  //   }
  /**
   * Calculates the sum of total bet amount and total bets of items in a cart
   * @param {Object} cart - The cart object containing items with total bet amount and total bets
   * @returns {Array} - Array containing sum of total bet amount and total bets
   */
  sumBetAmtAndBets(cart) {
    let cartObject = cart;
    let sumTotalBets = 0;
    let sumTotalBetAmt = 0;
    const results = [];
    // Iterate through each item in the cart object and calculate sum of total bets and total bet amount
    for (const key in cartObject) {
      const totalBetAmt = cartObject[key].totalBetAmt;
      const totalBets = cartObject[key].totalBets;
      sumTotalBets += totalBets;
      sumTotalBetAmt += totalBetAmt;
    }
    // Add sum of total bet amount and total bets to the results array after fixing any arithmetic issues
    results.push(this.fixArithmetic(sumTotalBetAmt), sumTotalBets);
    return results;
  }

  /**
   * Removes an item from the cart object based on its ID.
   * @param {number} id - The ID of the item to be removed.
   */
  removeFromCart(id) {
    delete cart[id];
    // game.pushToCart(cart);
  }

  /**
   *Generates select options for the first draw in a game based on the current bet id and date time.
   *@param {string} [currentBetId="202301310001"] - The current bet id to start generating from.
   *@param {string} [idDateTime="2023-01-31 23:20:45"] - The date time of the current bet id.
   *@memberof Royal5utils
   */
  generateSelectOptions(
    currentBetId = drawData.betId,
    idDateTime = drawData.drawDatetime
  ) {
    let selectTrackIds = "";
    for (let i = 0; i < 120; i++) {
      currentBetId = game.generateNextBetId(
        currentBetId,
        idDateTime,
        intervalMinutes
      );
      idDateTime = game.addMinutes(idDateTime, intervalMinutes);

      selectTrackIds += `<option data-date-to-start="${
        game.getDate(idDateTime) + " " + game.getTime(idDateTime)
      }" value="${currentBetId}">${currentBetId} ${
        i === 0 ? "Current" : ""
      }</option>`;
    }

    $('select[name="first_draw"]').html(selectTrackIds);
  }

  /**
   *
   * Changes the current button based on the current bet ID and the server's next bet ID.
   * @memberof Royal5utils
   */
  changeCurrentButton() {
    let currentBetId = $(document)
      .find("table tbody.track-data tr.track-entry, table tbody.track-data tr.track__entry_p")
      .attr("value");
    console.log("Changing current button to", currentBetId);

    let btn_to_change = $(document).find(
      "table tbody.track-data tr.track-entry .current:visible, table tbody.track-data tr.track__entry_p .current:visible"
    );
    // If the current bet ID is not the same as the server's next bet ID, change the current button
    if (currentBetId !== serverDrawNum.nextBetId) {
      btn_to_change.addClass("visually-hidden");
      btn_to_change
        .closest("tr.track-entry")
        .next("tr.track-entry")
        .find(".m-btn-orange")
        .slice(0, 1)
        .removeClass("visually-hidden");
    }
  }
  /**
   * creates a json object of the data in track
   * @param {string} firstDrawDate draw date time of the first bet in track. eg '2025-01-01 00:02:55'
   * @param {string} firstDrawId draw id of the first bet in track. eg '201501010005'
   * @param {number} totalDraws total bets in track.
   * @param {number} firstMultiplier draw multiplier of the first bet in track.
   * @param {number} multiplyAfterEvery multiplier changes after every "multiplyAfterEvery" in track. eg if multiplyAfterEvery = 2, multiplier changes after every two datasets in track.
   * @param {number} multiplyBy multipliers multiplier by this value after every "multiplyAfterEvery"
   * @param {number} unitAmt unit amount of each track.
   * @returns json data of all elements in track
   */
  createTrackJson(
    firstDrawDate,
    betId,
    totalDraws,
    firstMultiplier,
    multiplyAfterEvery,
    multiplyBy,
    eachBetAmt,
    totalBets
  ) {
    // firstDrawId = parseInt(firstDrawId);
    let firstBetAmt = this.fixArithmetic(eachBetAmt * firstMultiplier);
    let nextDrawDate, nextBetId, betAmt;
    let track = {};
    let nextDay = false;
    let trackNo = 0;
    let multiplier = firstMultiplier;
    let totalBetAmt = firstBetAmt;
    let currentDrawDate = firstDrawDate;
    console.log(firstDrawDate);
    let currentBetId = betId;
    let estimatedDrawTime =
      this.getDate(currentDrawDate) + " " + this.getTime(currentDrawDate);
    track["trackInfo"] = {};
    track["bets"] = {};
    track["bets"][0] = {
      trackNo: ++trackNo,
      betId: currentBetId,
      multiplier: firstMultiplier,
      betAmt: firstBetAmt,
      estimatedDrawTime: estimatedDrawTime,
      nextDay: this.isNextDay(estimatedDrawTime),
      current: this.isCurrent(currentBetId),
    };

    for (let i = 1; i < totalDraws; i++) {
      nextDrawDate = new Date(
        this.addMinutes(currentDrawDate, intervalMinutes)
      );

      multiplier =
        trackNo % multiplyAfterEvery == 0
          ? multiplier * multiplyBy
          : multiplier;
      currentBetId = this.generateNextBetId(
        currentBetId,
        currentDrawDate,
        intervalMinutes
      );
      console.log(currentBetId, currentDrawDate)
      //todo: fix draw date time well
      multiplier = multiplier >= 99999 ? 99999 : multiplier;
      betAmt = this.fixArithmetic(multiplier * eachBetAmt);
      // betAmt = (multiplier * unitAmt).toFixed(4);
      totalBetAmt += betAmt;
      estimatedDrawTime =
        this.getDate(nextDrawDate) + " " + this.getTime(nextDrawDate);
      track["bets"][i] = {
        trackNo: ++trackNo,
        betId: currentBetId,
        multiplier: multiplier,
        betAmt: betAmt,
        estimatedDrawTime: estimatedDrawTime,
        nextDay: this.isNextDay(estimatedDrawTime),
        current: this.isCurrent(currentBetId),
      };
      if (!nextDay) nextDay = this.isNextDay(nextDrawDate);
      currentDrawDate = nextDrawDate;
    }
    track["trackInfo"]["totalBetAmt"] = this.fixArithmetic(
      this.fixArithmetic(totalBetAmt)
    );
    track["trackInfo"]["totalDraws"] = totalDraws;
    track["trackInfo"]["eachTotalBets"] = totalBets;
    track["trackInfo"]["eachBetAmt"] = eachBetAmt;
    return track;
  }


  createTrackYield(totalDraws, eachMultiplier, bonus, singleBetAmt) {
    let yieldData = {};
    yieldData.bets = {};
    let totalAmount = 0;
    let previousBetAmt = 0;
    let currentAmt;
    for (let i = 0; i < totalDraws; i++) {
      currentAmt = this.fixArithmetic(previousBetAmt + singleBetAmt);
      yieldData.bets[i] = {
        multiplier: eachMultiplier,
        betAmt: this.fixArithmetic(eachMultiplier * singleBetAmt),
        bonus: bonus,
        currentAmt: currentAmt,
        expectedAmt: this.fixArithmetic(currentAmt + singleBetAmt)
      }
      previousBetAmt = yieldData.bets[i].currentAmt;
    }

    yieldData.yieldInfo = {
      totalDraws: totalDraws,
      totalAmount: totalAmount
    }

    return yieldData;
  }

  
 /**
 * Calculates the yield multiplier for a bet, based on the minimum yield, bonus, 
 * previous payout, and single bet amount.
 *
 * @param {number} minimumYield - The minimum yield for the bet.
 * @param {number} bonus - The bonus for the bet.
 * @param {number} previousPaid - The previous payout for the bet.
 * @param {number} singleBetAmt - The amount of the single bet.
 * @returns {number} The yield multiplier for the bet.
 */
getYieldMultiplier(minimumYield, bonus, previousPaid, singleBetAmt) {
  let dividend = this.fixArithmetic(minimumYield * previousPaid) + this.fixArithmetic(100 * previousPaid);
  let divisor = this.fixArithmetic(100 * bonus) - this.fixArithmetic(100 * singleBetAmt) - this.fixArithmetic(minimumYield * singleBetAmt);
  let multiplier = this.fixArithmetic(dividend / divisor);
  return Math.ceil(multiplier);
}


  /**
   * creates a track interface by appending elements to HTML DOM.
   * @param {array} trackJson Json array containing all track data
   */
  createTrackInterface(trackJson) {
    let totalDraws = trackJson.trackInfo.totalDraws;
    console.log("trackJson.trackInfo.totalDraws", trackJson);

    let output = "";
    let hidden;
    for (let i = 0; i < totalDraws; i++) {
      output += `
      <tr data-index="${i}" class="track-entry" value="${trackJson["bets"][i].betId}">
        <td class="trackNo">${trackJson["bets"][i].trackNo}</td>
        <td>
          <ul class="list-unstyled  my-ul-el justify-content-between align-items-center g-2">
            <li class="col-md-2">
              <input
                data-index="${i}"
                class="form-check-input slave track-check"
                type="checkbox"
                name="track_number"
                id="track_number"
                checked
              />
            </li>
          <li class="col-md-7">
            <input type="number" class="betId" id="betID" readonly value="${trackJson["bets"][i].betId}">
          </li>
          <li class="col-md-3">`;
      hidden = trackJson["bets"][i].current ? "" : "visually-hidden";
      output += `<button class=" m-btn-orange p-2 current ${hidden}">current</button>`;
      hidden =
        trackJson["bets"][i].nextDay && !trackJson["bets"][i].current
          ? ""
          : "visually-hidden"; // makes sure 'next day' and 'current' don't appear simultaneously.
      output += `<button type="button" class="btn-next-day m-btn-indigo p-2 ${hidden}" data-toggle="button" aria-pressed="false" autocomplete="off">next day</button>`;
      output += `
      </li>
          </ul>
        </td>
        <td class="d-flex justify-content-center align-content-center mt-2">
          <div class="col-sm-4">
            <input 
              type="number"
              min="1"
              class="form-control track-multiplier"
              data-index="${i}"
            value="${trackJson["bets"][i].multiplier}"/>
          </div>
        </td>
        <td class="betAmt">${trackJson["bets"][i].betAmt}</td>
        <td class="estimatedDrawTime">${trackJson["bets"][i].estimatedDrawTime}</td>
      </tr>`;
    }
    $(".track-data").html(output);
    // $(".track-profit-data").html(output);
    $(".track__total__amt__to_pay").text(trackJson.trackInfo.totalBetAmt);
    $(".track__total__bets").text(
      trackJson.trackInfo.eachTotalBets * totalDraws
    );
    $(".track__total__draws").text(totalDraws);
  }

  createProfitTrackInterface(trackJson) {
    let totalDraws = trackJson.trackInfo.totalDraws;

    let output = "";
    let hidden;
    for (let i = 0; i < totalDraws; i++) {
      output += `
      <tr data-index="${i}" class="track__entry_p" value="${trackJson["bets"][i].betId}">
        <td class="trackNo">${trackJson["bets"][i].trackNo}</td>
        <td>
          <ul class="list-unstyled  my-ul-el justify-content-between align-items-center g-2">
            <li class="col-md-2">
              <input
                data-index="${i}"
                class="form-check-input slave track-check"
                type="checkbox"
                name="track_number"
                id="track_number"
                checked hidden disabled
              />
            </li>
          <li class="col-md-7">
            <input type="number" class="betId_p" id="betID" readonly value="${trackJson["bets"][i].betId}">
          </li>
          <li class="col-md-3">`;
      hidden = trackJson["bets"][i].current ? "" : "visually-hidden";
      output += `<button class=" m-btn-orange p-2 mopy current ${hidden}">current</button>`;
      hidden =
        trackJson["bets"][i].nextDay && !trackJson["bets"][i].current
          ? ""
          : "visually-hidden"; // makes sure 'next day' and 'current' don't appear simultaneously.
      output += `<button type="button" class="btn-next-day m-btn-indigo p-2 ${hidden}" data-toggle="button" aria-pressed="false" autocomplete="off">next day</button>`;
      output += `
      </li>
          </ul>
        </td>
        <td class="d-flex justify-content-center align-content-center mt-2">
          <div class="col-sm-4">
            <input 
              type="number"
              min="1"
              class="form-control track_multiplier_p"
              data-index="${i}"
            value="${trackJson["bets"][i].multiplier}"/>
          </div>
        </td>
        <td class="betAmt_p">${trackJson["bets"][i].betAmt}</td>
        <td class="estimatedDrawTime_p">${trackJson["bets"][i].estimatedDrawTime}</td>
      </tr>`;
    }
    // $(".track-data").html(output);
    $(".track-profit-data").html(output);
    $(".track__total__amt__to_pay_p").text(trackJson.trackInfo.totalBetAmt);
    $(".track__total__bets_p").text(
      trackJson.trackInfo.eachTotalBets * totalDraws
    );
    $(".track__total__draws_p").text(totalDraws);
  }

  /**
   * filters non-integer characters from data provided.
   * @param {number} value the value to be filtered
   * @param {number} minValue minimum acceptable integer value
   * @param {number} maxValue maximum acceptable integer value
   * @returns only numbers from passed data.the number returned exists between a range provided by 'minValue' and 'maxValue'
   */
  onlyNums(value, minValue = 1, maxValue = 99999) {
    let onlyNums = parseInt(value.replace(/\D+/g, ""));
    onlyNums = onlyNums ? onlyNums : minValue;
    onlyNums = onlyNums >= maxValue ? maxValue : onlyNums;
    return onlyNums;
  }

  /**
   * add some minutes to datetime provided.
   * @param {string} dateInput datetime to add minutes to
   * @param {number} minutes minutes to add. can be negative or positive.
   * @returns new datetime with minutes added. format 'YYYY-MM-DD HH:MM:SS'
   */
  addMinutes(dateInput, minutes = intervalMinutes) {
    let date = new Date(dateInput);
    return new Date(date.getTime() + minutes * 60000);
  }

  /**
   * appends bet id to datetime provided.
   * @param {string} dateInput draw date time
   * @param {string} id the id of the draw. counted from '1' at the beginning of the day.
   * @returns formatted bet id
   */
  getBetId(dateInput, id) {
    let date = new Date(dateInput);
    return (
      date.getFullYear() +
      String(date.getMonth() + 1).padStart(2, "0") +
      date.getDate() +
      String(id).padStart(4, "0")
    );
  }

  /**
   * gets time in HH:MM:SS format
   * @param {string} dateInput datetime to return time from
   * @returns time in HH:MM:SS format
   */
  getTime(dateInput) {
    let date = new Date(dateInput);
    return (
      String(date.getHours()).padStart(2, "0") +
      ":" +
      String(date.getMinutes()).padStart(2, "0") +
      ":" +
      String(date.getSeconds()).padStart(2, "0")
    );
  }

  /**
   * gets the next bet id from the current one. Bet id is of the form '202501260002'(YYYYMMDD+IDDD)
   * @param {string} currentBetId the current bet id eg '202501260002'
   * @param {string} idDateTime the date time '@currentBetId' was generated
   * @param {number} intervalMinutes interval of generation. useful in restarting bet generation on next day
   * @returns next bet id
   */
  generateNextBetId(
    currentBetId,
    idDateTime,
    intervalMinutes = intervalMinutes
  ) {
    let startId = "0001";
    let appendedId = String(currentBetId).slice(-4);
    let nextGenerationDateTime = this.addMinutes(idDateTime, intervalMinutes);
    let id = this.isNextDay(idDateTime, nextGenerationDateTime)
      ? startId
      : +appendedId + 1;
    return this.getBetId(nextGenerationDateTime, id);
  }

  /**
   * gets date in YYYY-MM-DD format
   * @param {string} date datetime to return date from
   * @returns date in YYYY-MM-DD format
   */
  getDate(date) {
    date = new Date(date);
    return (
      date.getFullYear() +
      "-" +
      String(date.getMonth() + 1).padStart(2, "0") +
      "-" +
      String(date.getDate()).padStart(2, "0")
    );
  }

  /**
   * checks whether dates provided happens on different dates
   * @param {string} date control date. date to be compared to
   * @param {string} checkDate does this date happens on the next day?
   * @returns true or false. true if nextDay
   */
  isNextDay(checkDate, date = drawData.drawDatetime) {
    const date1 = new Date(date);
    const date2 = new Date(checkDate);
    if (date1.getDate() != date2.getDate()) return true;
    return false;
  }
  /**
  * Checks if a given betId is the current bet.
  * @param {string} betId - The betId to check.
  * @param {string} currentBetId - The current betId to compare against. Default is serverDrawNum.nextBetId.
  * @returns {boolean} - Returns true if the given betId is the current bet, false otherwise.
  */
  isCurrent(betId, currentBetId = serverDrawNum.nextBetId) {
    return betId == currentBetId;
  }
  /**
   * removes item from cart. changes also happens on HTML DOM
   * @param {string} id the id of the item to be removed
   * @param {object} cart variable holding cart
   */
  removeRow(id, cart) {
    let key = id.split("-")[1];
    $(`#cart-row${key}`).fadeOut(300, function () {
      $(this).remove();
    });
    if (!Object.keys(cart).length) {
      $("#cart-submit").hide();
      $(".clear-cart").hide();
    }
  }

  /**
   * fetches data asynchronously from server.
   * @param {string} url resource URL
   * @param {object} data data to send before fetching
   * @param {callback} callback function to call when data is fetched successfully. first argument is the response object.
   * @returns response object from server
   */
  async fetchData(url, callback, data = []) {
    let results = await $.ajax({
      url: url,
      success: callback,
      data: data,
      error: function () {
        console.log("There was an error.");
      }
    });
    return JSON.parse(results);
  }

  // deleteFromCart(id, cart) {
  //   let key = id.split("-")[1];
  //   delete cart[key];
  // }

  /**
   * Truncates decimal. chops without rounding
   * @param {number} number data to truncate
   * @param {number} decimalPlaces number of decimal places to truncate
   * @returns truncated number
   */
  truncate(number, decimalPlaces = 3) {
    let indexOfDecimal = number.toString().indexOf(".");
    if (indexOfDecimal == -1) return number;
    let result = +number
      .toString()
      .slice(0, indexOfDecimal + (decimalPlaces + 1));
    return parseFloat(result);
  }
  everyInArray(array1, array2) {
    return array1.every((element) => {
      return array2.includes(element);
    });
  }

  /**
   * counts the number of decimal places of  a number
   * @param {number} value number supplied
   * @returns total decimal places
   */
  decimalCount(value) {
    const strValue = String(value);
    return strValue.includes(".") ? strValue.split(".")[1].length : 0;
  }
  /**
   * gets the n combination r of selection
   * @param {number} n total elements
   * @param {number} r sample taken at a time
   * @returns combination of a selection
   */
  getCombination(n, r) {
    if (!(r >= 0 && n >= r)) return 0;
    return this.factorial(n) / (this.factorial(r) * this.factorial(n - r));
  }

  // getTotalBets(row1Selections, row1Sample, row2Selections = false, row2Sample = false)
  // {
  //     let row1Len = row1Selections.length;

  //     if (!row2Selections) return this.getCombination(row1Selections, row1Sample);

  //     let row2Len = row2Selections.length;
  //     let row1Combinations = this.getCombination(row1Len, row1Sample);
  //     let row2Combinations = this.getCombination(row2Len, row2Sample);
  //     let combinationsWithRepeats = row1Combinations * row2Combinations;
  //     let repeats = row2Selections.filter((element) => row1Selections.includes(element)).length;
  //     console.log(repeats);
  //     let combinationsWithoutRepeats = -1; //
  //     let repeatsToRemove;
  //     if (row1Sample != 1) {
  //       repeatsToRemove = this.getCombination(row1Len - 1, row1Sample - 1) * repeats;
  //       combinationsWithoutRepeats = combinationsWithRepeats - repeatsToRemove;
  //     }
  //     if (row2Sample != 1) {
  //       repeatsToRemove = this.getCombination(row2Len - 1, row2Sample - 1) * repeats;
  //       combinationsWithoutRepeats = combinationsWithRepeats - repeatsToRemove;
  //     }

  //     return combinationsWithoutRepeats;
  // }

  /**
   * the factorial of a number
   * @param {number} num what is the factorial of 'num'? the 'num' what is supplied to the function
   * @returns the factorial of a number
   */
  factorial(num) {
    if (num == 0) return 1;
    if (num < 0) return 0;
    let result = num;
    for (let i = num - 1; i > 1; i--) result *= i;
    return result;
  }

  /**
   * when bet amount is divided by total bets, the resulting value is what I call 'pseudoUnit'.
   * unit amount is always selected from the default unit list ie  2, 1, 0.2, 0.1, 0.02, 0.01, 0.002 and 0.001
   * 'pseudoUnit' however sometimes gives a different value from the default unit list. 'pseudoUnit' is therefore used to calculate a unit
   * amount to give give a unit amount in the default list. This manipulation is done by increasing the multiplier.
   *
   *
   * @returns a unit amount influenced by a multiplier of 1.
   */
  calcPseudoUnit() {
    return this.truncate(this.betAmt / this.totalBets);
  }

  /**
   * fixes some rounding off multiplication errors in javascript. eg. 0.356 *10 gives 3.5599999999999996 in javascript. function returns 3.56 in such case.
   * @param {number} value data to fix
   * @returns correct value after javascript multiplication.
   */
  fixArithmetic(value) {
    return +value.toFixed(8);
  }

  /**
   * Algorithm that returns a unit amount from the defined list 2, 1, 0.2, 0.1, 0.02, 0.01, 0.002 or 0.001 no matter number of bets selected.
   * @returns a unit amount in the list 2, 1, 0.2, 0.1, 0.02, 0.01, 0.002 or 0.001
   */
  calcUnitAmt() {
    /**Old Implementation */
    //   let multiplier, unitAmt;
    //   this.units.some(unit=>{
    //   multiplier =  this.calcActualAmt()/(this.totalBets*unit);
    //     if(+multiplier.toFixed(8)%1 == 0){
    //         unitAmt = unit;
    //         return true;
    //     }
    // });
    //     return unitAmt;

    /**New Implementation */
    let pseudoUnit = this.calcPseudoUnit();
    let decimalCount = this.decimalCount(pseudoUnit);
    let pseudoMult = this.fixArithmetic(pseudoUnit * 10 ** decimalCount);
    let realUnit =
      pseudoMult % 2 == 0 ? 2 * 10 ** -decimalCount : 10 ** -decimalCount;
    return realUnit;
  }

  /**
   * gets bet amount when unit amount and multiplier are selected. There are different ways of getting bet amount.
   * can be entered manually(don't use this method in such cases, get from input,
   * and set it using setBetAmt()), can be select from model (use @calcBetAmtFromModel())
   * @returns bet amount.
   */
  calcBetAmt() {
    return this.fixArithmetic(this.totalBets * this.multiplier * this.unitAmt);
  }

  /**
   * gets the actual bet amount when user enters it manually. total bets multiplied by unit amount should always give you this value.
   * @returns rounded bet amount.
   */
  calcActualAmt() {
    let actualAmt =
      this.totalBets * this.truncate(this.betAmt / this.totalBets);
    return parseFloat(actualAmt.toFixed(3));
  }

  /**
   * gets multiplier when actual amount and unit amount are set.
   * @returns multiplier.
   */
  calcMultiplier() {
    let actualAmt = this.calcActualAmt();
    let unitAmt = this.calcUnitAmt();
    return +(actualAmt / (this.totalBets * unitAmt)).toFixed(8);
  }

  /**
   * gets the potential win of user.
   * @param {number} odds odds for a particular bet.
   * @returns the potential win
   */
  calcPrize(odds) {
    let winAmt = this.multiplier * this.unitAmt * odds;
    return this.truncate(winAmt);
  }
  /***model functions */
  // calcMultiplierFromModel(modelValue, balance)
  // {
  //   let multiplier;
  //   let tryAmount = modelValue*balance;
  //   let divisor = this.totalBets*this.unitAmt;
  //   multiplier = ~~(tryAmount/divisor);
  //   return multiplier;
  // }

  // calcActualAmtFromModel()
  // {
  //   let multiplier = this.calcMultiplierFromModel();
  //   let actualAmt = multiplier*this.totalBets*this.unitAmt;
  //   return actualAmt;
  // }

  /**
   * gets unit amount when user selects a particular model. Unit amount when user enters amount is different (it is calculated and selected from a predifined list ie 2, 1, 0.2, 0.1 ...)
   * from unit amount when user selects a particular model.
   * @param {number} balance your remaining money for betting.
   * @param {number} modelValue selected model. value can be 1/4, 1/3, 1/2 or 1 (All in) (of your remaining balance)
   * @returns unit amount when a model is selected. 'model can be 1/4, 1/3, 1/2 or 1 (All in)' of your remaining balance.
   */
  calcUnitFromModel(balance, modelValue) {
    if (!this.totalBets) return 1;
    let unitAmt = (balance * modelValue) / this.totalBets;
    return this.truncate(unitAmt);
  }

  /**
   * gets the amount of money from user's account that should be used for betting after selecting a particular model.
   * model can be 1/4, 1/3, 1/2 or 1 (All in).
   * @param {number} balance your remaining money for betting.
   * @param {number} modelValue selected model. value can be 1/4, 1/3, 1/2 or 1 (All in) (of your remaining balance)
   * @returns amount used for betting.
   */
  calcAmtFromModel(balance, modelValue) {
    let unitAmt = this.calcUnitFromModel(balance, modelValue);
    let amt = +(this.totalBets * unitAmt).toFixed(8);
    return amt;
  }

  
  /**
   * all bets generated from user selections. (works for only two rows and one row games eg. all 5 group120, all 5 group5, all 5 group60 and not all 5 combo)
   * @param  {...,number, array} rowsAndSamples (row1, row2, sample1, sample2) or (row1, sample1, row2, sample2)
   * @returns all possible combinations of bets.
   */
  allSelections(...rowsAndSamples) {
    let rows = [],
      samples = [],
      perms = [],
      results = [];

    //dividing rows and samples
    rowsAndSamples.forEach((element) => {
      Array.isArray(element) ? rows.push(element) : samples.push(element);
    });

    if (rows.length != samples.length) return -1;

    //perming rows
    let comb, val;
    rows.forEach((element, index) => {
      comb = new $C.Combination(element, samples[index]);
      for (val of comb) perms.push(val);
    });

    // getting non-repeating lists
    let startCheck = this.getCombination(rows[0].length, samples[0]);
    let i, j, permsSize;
    permsSize = perms.length;
    for (i = 0; i < startCheck; i++) {
      for (j = startCheck; j < permsSize; j++) {
        if (
          this.everyInArray(perms[j], perms[i]) ||
          this.everyInArray(perms[i], perms[j])
        ) {
          continue;
        }
        results.push([...perms[i], ...perms[j]]);
      }
    }
    return results.length == 0 ? perms : results;
  }

  /******logics */

  

  increaseMultiplier(target) {
    let multiValue = this.getValue(target);
    // let multiValue = parseInt(this.$(target).html());
    multiValue = multiValue >= 9999 ? multiValue : ++multiValue;

    // this.$(target).html(multiValue);
    this.$(target).val(multiValue);
  }

  getValue(selector, parseInteger = true) {
    let value = this.$(selector).val();
    return parseInteger ? parseInt(value) : value;
  }

  decreaseMultiplier(target) {
    let multiValue = this.getValue(target);
    // let multiValue = parseInt(this.$(target).html());
    multiValue = multiValue <= 1 ? multiValue : --multiValue;
    // this.$(target).html(multiValue);
    this.$(target).val(multiValue);
  }

  disableButtons(disabled, ...btnSelectors) {
    if (disabled) {
      btnSelectors.forEach((selector) => {
        this.$(selector).attr("disabled", disabled);
        this.$(selector).addClass("disabled-svg");
      });
    } else {
      btnSelectors.forEach((selector) => {
        this.$(selector).attr("disabled", disabled);
        this.$(selector).removeClass("disabled-svg");
      });
    }
  }

  getRowFromClass(classNames) {
    let classIndex = classNames.indexOf("row");
    return classNames.substring(classIndex, classIndex + 4);
  }

  getPageId() {
    return this.pageId;
  }
  /****validations */
  validateMoney() {}

  setAllBets() {
    this.allBets = this.getBets();
  }

  alertErrBets() {
    if (this.errorBets) {
      this.$(".bet-box").val(this.allBets);
      alert("System Deleted Invalid Entries");
    }
  }

  getBets() {
    let bets = this.$(".bet-box").val().split(";");
    bets.forEach((element, index) => {
      element = element.trim();
      bets[index] = element;
      let arrElement = element.split(",");
      let errors = 0;
      if (!this.isValidEntry(arrElement)) {
        bets.splice(index, 1);
        errors++;
      }
      this.errorBets = errors;
    });

    return bets;
  }

  isValidEntry(entry) {
    if (entry.length != 5) return false;
    if (
      entry.some((value) => {
        return isNaN(value) || isNaN(parseInt(value));
      })
    )
      return false;

    return true;
  }

  unsetBetAmt() {
    this.betAmt = "";
    this.$("input.bet-amt").val("");
  }
  pushToCart() {
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier = this.multiplier;
    this.readyData.totalBets = this.calcTotalBets();
    this.readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    /*this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    cart.push(this.readyData);
  }

  saveToRow(data, row, ignore = false) {
    if (Array.isArray(data)) this.rows[row] = data;
    else {
      this.rows[row] = this.rows[row] || [];
      let numIndex = this.rows[row].indexOf(data);
      if (numIndex == -1) this.rows[row].push(data);
      else if (!ignore) this.rows[row].splice(numIndex, 1);
    }
  }

  deleteFromRow(data, row) {
    this.rows[row] = this.rows[row];
    let numIndex = this.rows[row].indexOf(data);
    if (numIndex != -1) this.rows[row].splice(numIndex, 1);
  }
  /**
   * flags the index of that element as deleted
   * @param {*} trackIndex
   */
  // toggleSetDeleteTrack(trackIndex)
  // {
  //   this.trackJson.deleted =
  // }

  resetAllData() {
    this.multiplier = 1;
    this.unitAmt = 2;
    this.betAmt = "";
    this.readyData = {};
    this.$(".clear-btn:visible").click();
    this.$("input.bet-amt").empty();
    this.$(".multiplier-input").empty();
    this.$(".multiplier-select").removeClass("active-btn");
    this.$('.multiplier-select[value="1"]').addClass("active-btn");
    this.$(".unit-amt-select").removeClass("active-btn");
    this.$('.unit-amt-select[value="2"]').addClass("active-btn");
  }

  /**Getters Begin */
  getCart() {
    return this.cart;
  }

  /**
   * getter:
   * @returns all values stored in all rows.eg. [[1,2,3],[4,5,6],[6,7,8]]
   */
  getAllRows() {
    return this.rows;
  }

  /**
   * getter:
   * @returns active multiplier stored
   */
  getMultiplier() {
    return this.multiplier;
  }

  /**
   * getter:
   * @returns stored betAmt
   */
  getBetAmt() {
    return this.betAmt;
  }

  // getTotalBets() {
  //   return this.totalBets;
  // }

  /**Getters End */

  /**Setters Begin */
  setMultiplier(multiplier) {
    this.multiplier = multiplier;
  }

  setTotalBets(totalBets) {
    this.totalBets = totalBets;
  }
  setBetAmt(amt) {
    this.betAmt = amt;
  }

  /**Setters End */

  /**
   *
   * @param {number} amt
   */
  setUnitAmt(amt) {
    this.unitAmt = amt;
  }

  /**
     * sets the trackdata
     * @param {array} trackJsonData the track data as JSON array. 
     * [{
     *    trackNo: number; 
          betId: string;
          multiplier: number;
          betAmt: number;
          estimatedDrawTime: string;
          nextDay: boolean;
          current: boolean;
     * },{...}]
     */
  setTrackJson(trackJsonData) {
    trackJsonData.deleted = []; //this will hold the index of the track data that will be unchecked (deleted).
    // trackJsonData.trackInfo.gameId = this.trackInfo.gameId;
    // trackJsonData.trackInfo.unitStaked = this.trackInfo.unitStaked;
    // trackJsonData.trackInfo.totalBets = this.trackInfo.totalBets;
    // trackJsonData.trackInfo.allSelections = this.trackInfo.allSelections;
    // trackJsonData.trackInfo.userSelections = this.trackInfo.userSelections;
    this.trackJson = trackJsonData;
  }

  /**
   * sets the information about the track. This method is called when user clicks on track.
   * @param {object} trackInfo
   */
  setTrackInfo(trackInfo) {
    this.trackInfo = trackInfo;
  }

  /**
   * changes the trackJson property
   *
   * @param {string} property the trackJson property.
   * @param {any} value data to set.
   * @param {number} index location of the data to edit.
   */
  setTrackElement(property, value, index) {
    !property
      ? (this.trackJson["bets"][index] = value)
      : (this.trackJson["bets"][index][property] = value);
  }

  /**
   * gets the trackJson property
   *
   * @param {string} property the trackJson property.
   * @param {number} index location of the data to get.
   */
  getTrackElement(index, property) {
    if (!property) return this.trackInfo[property];
    if (index == "trackInfo") return this.trackJson[index][property];
    return this.trackJson["bets"][index][property];
  }

  /**
   * gets the trackJson property
   * @returns the trackJson property
   */
  getTrackJson() {
    return this.trackJson;
  }

  /**
   * updates the trackJson multiplier. used when user manually changes a particular track multiplier.
   * It also updates the trackJson betAmt and totalBetAmt after multiplier has been updated.
   * @param {number} multiplier the multiplier value to be stored.
   * @param {number} index location of the particular track element in the trackJson array.
   */
  updateTrackMultiplier(multiplier, index) {
    let previousBetAmt = this.trackJson["bets"][index]["betAmt"];
    let previousMultiplier = this.trackJson["bets"][index]["multiplier"];
    let unitBetAmt = this.fixArithmetic(previousBetAmt / previousMultiplier);
    let previousTotalBetAmt = this.trackJson["trackInfo"]["totalBetAmt"];
    let newBetAmt = this.fixArithmetic(multiplier * unitBetAmt);
    let newTotalBetAmt = this.fixArithmetic(
      previousTotalBetAmt - previousBetAmt + newBetAmt
    );
    this.trackJson["trackInfo"]["totalBetAmt"] = newTotalBetAmt;
    this.trackJson["bets"][index]["multiplier"] = multiplier;
    this.trackJson["bets"][index]["betAmt"] = newBetAmt;
  }

  /**
   * stores the index of the deleted track element in a 'deleted' array in trackJson if not already present.
   * also updates the totalBetAmt and totalBets to reflect the information.
   * the actual data is deleted when the readyTrack() method is called.
   * @param {number} index the index-location of the track to be deleted. (in the trackJson property)
   */
  toggleDeleteTrackElement(index) {
    let elementLocation = this.trackJson["deleted"].indexOf(index);
    if (elementLocation == -1) {
      this.trackJson["deleted"].push(index);
      let totalBetAmt = this.trackJson["trackInfo"]["totalBetAmt"];
      let newTotalBetAmt = this.fixArithmetic(
        totalBetAmt - this.trackJson["bets"][index]["betAmt"]
      );
      this.trackJson["trackInfo"]["totalBetAmt"] = newTotalBetAmt;
      this.trackJson["trackInfo"]["totalDraws"] =
        this.trackJson["trackInfo"]["totalDraws"] - 1;
    } else {
      this.trackJson["deleted"].splice(elementLocation, 1);
      let totalBetAmt = this.trackJson["trackInfo"]["totalBetAmt"];
      let newTotalBetAmt = this.fixArithmetic(
        totalBetAmt + this.trackJson["bets"][index]["betAmt"]
      );
      this.trackJson["trackInfo"]["totalBetAmt"] = newTotalBetAmt;
      this.trackJson["trackInfo"]["totalDraws"] =
        this.trackJson["trackInfo"]["totalDraws"] + 1;
    }
  }

  /**
   *
   * @returns a formatted Json of the track that can be received by the server.
   */
  readyTrackJson() {
    let trackJson = this.trackJson;
    let toDeletes = trackJson["deleted"];
    for (const id of toDeletes) {
      delete trackJson[id];
    }
    return trackJson;
  }

  /**
   * gets the unit amount
   * @returns the stored unit amount
   */
  getUnitAmt() {
    return this.unitAmt;
  }

  /**
   * gets value stored in a particular row
   * @param {string} row the row name. eg. 'row1', 'row2'
   * @returns the value stored in the row.
   */
  getRow(row) {
    return this.rows[row];
  }
}

class a5_g5 extends Royal5utils {
  gameId = 9;
  type = "All 5 group 5";
  sample1 = 1;
  sample2 = 1;
  labels = ["Four of a Kind", "One No."];
  rows = {
    row1: [],
    row2: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return row2.length * (row1.length - repeat) + repeat * (row2.length - 1);
  }

  pushToCart() {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
    console.log("a5_g5.pushToCart", cart);
    console.log(
      "-------------------------------------------------------------------------------------"
    );
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class a5_g10 extends Royal5utils {
  gameId = 8;
  type = "All 5 group 10";
  sample1 = 1;
  sample2 = 1;
  labels = ["Three of a Kind", "One Pair"];

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  rows = {
    row1: [],
    row2: [],
  };

  calcTotalBets() {
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return row2.length * (row1.length - repeat) + repeat * (row2.length - 1);
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class a5_g20 extends Royal5utils {
  gameId = 7;
  type = "All 5 group 20";
  sample1 = 1;
  sample2 = 2;
  labels = ["Three of a Kind", "One No."];
  rows = {
    row1: [],
    row2: [],
  };
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return (
      ((row2.length * (row2.length - 1)) / 2) * (row1.length - repeat) +
      (repeat * (row2.length - 1) * (row2.length - 2)) / 2
    );
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }
}

class a5_g30 extends Royal5utils {
  gameId = 6;
  type = "All 5 group 30";
  labels = ["One Pair", "One No."];
  sample1 = 2;
  sample2 = 1;
  rows = {
    row1: [],
    row2: [],
  };
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }
  calcTotalBets() {
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return (
      ((row1.length * (row1.length - 1)) / 2) * (row2.length - repeat) +
      (repeat * (row1.length - 1) * (row1.length - 2)) / 2
    );
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }
}

class a5_g60 extends Royal5utils {
  total = new TotalBets();
  gameId = 5;
  type = "All 5 group 60";
  sample1 = 1;
  sample2 = 3;
  labels = ["One Pair", "One No."];
  rows = {
    row1: [],
    row2: [],
  };
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }
  calcTotalBets() {
    return this.total.calculateBet(
      this.rows.row1,
      this.sample1,
      this.rows.row2,
      this.sample2
    );
    // console.log(this.getTotalBets(this.rows.row1, this.sample1, this.rows.row2, this.sample2));
    return this.getTotalBets(
      this.rows.row1,
      this.sample1,
      this.rows.row2,
      this.sample2
    );
    // let row1 = this.rows.row1;
    // let row2 = this.rows.row2;
    // let repeatedNums = row2.filter((element) => row1.includes(element));
    // let repeat = repeatedNums.length;
    // return (
    //   ((row2.length * (row2.length - 1) * (row2.length - 2)) / 6) *
    //   (row1.length - repeat) +
    //   (repeat * (row2.length - 1) * (row2.length - 2) * (row2.length - 3)) / 6
    // );
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class a5_g120 extends Royal5utils {
  gameId = 4;
  type = "All 5 group 120";
  sample1 = 5;
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface();
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let len = row1.length;
    if (len < this.sample1) return 0;
    return this.getCombination(len, this.sample1);
    // return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class a5_joint extends Royal5utils {
  settings;
  gameId = 1;
  type = "All 5 Straight(Joint)";
  // labels = ["1st", "2nd", "3rd", "4th", "5th"];
  // sample1 = 1;
  // sample2 = 1;
  rows = {
    row1: [],
    row2: [],
    row3: [],
    row4: [],
    row5: [],
  };
  constructor(settings) {
    super();
    // this.settings = settings;
    // console.log(settings);
    // this.label = settings.label;
    // this.gameId = settings.gameId;
    // this.type = settings.type;
    this.settings = settings;
    this.createGameInterface(this.settings.label);
  }

  calcTotalBets() {
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    let row5 = this.rows.row5.length;
    return row1 * row2 * row3 * row4 * row5;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    // readyData.allSelections = this.allSelections(
    //   ...Object.values(this.rows),
    //   this.sample1,
    //   this.sample2
    // );
    const dataSet = [];
    let rowPosition = 1;

    for (const key in this.rows) {
      dataSet.push([rowPosition++, this.rows[key]]);
    }

    readyData.allSelections = dataSet;
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class a5_manual extends Royal5utils {
  gameId = 2;
  type = "All 5 group Straight(Manual)";
  // sample1 = 1;
  // sample2 = 1;
  rows = {
    row1: [],
    row2: [],
    row3: [],
    row4: [],
    row5: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(false, true);
  }

  calcTotalBets() {
    return this.allBets.length;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class a5_combo extends Royal5utils {
  gameId = 3;
  type = "All 5 Straight(Combo)";
  // sample1 = 1;
  // sample2 = 1;
  // multiplier = 1;
  // unitAmt = 1;
  betAmt = "";
  labels = ["1st", "2nd", "3rd", "4th", "5th"];
  rows = {
    row1: [],
    row2: [],
    row3: [],
    row4: [],
    row5: [],
  };
  cart = [];
  readyData = {};
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    let row5 = this.rows.row5.length;
    return row1 * row2 * row3 * row4 * row5 * 5;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class f4_joint extends Royal5utils {
  gameId = 10;
  type = "First 4 Straight(Joint)";
  labels = ["1st", "2nd", "3rd", "4th"];
  // sample1 = 1;
  // sample2 = 1;
  rows = {
    row1: [],
    row2: [],
    row3: [],
    row4: [],
  };
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    return row1 * row2 * row3 * row4;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class f4_manual extends Royal5utils {
  gameId = 11;
  type = "First 4 group Straight(Manual)";
  // sample1 = 1;
  // sample2 = 1;
  rows = {
    row1: [],
    row2: [],
    row3: [],
    row4: [],
    row5: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(false, true);
  }

  calcTotalBets() {
    return this.allBets.length;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class f4_combo extends Royal5utils {
  gameId = 12;
  type = "First 4 Straight(Combo)";
  // sample1 = 1;
  // sample2 = 1;
  // multiplier = 1;
  // unitAmt = 1;
  betAmt = "";
  labels = ["1st", "2nd", "3rd", "4th"];
  rows = {
    row1: [],
    row2: [],
    row3: [],
    row4: [],
  };
  cart = [];
  readyData = {};
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    return row1 * row2 * row3 * row4 * 4;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class f4_g24 extends Royal5utils {
  gameId = 13;
  type = "First 4 group 24";
  // sample1 = 1;
  // sample2 = 1;
  sample1 = 4;
  rows = {
    row1: [],
  };
  cart = [];
  readyData = {};
  constructor(pageId) {
    super(pageId);
    this.createGameInterface();
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let len = row1.length;
    if (len < this.sample1) return 0;
    return this.getCombination(len, this.sample1);
    // return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class f4_g12 extends Royal5utils {
  gameId = 14;
  type = "First 4 group 12";
  sample1 = 1;
  sample2 = 2;
  labels = ["One Pair", "One No."];
  rows = {
    row1: [],
    row2: [],
  };
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return (
      ((row2.length * (row2.length - 1)) / 2) * (row1.length - repeat) +
      (repeat * (row2.length - 1) * (row2.length - 2)) / 2
    );
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }
}

class f4_g6 extends Royal5utils {
  gameId = 15;
  type = "First 4 group 6";
  sample1 = 2;
  labels = ["One Pair"];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface();
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let len = row1.length;
    if (len < this.sample1) return 0;
    return this.getCombination(len, this.sample1);
    // return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class f4_g4 extends Royal5utils {
  gameId = 16;
  type = "First 4 group 4";
  sample1 = 1;
  sample2 = 1;
  labels = ["Three of a Kind", "One No."];
  rows = {
    row1: [],
    row2: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return row2.length * (row1.length - repeat) + repeat * (row2.length - 1);
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class l4_joint extends Royal5utils {
  gameId = 17;
  type = "Last 4 Straight(Joint)";
  labels = ["2nd", "3rd", "4th", "5th"];
  // sample1 = 1;
  // sample2 = 1;
  rows = {
    row1: [],
    row2: [],
    row3: [],
    row4: [],
  };
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    return row1 * row2 * row3 * row4;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class l4_manual extends Royal5utils {
  gameId = 18;
  type = "All 4 group Straight(Manual)";
  // sample1 = 1;
  // sample2 = 1;
  rows = {
    row1: [],
    row2: [],
    row3: [],
    row4: [],
    row5: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(false, true);
  }

  calcTotalBets() {
    return this.allBets.length;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class l4_combo extends Royal5utils {
  gameId = 19;
  type = "Last 4 Straight(Combo)";
  // sample1 = 1;
  // sample2 = 1;
  // multiplier = 1;
  // unitAmt = 1;
  betAmt = "";
  labels = ["2nd", "3rd", "4th", "5th"];
  rows = {
    row1: [],
    row2: [],
    row3: [],
    row4: [],
  };
  cart = [];
  readyData = {};
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    return row1 * row2 * row3 * row4 * 4;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class l4_g24 extends Royal5utils {
  gameId = 20;
  type = "Last 4 group 24";
  // sample1 = 1;
  // sample2 = 1;
  sample1 = 4;
  rows = {
    row1: [],
  };
  cart = [];
  readyData = {};
  constructor(pageId) {
    super(pageId);
    this.createGameInterface();
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let len = row1.length;
    if (len < this.sample1) return 0;
    return this.getCombination(len, this.sample1);
    // return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class l4_g12 extends Royal5utils {
  gameId = 21;
  type = "Last 4 group 12";
  sample1 = 1;
  sample2 = 2;
  labels = ["One Pair", "One No."];
  rows = {
    row1: [],
    row2: [],
  };
  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return (
      ((row2.length * (row2.length - 1)) / 2) * (row1.length - repeat) +
      (repeat * (row2.length - 1) * (row2.length - 2)) / 2
    );
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }
}

class l4_g6 extends Royal5utils {
  gameId = 22;
  type = "Last 4 group 6";
  labels = ["One Pair"];
  sample1 = 2;
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let len = row1.length;
    if (len < this.sample1) return 0;
    return this.getCombination(len, this.sample1);
    // return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class l4_g4 extends Royal5utils {
  gameId = 23;
  type = "Last 4 group 4";
  sample1 = 1;
  sample2 = 1;
  labels = ["Three of a Kind", "One No."];
  rows = {
    row1: [],
    row2: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return row2.length * (row1.length - repeat) + repeat * (row2.length - 1);
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

/*-------------------Begin fixed_place class----------------------*/
//gameId
class fixed_place extends Royal5utils {
  gameId = 99;
  type = "fixed place";
  // sample1 = 1;
  // sample2 = 1;
  labels = ["1st", "2nd", "3rd", "4th", "5th", "", ""];
  rows = {
    row1: [], //represents each row seletion
    row2: [],
    row3: [],
    row4: [],
    row5: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    console.log(this.rows);
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;

    let totalBets = 0;

    for (const key in this.rows) {
      totalBets += this.rows[key].length;
    }

    console.log("total ", totalBets);
    //let repeatedNums = row2.filter((element) => row1.includes(element));
    //let repeat = repeatedNums.length;
    return totalBets; //row2.length * (row1.length - repeat) + repeat * (row2.length - 1);
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = Object.keys(cart).length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `X${data.multiplier}`;
    let betAmt = `${data.totalBetAmt}`;
    cart[key] = data;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, key);
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    const dataSet = [];
    let rowPosition = 1;

    for (const key in this.rows) {
      dataSet.push([rowPosition++, this.rows[key]]);
    }

    readyData.allSelections = dataSet; //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

/*--------------------End fixed_place class--------------------------------*/



/*--------------------Begin any_place class--------------------------------*/

//Any place one out of first three

class any_plce_one_out_of_first_three extends Royal5utils {
  sample1 = 1;
  gameId = 100;
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {

    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1)
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }

}


//Any place 2 out of first three
class any_place_two_out_of_first_three extends Royal5utils {

  sample1 = 2;
  gameId = 101;
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    const totalBets = getCombination(this.rows.row1.length, this.sample1)
    return totalBets
    //console.log("Total Bet ...", totalBets);
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }

}

//
class any_place_one_out_of_mid_three extends Royal5utils {

  sample1 = 1;
  gameId = 103;
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }

}

//
class any_place_two_out_of_mid_three extends Royal5utils {

  sample1 = 2;
  gameId = 104;
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }

}

//
class any_place_one_out_of_last_three extends Royal5utils {

  sample1 = 1
  gameId = 105
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class any_place_two_out_of_last_last_three extends Royal5utils {
  sample1 = 2
  gameId = 106
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class any_place_one_out_of_first_four extends Royal5utils {
  sample1 = 1
  gameId = 107
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}
class any_place_two_out_of_first_four extends Royal5utils {
  sample1 = 2
  gameId = 108
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}
class any_place_three_out_of_first_four extends Royal5utils {
  sample1 = 3
  gameId = 109
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}
class any_place_one_out_of_last_four extends Royal5utils {
  sample1 = 1
  gameId = 110
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}
class any_place_two_out_of_last_four extends Royal5utils {
  sample1 = 2
  gameId = 111
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}
class any_place_three_out_of_last_four extends Royal5utils {
  sample1 = 3
  gameId = 112
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class any_place_one_out_of_five extends Royal5utils {
  sample1 = 1
  gameId = 113
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}
class any_place_two_out_of_five extends Royal5utils {
  sample1 = 2
  gameId = 114
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}
class any_place_three_out_of_five extends Royal5utils {
  sample1 = 3
  gameId = 115
  type = "any place";
  labels = [""];
  rows = {
    row1: [],
  };

  constructor(pageId) {
    super(pageId);
    this.createGameInterface(this.labels);
  }

  calcTotalBets() {
    return getCombination(this.rows.row1.length, this.sample1)
  }

  pushToCart(cart) {
    let data = this.getSavedData();
    let key = cart.length;
    let type = this.type;
    let detail = data.userSelections;
    let bets = data.totalBets;
    let unit = data.unitStaked;
    let multiplier = `x${data.multiplier}`;
    let betAmt = `&#8373;${data.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart[key] = data;
  }

  getSavedData() {
    let readyData = {};
    readyData.gameId = this.gameId;
    readyData.unitStaked = this.unitAmt;
    readyData.totalBetAmt = this.calcActualAmt();
    readyData.multiplier = this.multiplier;
    readyData.totalBets = this.calcTotalBets();
    readyData.allSelections = chunkArray(this.rows.row1, 1);         //this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

/*--------------------End any_place class--------------------------------*/


const intervalMinutes = 5; // Royal5 draw number intervals
const maxEntryValue = 9999; //maximum value allowed for input fields
let progressTime; //default seconds for progress bar and countdown.
let lastId = 0;
let initializedClasses = [];
let cart = {};
/** object to hold the track data */
let trackData = {};
let oldClass = "a5_joint";
const urls = {
  balance: "http://192.168.199.126/task/receiver.php?action=userbalance",
  draws: "http://192.168.199.126/task/cron/frontend_draw.php",
  // betNow: "http://192.168.199.126/task/nav.php"
  drawsMock: "./demo/generator.php",
}
let balanceUrl = "http://192.168.199.126/task/receiver.php?action=userbalance";
let game = new a5_joint(settings("a5_joint"));
hideAllExcept(".game-nav-box", ".game-nav-box.all5");
// let balance = await game.fetchData(balanceUrl) || 500;
let balance = 500;

/** max input length for the track draw*/
let maxInput = 120;
// $('.user-balance').html(JSON.parse(balance).userBalance);
// let dateTime = ;
/** variable to store the next betId from server */
let serverBetId = "202301310002";

/** variable to store the next betId from server */
let serverTime = "2023-01-31 20:24:00";

/** variable to store current betId & current dateTime and generate the next betid & nextDateTime */
let serverDrawNum = {
  // betId: "202301310001",
  // dateTime: "2023-01-31 20:24:00",
  // nextBetId: "202301310002",
  // nextDateTime: "2023-01-31 20:29:00"

}
let drawData = {};
let totalRequests = {
  getDrawData: 0
}
let currentSelectOption = {}; // current select option in track

let tooltipData; //tooltips data

function setNextDraws() {
  drawData.nextBetId = game.generateNextBetId(drawData.draw_date, drawData.draw_datetime, intervalMinutes);
  drawData.nextDateTime = game.addMinutes(drawData.draw_datetime, intervalMinutes);
}

// let liveDrawNum = {

//   nextBetId: game.getNextBetId(serverDrawNum.betId),
//   nextDateTime: "2023-01-31 20:29:00"
// }

/** selects all class names  */
let classNames = {
  selectionCtrl: "selection-ctr",
  allBtn: ".all-btn",
  bigBtn: ".big-btn",
  smallBtn: ".small-btn",
  oddBtn: ".odd-btn",
  evenBtn: ".even-btn",
  clearBtn: ".clear-btn",
  row1Nums: ".row1",
  row2Nums: ".row2",
  row3Nums: ".row3",
  row4Nums: ".row4",
  row5Nums: ".row5",
  row6Nums: ".row6",
  betAmt: ".bet-amt",
  eachBetBox: ".each-bet-select",
  multiplierSelect: ".multiplier-select",
  unitAmt: ".unit-amt-select",
  eachBetShow: ".each-bet",
  totalBetShow: ".total-bet",
  totalBetAmtShow: ".totalAmt",
  multiValue: ".multiplier-input",
  cartBtn: ".cart-btn",
  betNowBtn: ".bet-now",
  numBtn: ".num",
  modelSelect: ".model-select",
  gameNavBox: ".game-nav-box",
  navItem: ".nav-item-c",
  allRows: ".num-btn-controls",
  gameInterface: ".game-interface",
  interfaceItem: ".interface-item",
};

ready(oldClass);

function ready(className) {
  if (initializedClasses.includes(className)) return 0;
  function showBetsInfo() {
    // let totalBets = this.calcTotalBets();
    // let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    // let totalBets = this.totalBets;
    // let unitAmt = this.unitAmt;
    let totalBets = game.calcTotalBets();
    if (!totalBets) {
      game.$("div.least-bet").show();
      game.$("div.bet-info").hide();
      game.disableButtons(true, ".cart", ".bet-now");
      return 0;
    }

    // let multiplier = this.multiplier;
    // console.log(unitAmt);
    // let actualAmt = this.actualAmt;
    let unitAmt = game.getUnitAmt();
    let actualAmt = game.calcActualAmt();
    game.$("span.total-bets").html(totalBets);
    game.$("span.unit-amt-select").html(unitAmt);
    game.$("span.actual-amt").html(actualAmt);
    game.$("div.least-bet").hide();
    game.$("div.bet-info").show();
    game.disableButtons(false, ".cart", ".bet-now");
    if (!unitAmt) game.disableButtons(true, ".cart", ".bet-now");
  }

  initializedClasses.push(className);

  let savePoint = {
    cart: [],
    data: {
      // row1,
      // row2
    },
  };

  // $('.cart').hide();
  // $('.cart-items').hide();

  game.$(classNames.allBtn).click(function () {
    let data = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    let row = $(this).parent().attr("data-points-to");
    $(`.num-group.${row}>button`).addClass("active-btn");
    game.saveToRow(data, row);
    game.$("input.bet-amt").val("");
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
    game.$(classNames.modelSelect).removeClass("active-btn");
    game.setTotalBets(totalBets);
    game.setBetAmt(game.calcBetAmt());
    showBetsInfo();
  });

  game.$(".all-btn-col").click(function () {
    let value = parseInt($(this).attr("data-value"));
    let target = $(`.num[value="${value}"]:visible`);
    target.addClass("active-btn");
    let targetLength = target.length;
    for (let i = 1; i <= targetLength; i++) {
      game.saveToRow(value, `row${i}`, true);
    }
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
    game.setTotalBets(totalBets);
    game.setBetAmt(game.calcBetAmt());
    showBetsInfo();
  });

  game.$(classNames.bigBtn).click(function () {
    let data = [5, 6, 7, 8, 9];
    let row = $(this).parent().attr("data-points-to");
    game.selectBig(`.num-group.${row}>button`);
    game.$("input.bet-amt").val("");
    game.saveToRow(data, row);
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
    game.$(classNames.modelSelect).removeClass("active-btn");
    game.setTotalBets(totalBets);
    game.setBetAmt(game.calcBetAmt());
    showBetsInfo();
  });

  game.$(classNames.smallBtn).click(function () {
    game.calcTotalBets();
    let data = [0, 1, 2, 3, 4];
    let row = $(this).parent().attr("data-points-to");
    game.selectSmall(`.num-group.${row}>button`);
    game.$("input.bet-amt").val("");
    game.saveToRow(data, row);
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
    game.$(classNames.modelSelect).removeClass("active-btn");
    game.setTotalBets(totalBets);
    game.setBetAmt(game.calcBetAmt());
    showBetsInfo();
  });

  game.$(classNames.oddBtn).click(function () {
    let data = [1, 3, 5, 7, 9];
    let row = $(this).parent().attr("data-points-to");
    game.selectOdd(`.num-group.${row}>button`);
    game.$("input.bet-amt").val("");
    game.saveToRow(data, row);
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
    game.$(classNames.modelSelect).removeClass("active-btn");
    game.setTotalBets(totalBets);
    game.setBetAmt(game.calcBetAmt());
    showBetsInfo();
  });

  game.$(classNames.evenBtn).click(function () {
    let data = [0, 2, 4, 6, 8];
    let row = $(this).parent().attr("data-points-to");
    game.selectEven(`.num-group.${row}>button`);
    game.$("input.bet-amt").val("");
    savePoint.data[row] = data;
    game.saveToRow(data, row);
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
    game.$(classNames.modelSelect).removeClass("active-btn");
    game.setTotalBets(totalBets);
    game.setBetAmt(game.calcBetAmt());
    showBetsInfo();
  });

  game.$(".num").click(function () {
    $(this).toggleClass("active-btn");
    let btnValue = parseInt($(this).children().html());
    let classNames = $(this).attr("class");
    game.$("input.bet-amt").val("");
    let row = game.getRowFromClass(classNames);
    game.saveToRow(btnValue, row);
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
    game.$(".model-select").removeClass("active-btn");
    game.setTotalBets(totalBets);
    game.setBetAmt(game.calcBetAmt());
    showBetsInfo();
    // let req=$.post('index.php', {name:'kofi'});
    // req.done(function(){alert('done')})
    // req.fail(function(){alert('failed')})
    // let req = $.get('rand.php',function(data, status){
    //     alert("data: "+data +"\nStatus: "+ status);
    // })
    // req.fail(function(){alert('failed')})
  });

  game.$(classNames.clearBtn).click(function () {
    let data = [];
    let row = $(this).parent().attr("data-points-to");
    game.clear(`.num-group.${row}>button`);
    savePoint.data[row] = data;
    game.saveToRow(data, row);
    game.$("input.bet-amt").val("");
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
    game.$(classNames.modelSelect).removeClass("active-btn");
    game.setTotalBets(totalBets);
    game.setBetAmt(game.calcBetAmt());
    showBetsInfo();
  });

  game.$(".clear-btn-col").click(function () {
    let value = parseInt($(this).attr("data-value"));
    let target = $(`.num[value="${value}"]:visible`);
    console.log(value);
    target.removeClass("active-btn");
    let targetLength = target.length;
    for (let i = 1; i <= targetLength; i++) {
      game.deleteFromRow(value, `row${i}`);
    }
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
    game.setTotalBets(totalBets);
    game.setBetAmt(game.calcBetAmt());
    showBetsInfo();
  });

  game.$(classNames.multiplierSelect).click(function () {
    game.$(classNames.multiplierSelect).removeClass("active-btn");
    game.$(this).addClass("active-btn");
    let value = $(this).val();
    game.setMultiplier(value);
    game.setBetAmt(game.calcBetAmt());
    game.$(classNames.modelSelect).removeClass("active-btn");
    game.$(".multiplier-input").val(value);
    game.$("input.bet-amt").val("");
    showBetsInfo();
  });

  game.$(classNames.unitAmt).click(function () {
    game.$(classNames.unitAmt).removeClass("active-btn");
    game.$(this).addClass("active-btn");
    let value = $(this).val();
    game.setUnitAmt(Number(value));
    game.setBetAmt(game.calcBetAmt());
    game.$(classNames.modelSelect).removeClass("active-btn");
    game.$("input.bet-amt").val("");
    showBetsInfo();
  });

  game.$(classNames.modelSelect).click(function () {
    game.$(classNames.modelSelect).removeClass("active-btn");
    game.$(this).addClass("active-btn");
    let modelValue = eval($(this).val());
    let balance = game.$(".user-balance").html();
    let unitAmt = game.calcUnitFromModel(balance, modelValue);
    game.setUnitAmt(unitAmt);
    game.$(classNames.unitAmt).removeClass("active-btn");
    game.$(`.unit-amt-select[value='${unitAmt}']`).addClass("active-btn");
    let actualAmt = game.calcAmtFromModel(balance, modelValue);
    game.setBetAmt(actualAmt);
    game.setMultiplier(1);
    game.$(".multiplier-select").removeClass("active-btn");
    game.$(".multiplier-select[value='1']").addClass("active-btn");
    game.$(".multiplier-input").val(1);
    game.$("input.bet-amt").val("");
    showBetsInfo();
  });

  game.$(".multiplier-input").click(function () {
    $(this).select();
  });

  game.$(".multiplier-input").on("input", function () {
    let onlyNums = parseInt($(this).val().replace(/\D+/g, ""));
    onlyNums = onlyNums ? onlyNums : 1;
    $(this).val(onlyNums);
    game.$(".multiplier-select").removeClass("active-btn");
    game.$(`.multiplier-select[value='${onlyNums}']`).addClass("active-btn");
    game.setMultiplier(onlyNums);
    game.setBetAmt(game.calcBetAmt());
    game.$("input.bet-amt").val("");
    showBetsInfo();
  });
  // console.warn("error")
  game.$("input.bet-amt").click(function () {
    // let betAmt = game.betAmt;
    // let unitAmt = game.betAmt?unitAmt:0;
    // game.setUnitAmt(unitAmt);
    // $(this).val(betAmt);
    game.$(classNames.modelSelect).removeClass("active-btn");
    $(this).select();
    // game.$('.unit-amt-select').removeClass('active-btn');
    // game.$('.multiplier-select[value="1"]').click();
  });

  game.$("input.bet-amt").on("focus", function () {
    let totalBets = game.calcTotalBets();
    !totalBets
      ? game.disableButtons(true, "input.bet-amt")
      : game.disableButtons(false, "input.bet-amt");
  });

  game.$("input.bet-amt").on("input", function () {
    let oldMultiplier = game.getMultiplier();
    let onlyNums = parseInt($(this).val().replace(/\D+/g, ""));
    onlyNums = onlyNums ? onlyNums : "";
    onlyNums = onlyNums >= 9999 ? 9999 : onlyNums;
    onlyNums ? game.setBetAmt(onlyNums) : game.setBetAmt(game.calcBetAmt());
    let multiplier = game.calcMultiplier();
    let unitAmt = game.calcUnitAmt();
    // console.log('multi', multiplier);
    multiplier = onlyNums ? multiplier : oldMultiplier;
    game.setUnitAmt(unitAmt);
    game.setMultiplier(multiplier);
    game.$(".multiplier-input").val(multiplier);
    game.$(`.multiplier-select`).removeClass("active-btn");
    game.$(`.multiplier-select[value='${multiplier}']`).addClass("active-btn");
    game.$(`.unit-amt-select`).removeClass("active-btn");
    game.$(`.unit-amt-select[value='${unitAmt}']`).addClass("active-btn");
    $(this).val(onlyNums);
    showBetsInfo();
  });
  //for manual bet
  game.$(".bet-box").on("input", function () {
    game.setAllBets();
    showBetsInfo();
  });
  // console.log(game.createTrackJson("2023-01-31 20:24:55", 161, 120, 3, 4, 3, 0.002));

  /*--------------------------------------------------------------
# Track Begins Here
--------------------------------------------------------------*/
  game.$(".track").click(function () {
    let defaultTrackDraws = 10; //total number tracks that will be shown when user clicks on track.
    let defaultTrackInputs = 1; //default input for .first-multiplier, .multiplyAfterEvery, .multiplyBy.
    // let current = "20230131000";
    let savedData = game.getSavedData();
    let trackInfo = {};
    trackInfo.gameId = savedData.gameId;
    trackInfo.unitStaked = savedData.unitStaked;
    trackInfo.totalBets = savedData.totalBets;
    trackInfo.allSelections = savedData.allSelections;
    trackInfo.userSelections = savedData.userSelections;
    game.setTrackInfo(trackInfo);
    let betAmt = game.calcBetAmt();
    let totalBets = game.calcTotalBets();
    trackData = {
      gameId: savedData.gameId,
      unitStaked: savedData.unitStaked,
      totalBets: savedData.totalBets,
      allSelections: savedData.allSelections,
      userSelections: savedData.userSelections,
    };
    //next to lines hides existing tracks to match the default track no.
    $(".track-data").children().hide();
    $(".track-data").children().slice(0, defaultTrackDraws).show();

    $(".first-multiplier, .multiplyAfterEvery, .multiplyBy").val(
      defaultTrackInputs
    );
    $(".total-draws").val(defaultTrackDraws);
    console.log(drawData.nextDrawDate)
    let trackJson = game.createTrackJson(drawData.drawDatetime, drawData.nextBetId, defaultTrackDraws, 1, 1, 1, betAmt, totalBets);
    game.generateSelectOptions(drawData.betId);
    showCartArea('track-tab')
    // setInterval(() => {

    game.generateSelectOptions(currentSelectOption.betId);
    showCartArea("track-tab");
    game.setTrackTopTableContents(trackJson);
    trackJson["trackData"] = trackData;
    // game.setTrackJson(trackJson);
    game.setTrackJson(trackJson);
    game.createTrackInterface(trackJson);
    game.createProfitTrackInterface(trackJson);
    console.log("select currnet===============================----------", $(".current"))
  });

  $("#first__draw__select").on("change", function () {
    maxInput = checkRemainingSelectOptions("#first__draw__select");
    let hshs = $(".total-draws").val();

    
    let selectedIndex = $(this).prop("selectedIndex");
    // let getprev = $(this)
    //   .find("option")
    //   .eq(selectedIndex - 1);

    let currentSelect;
    let currentSelectdateTime;

    currentSelect = $(this).val();

    currentSelectdateTime = $(document)
      .find('select[name="first_draw"] :selected')
      .data("date-to-start");

    let firstMultiplier = +$(".first-multiplier").val();
    let multiplyAfterEvery = +$(".multiplyAfterEvery").val();
    let multiplyBy = +$(".multiplyBy").val();

    let trackJson = game.createTrackJson(
      currentSelectdateTime,
      currentSelect,
      hshs,
      firstMultiplier,
      multiplyAfterEvery,
      multiplyBy,
      game.getTrackElement("trackInfo", "eachBetAmt"),
      game.getTrackElement("trackInfo", "eachTotalBets")
    );
    game.createTrackInterface(trackJson);
  });

  $(".track-confirm").on("click", function () {
    // when the button with class "btn-track" is clicked, run the following function
    const rows = document.querySelectorAll("tr.track-entry"); // find all table rows with the class "track-entry" and store them in the 'rows' constant
    const data = {}; // initialize an empty object called 'data'
    data["bets"] = {}; // add an empty object called 'bets' to the 'data' object
    data["trackInfo"] = {}; // add an empty object called 'trackInfo' to the 'data' object
    let i = 0; // initialize a counter variable called 'i' to 0
    for (const row of rows) {
      // loop over each table row in 'rows'
      const cells = row.querySelectorAll("td"); // find all table cells in the current row and store them in the 'cells' constant
      const obj = {}; // initialize an empty object called 'obj'
      if ($(cells[1]).find(".slave").is(":checked")) {
        // check if the second cell in the current row has a checked input field with class 'slave'
        let multiplier = game.onlyNums(
          $(cells[2]).find(".track-multiplier").val()
        );
        obj["trackNo"] = cells[0].textContent; // add the text content of the first cell in the current row to the 'trackNo' property of 'obj'
        obj["betId"] = $(cells[1]).find("#betID").val(); // extract all digits from the text content of the second cell in the current row and join them together into a single string, then add this string to the 'betId' property of 'obj'
        obj["multiplier"] = multiplier; // get the value of the input field with class 'track-multiplier' in the third cell of the current row and add it to the 'multiplier' property of 'obj'
        obj["betAmt"] =
          multiplier * game.getTrackElement("trackInfo", "eachBetAmt"); // add the text content of the fourth cell in the current row to the 'betAmt' property of 'obj'
        // obj["estimatedDrawTime"] = cells[4].textContent;
        //   obj["nextDay"] = cells[5].textContent;
        data["bets"][i++] = obj; // add the 'obj' to the 'bets' property of 'data' using the counter variable to increment the index of the 'bets' object for each row that has a checked input field with class 'slave'
      }
    }
    // console.log("trackdaaaaaaaaaaaaaaaaaaaaaaaaaaaaata" ,trackData)
    data["trackInfo"] = game.getTrackInfo(); // add the result of the 'game.getTrackInfo()' method to the 'trackInfo' property of 'data'
    data["trackData"] = trackData;

    console.log(data); // log the 'data' object to the console
    let callback = function (resp) {
      // create a callback function that logs the server response to the console
      console.log(resp);
    };
    $.post(
      "http://192.168.199.126/task/track.php",
      JSON.stringify(data),
      callback
    ); // send a POST request to the specified URL with the 'data' object as the request body and the callback function to handle the server response
  });

  $(document).on("click", ".cart-btn-track", function () {
    const row = document.querySelectorAll(".m-cart-row > th");
    console.log("cart track", row);
    console.log("cart track", cart);
    let track_table = $(document).find(".track-table-top");
    let track_cart;
    let i = 0;

    for (const key in cart) {
      console.log(cart[key].userSelections);
      track_cart += `<tr class="track-table-top-items">
          <th scope="row">${i + 1}</th>
          <td class="m-group-type">${row[i].innerText}</td>
          <td class="text-truncate text-center"><span style="max-width: 80px" class="m-detail" >${truncateEllipsis(
            cart[key].userSelections
          )}</span></td>
          <td class="m-bet">${cart[key].totalBets}</td>
          <td class="m-units">${cart[key].unitStaked}</td>
          <td>
              <span class="m-currency-symbol">&yen;</span>&nbsp;<span class="m-currency">${
                cart[key].totalBetAmt
              }</span>
          </td>
        </tr>`;

      i++;
    }
    $.post("http://192.168.199.126/task/track.php", JSON.stringify(data), callback)
  })

  game
    .$(".total-draws, .first-multiplier, .multiplyAfterEvery, .multiplyBy")
    .on("input", function () {
      console.log(
        "trackJson==========BEFORE========================",
        game.getTrackJson()
      );

      let thisValue = $(this).val();
      let totalDraws = $(".total-draws").val();
      $(this).val(game.onlyNums(thisValue));
      $(".total-draws").val(game.onlyNums(totalDraws, "", maxInput));
      totalDraws = parseInt($(".total-draws").val());
      let firstMultiplier = parseInt($(".first-multiplier").val());
      let multiplyAfterEvery = parseInt($(".multiplyAfterEvery").val());
      let multiplyBy = parseInt($(".multiplyBy").val());
      $(".track-data").children().hide();
      $(".track-data").children().slice(0, totalDraws).show();
      let betAmt = game.getTrackElement("trackInfo", "eachBetAmt");
      // let betAmt = game.calcBetAmt();
      // console.log(trackInfo)

      let totalBets = game.getTrackElement("trackInfo", "eachTotalBets");
      let betDateTime = $("#first__draw__select :selected").data(
        "date-to-start"
      );
      let betId = $("#first__draw__select :selected").attr("value");

      console.log(betDateTime, betId);
      let trackJson = game.createTrackJson(
        betDateTime,
        betId,
        totalDraws,
        firstMultiplier,
        multiplyAfterEvery,
        multiplyBy,
        betAmt,
        totalBets
      );
      game.setTrackJson(trackJson);

      game.createTrackInterface(trackJson);
      // game.setTrackContents(trackJson);
    });

  /**
   * listens to multiplier inputs from individual tracks.
   * changes the total bet amount, multiplier and the corresponding bet amount.
   */
  game.$(document).on("input", ".track-multiplier", function () {
    let thisMultiplier = +game.onlyNums($(this).val());
    let location = $(this).attr("data-index");
    game.updateTrackMultiplier(thisMultiplier, location);
    $(this).val(thisMultiplier);
    let totalBetAmt = game.getTrackElement("trackInfo", "totalBetAmt");
    let betAmt = game.getTrackElement(location, "betAmt");
    let tr = $(this).closest("tr");
    $(tr).find(".betAmt").text(betAmt);
    $(".track__total__amt__to_pay").text(totalBetAmt);
    // console.log(game.getTrackJson());
  });

  /**
   * listens to checking and unchecking of particular track data.
   * adds track number to 'deleted' array in trackJson.
   * this data will be deleted when user clicks on 'track confirm'.
   */
  game.$(document).on("change", ".track-check", function () {
    let index = +$(this).attr("data-index");
    game.toggleDeleteTrackElement(index);
    let totalDraws = game.getTrackElement("trackInfo", "totalDraws");
    let eachTotalBets = game.getTrackElement("trackInfo", "eachTotalBets");
    let totalTrackBets = totalDraws * eachTotalBets;
    let totalBetAmt = game.getTrackElement("trackInfo", "totalBetAmt");
    $(".track__total__bets").text(totalTrackBets);
    $(".track__total__amt__to_pay").text(totalBetAmt);
    $(".track__total__draws").text(totalDraws);
    console.log(game.getTrackJson());
  });

  /** check and unchecks track id checkboxes */
  $(document).on("change", "#mmaster", function (e) {
    if ($(this).is(":checked")) {
      $(".slave").prop("checked", true);
      game.setTrackElement(false, [], "deleted");
      console.log(game.getTrackJson());
    } else {
      let deleted = [];
      let trackCheckBoxes = $(".track-check");
      trackCheckBoxes.each(function (index) {
        deleted.push(+$(trackCheckBoxes[index]).attr("data-index"));
      });
      game.setTrackElement(false, deleted, "deleted");
      $(".slave").prop("checked", false);
    }
  });

  game
    .$(".total-draws, .first-multiplier, .multiplyAfterEvery, .multiplyBy")
    .click(function () {
      $(this).select();
    });
  /*--------------------------------------------------------------
# Track Ends Here
--------------------------------------------------------------*/
  game.$(".plus").click(function () {
    game.increaseMultiplier(classNames.multiValue);
    $(this).addClass("active-btn");
    let value = game.$(".multiplier-input").val();
    setTimeout(function () {
      $(".plus").removeClass("active-btn");
    }, 50);
    game.setMultiplier(value);
    game.setBetAmt(game.calcBetAmt());
    game.$("input.bet-amt").val("");
    game.$(".multiplier-select").removeClass("active-btn");
    game.$(`.multiplier-select[value='${value}']`).addClass("active-btn");
    showBetsInfo();
  });

  game.$(".minus").click(function () {
    game.decreaseMultiplier(classNames.multiValue);
    let value = game.$(".multiplier-input").val();
    $(this).addClass("active-btn");
    setTimeout(function () {
      $(".minus").removeClass("active-btn");
    }, 50);
    game.setMultiplier(value);
    game.setBetAmt(game.calcBetAmt());
    game.$("input.bet-amt").val("");
    game.$(".multiplier-select").removeClass("active-btn");
    game.$(`.multiplier-select[value='${value}']`).addClass("active-btn");
    showBetsInfo();
  });
  /*--------------------------------------------------------------
# Cart Begins Here
--------------------------------------------------------------*/
  game.$(".cart").click(function () {
    console.log(trackData);
    game.pushToCart(cart);
    game.resetAllData();
  });

  game.$(".bet-now").click(function () {
    game.disableButtons(true, ".cart", "input.bet-amt");
    let savedData = game.getSavedData();
    console.log(savedData);
    let data = JSON.stringify([savedData]);
    let req = $.post(urls.betNow, data, function (response) {
      // console.log(response);
      response = JSON.parse(response);
      if (response.title == "success") {
        game.fetchData(balanceUrl).then((response) => {
          response = JSON.parse(response);
          $(".user-balance").html(response.userBalance);
        });
        alert(response.message);
        game.resetAllData();
        cart = [];
      } else {

        game.disableButtons(false, ".cart", ".bet-now");
        alert(response.message);
      }

      req.fail(function () {
        alert("failed");
      });
    });
  });



  $(".clear-cart").click(function () {
    let res = confirm("Do you want to clear all bets in cart?");
    if (res) {
      $(".cart-items").empty();
      $("#cart-submit").hide();
      $(".clear-cart").hide();
      cart = [];
    }
  });

  game.$("div.bet-info").hide();

  function echo(...data) {
    console.log(...data);
  }
}

$(document).on("click", ".delete-cart", function () {
  let deleteThisRow = $(this).closest("tr");

  let id = $(this).attr("data-id");
  let itemBet = $(this).closest("tr").find(".cart-item-bets").text();
  let itemBetAmt = $(this).closest("tr").find(".cart-item-betamt").text();
  // $(this)
  game.removeFromCart(id);
  let sel_cart_bet_amt = $(".cart-total-bet-amt");
  let sel_cart_total_bet = $(".cart-total-bets");
  let cart_bet_amt = $(".cart-total-bet-amt").html();
  let cart_total_bet = $(".cart-total-bets").html();
  // let final_cart_bet_amt = (parseFloat( cart_bet_amt ) - parseFloat( itemBetAmt ))
  // let final_cart_bet = (parseFloat( cart_total_bet ) - parseFloat( itemBet ))
  sel_cart_bet_amt.html(game.sumBetAmtAndBets({ ...cart })[0]);
  sel_cart_total_bet.html(game.sumBetAmtAndBets({ ...cart })[1]);

  deleteThisRow.remove();
});

/*--------------------------------------------------------------
# Cart Ends Here
--------------------------------------------------------------*/

//display and hiding game type
function hideAllExcept(hideAll, except) {
  $(hideAll).hide();
  $(except).show();
}

//menu selections
$(` ${classNames.navItem}`).click(function () {
  $(`${classNames.gameNavBox} ${classNames.navItem}`).removeClass("active-svg");
  let navText = $(this).find(".nav-text").text();
  $(".active-game").text(navText);
  $(this).addClass("active-svg");
  let className = $(this).attr("data-class");
  if (oldClass != className) {
    oldClass = className;
    game.resetAllData();
    game = getClass(className);
    // ready(className);
  }
});

//group selections
$(".group-nav>li").click(function () {
  game.resetAllData();
  $(".group-nav>li").removeClass("active-nav");
  $(this).addClass("active-nav");
  let pointsTo = $(this).attr("data-points-to");
  hideAllExcept(".game-nav-box", `.${pointsTo}.game-nav-box`);
  $(`.${pointsTo} .nav-item-c:first`).click();
});

function getClass(className) {
  let classes = {
    a5_joint: a5_joint,
    a5_manual: a5_manual,
    a5_combo: a5_combo,
    a5_g120: a5_g120,
    a5_g60: a5_g60,
    a5_g30: a5_g30,
    a5_g20: a5_g20,
    a5_g10: a5_g10,
    a5_g5: a5_g5,
    fixed_place: fixed_place,
    any_plce_one_out_of_first_three: any_plce_one_out_of_first_three,
    any_place_two_out_of_first_three: any_place_two_out_of_first_three,
    any_place_one_out_of_mid_three: any_place_one_out_of_mid_three,
    any_place_two_out_of_mid_three: any_place_two_out_of_mid_three,
    any_place_one_out_of_last_three: any_place_one_out_of_last_three,
    any_place_two_out_of_last_last_three: any_place_two_out_of_last_last_three,
    any_place_one_out_of_first_four: any_place_one_out_of_first_four,
    any_place_two_out_of_first_four: any_place_two_out_of_first_four,
    any_place_three_out_of_first_four: any_place_three_out_of_first_four,
    any_place_one_out_of_last_four: any_place_one_out_of_last_four,
    any_place_two_out_of_last_four: any_place_two_out_of_last_four,
    any_place_three_out_of_last_four: any_place_three_out_of_last_four,
    any_place_one_out_of_five: any_place_one_out_of_five,
    any_place_two_out_of_five: any_place_two_out_of_five,
    any_place_three_out_of_five: any_place_three_out_of_five,
    f4_joint: f4_joint,
    f4_manual: f4_manual,
    f4_combo: f4_combo,
    f4_g24: f4_g24,
    f4_g12: f4_g12,
    f4_g6: f4_g6,
    f4_g4: f4_g4,
    l4_joint: l4_joint,
    l4_manual: l4_manual,
    l4_combo: l4_combo,
    l4_g24: l4_g24,
    l4_g12: l4_g12,
    l4_g6: l4_g6,
    l4_g4: l4_g4,
  };

  // console.log(settings()[className]);
  return new classes[className](/*settings()[className]*/);
}

function getDrawNums(url = false, data = false) {
  // let url = '../generateRandom.php';
  //  url = url || '../receiver.php?action=getdrawnumber';
  // url = "demo/generator.php";
  // url =  "http://192.168.199.126/task/receiver.php?action=getdrawnumber";
  url = "http://192.168.199.126/task/cron/draw_api.php";
  // data =  {
  //   last_id: 0,
  // };
  $.ajax({
    url: url,
    dataType: "json",
    type: "post",
    // data: JSON.stringify(data),
    success: function (data) {
      console.log(data);
    }
  })
  // game.fetchData(url, data).then(function(response){
  //   console.log(response);
  // });
}


// showDrawNums([1,0,5,6,7]);

$(function () {
  // Wait for the document to be ready
  fetchToolTipData().done((tooltipData) => {
    // Once the data is fetched, update the title attribute
    const tooltipTitle = JSON.parse(tooltipData)["1"];

    $("#tt").attr("data-bs-title", tooltipTitle);
    const tooltipTrigger = document.getElementById("how-to-play");
    const myTooltip = new bootstrap.Tooltip(tooltipTrigger, {
      title: tooltipTitle,
    });

    // Show the tooltip
    myTooltip.show();

    // Hide the tooltip
    myTooltip.hide();
  });
});

$(".nav-item-c ").on("click", function (e) {
  const tooltipTitle = tooltipData[`${$(e.currentTarget).data("game-id")}`];

  $("#tt").attr("data-bs-title", tooltipTitle);
  const tooltipTrigger = document.getElementById("how-to-play");
  const myTooltip = new bootstrap.Tooltip(tooltipTrigger, {
    title: tooltipTitle,
  });
});

function fetchToolTipData() {
  // let url = "http://localhost/Game-main/R5/add-ons/returnjson.php";
  let url = "http://192.168.199.126/task/receiver.php?action=gamerules";
  let callback = async function (resp) {
    tooltipData = await JSON.parse(resp);

    // console.log("tooltipData=================================", tooltipData["1"]);
  };
  return $.get(url, callback);
}


function formatDrawResponse(response) {

  response = sliceFromJson(response, -2); //gets the last two  data in the object
  let responseData = response[Object.keys(response)[0]]; // gets the last but one property of the object
  let timeLeft = response[Object.keys(response)[1]]; // gets the time left property
  let drawNumber = responseData.draw_number.split(",").map(el => +el); // gets the draw numbers in an array as integers
  let formattedResponse = {
    responseId: responseData.id,
    betId: responseData.draw_date,
    drawDatetime: responseData.draw_datetime,
    drawNumber: drawNumber,
    timeLeft: timeLeft,
    nextBetId: game.generateNextBetId(responseData.draw_date, responseData.draw_datetime, intervalMinutes),
    nextDrawDatetime: game.addMinutes(responseData.draw_datetime, intervalMinutes)
  }

  return formattedResponse;
}


/**
 * refreshes the page after a number of failed ajax requests.
 * @param {number} max the maximum number of times a request will be made if there's an error, before 
 *  page refreshes.
 * @param {string} randomName this holds the number of times the ajax call has been made. Function creates a global property 
 * in the "@totalRequests" object to avoid conflicts. Usually you can pass the function name as a string.
 */
 function reloadPageAfter(max, randomName) {
  if(totalRequests[randomName] === undefined)
    totalRequests[randomName] = 0;
  if (totalRequests[randomName] >= max) {
    window.location.reload();
  }
  totalRequests[randomName] += 1;

  console.log(totalRequests[randomName])
}


function getDrawData(intervalTime) {
  setTimeout(() => {
    fetch(urls.draws)
      .then(response => {
        if (response.ok) {
    
          return response.json();
        } else {
          throw new Error('Network response was not ok');
        }
      })
      .then(data => {
        const prettyResp = formatDrawResponse(data); //formats the response in the best way for processing.
        console.log(prettyResp);
        if (prettyResp.responseId != drawData.responseId) //if new data received
        {
          drawData = prettyResp;
          slotjs(drawData.drawNumber);
          // requestAnimationFrame(() => {
          progress(drawData.timeLeft - 3, 60, $("#progressBar"));
          // });
          const nextIntervalTime = drawData.timeLeft * 1000;
          getDrawData(nextIntervalTime);
        } else {
          console.info("No new data received");
          reloadPageAfter(50, "getDrawData");
          const retryAfter = 1000;
          getDrawData(retryAfter);
        }
      })
      .catch(error => {
        console.info("Retrying...");
        console.error('There was a problem fetching the data:', error);
        const retryTime = 1000;
        getDrawData(retryTime);
        reloadPageAfter(50, "getDrawData");
      });
  }, intervalTime);
}

getDrawData(0);

/**call all your functions here */
function callAllFunctionsHere() {
  let firstMultiplier = +$(".first-multiplier").val();
  let multiplyAfterEvery = +$(".multiplyAfterEvery").val();
  let multiplyBy = +$(".multiplyBy").val();
  let maxInput = +$(".total-draws").val();
  if (game.getTrackJson()) {
    game.changeCurrentButton()
    setTimeout(() => {
      game.generateSelectOptions(drawData.betId, game.addMinutes(draw
        .datetime, intervalMinutes));

      let trackJson = game.createTrackJson(drawData.nextDatetime, draw.nextBetId, maxInput, firstMultiplier, multiplyAfterEvery, multiplyBy, game.getTrackElement("trackInfo", "eachBetAmt"), game.getTrackElement("trackInfo", "totalBets"));
      game.createTrackInterface(trackJson)
      game.setTrackJson(trackJson)
    }, 1000);
  }
  console.log("===========================", drawData)

}
// countdown(30)
// slotjs([0,1,2,3,4,5])

class TotalBets {

  /**
 * Calculates the total number of possible combinations of selections across two rows, taking into account repeated selections between the rows.
 * @param {array} row1Selections - An array containing the selections for the first row.
 * @param {number} row1Sample - An integer representing the number of selections that can be made from the first row.
 * @param {array} [row2Selections=false] - An optional array containing the selections for the second row. Defaults to false if not provided.
 * @param {number} [row2Sample=false] - An optional integer representing the number of selections that can be made from the second row. Defaults to false if not provided.
 * @returns {number} - The total number of possible combinations of selections across both rows.
 */
  _combinations_totalBets(...rowsAndSamples) {
    let rows = [],
      samples = [];
    //dividing rows and samples
    rowsAndSamples.forEach((element) => {
      Array.isArray(element) ? rows.push(element) : samples.push(element);
    });

    let row1Len = rows[0].length; // Get length of row1 Selections
    if (!rows.length == 1) return this.getCombination(row1Len, samples[0]); // If there is only one row, return number of combinations for that row
    let row2Len = rows[1].length; // Get length of row2 Selections
    let row1Combinations = this.getCombination(row1Len, samples[0]); // Calculate number of combinations for first row
    let row2Combinations = this.getCombination(row2Len, samples[1]); // Calculate number of combinations for second row
    let totalCombinations = row1Combinations * row2Combinations; // Calculate total number of combinations
    let repeatedSelections = rows[1].filter((element) => rows[0].includes(element)).length; // Count the number of repeated selections between the two rows
    let combinationsWithoutRepeats = -1; // Placeholder for variable to be calculated
    if (samples[0] != 1) { // If there is more than one selection in the first row
      let repeatsToRemove = this.getCombination(row1Len - 1, samples[0] - 1) * repeatedSelections; // Calculate number of combinations with repeated selections to remove
      combinationsWithoutRepeats = totalCombinations - repeatsToRemove; // Calculate number of combinations without repeats
    }
    if (samples[1] != 1) { // If there is more than one selection in the second row
      let repeatsToRemove = this.getCombination(row2Len - 1, samples[1] - 1) * repeatedSelections; // Calculate number of combinations with repeated selections to remove
      combinationsWithoutRepeats = totalCombinations - repeatsToRemove; // Calculate number of combinations without repeats
    }
    return combinationsWithoutRepeats;
  }


  /**
   * Multiplies a given value by the lengths of all the elements in an array.
   * 
   * @param {number} multiplyBy - The value to multiply with.
   * @param {...Array} rows - A variable number of arrays whose lengths will be multiplied.
   * @returns {number} The final result of multiplying the lengths of all the input arrays.
   */
  _multiply_totalBets(multiplyBy, ...rows) {
    // Initialize the result to the input multiplyBy value
    let result = multiplyBy;

    // Store the number of input arrays
    let totalElements = rows.length;

    // Multiply the length of each array with the result
    for (let i = 0; i < totalElements; i++) {
      result *= rows[i].length;
    }

    return result;
  }




  /**
   * gets the n combination r of selection
   * @param {number} n total elements
   * @param {number} r sample taken at a time
   * @returns combination of a selection
   */
  getCombination(n, r) {
    if (!(r >= 0 && n >= r)) return 0; //error
    return this.factorial(n) / (this.factorial(r) * this.factorial(n - r));
  }
  /**
   * the factorial of a number
   * @param {number} num what is the factorial of 'num'? the 'num' what is supplied to the function
   * @returns the factorial of a number
   */
  factorial(num) {
    if (num == 0) return 1;
    if (num < 0) return 0; //error
    let result = num;
    for (let i = num - 1; i > 1; i--) result *= i;
    return result;
  }
}

function settings(className, gameId) {

  let labels = {
    0: ["1st", "2nd", "3rd", "4th", "5th", "", ""],
    1: ["1st", "2nd", "3rd", "4th"],
    2: ["One Pair", "One No."],
    3: ["Three of a Kind", "One No."],
    4: ["Three of a Kind", "One Pair"],
    5: ["Four of a Kind", "One No."],
    6: "manual",
  };
  let games = {
    a5_joint: {
      "label": labels[0].slice(0, 5),
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1, 1, 1, 1],
      "interface": 1
    },
    a5_manual: {
      "label": labels[6],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [],
      "interface": 1
    },
    a5_combo: {
      "label": labels[1],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1, 1, 1, 1],
      "interface": 1
    },
    a5_g120: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [5],
      "interface": 1
    },
    a5_g60: {
      "label": labels[2],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 3],
      "interface": 1
    },
    a5_g30: {
      "label": labels[2],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [2, 1],
      "interface": 1
    },
    a5_g20: {
      "label": labels[3],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 2],
      "interface": 1
    },
    a5_g10: {
      "label": labels[4],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1],
      "interface": 1
    },
    a5_g5: {
      "label": labels[5],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1],
      "interface": 1
    },
    f4_joint: {
      "label": labels[0].slice(0, 4),
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1, 1, 1],
      "interface": 1
    },
    f4_manual: {
      "label": labels[6],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [],
      "interface": 1
    },
    f4_combo: {
      "label": labels[0].slice(0, 4),
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1, 1, 1],
      "interface": 1
    },
    f4_g24: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [4],
      "interface": 1
    },
    f4_g12: {
      "label": labels[2],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 2],
      "interface": 1
    },
    f4_g6: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [2],
      "interface": 1
    },
    f4_g4: {
      "label": labels[3],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1],
      "interface": 1
    },
    l4_joint: {
      "label": labels[0].slice(1, 5),
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1, 1, 1],
      "interface": 1
    },
    l4_manual: {
      "label": labels[6],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [],
      "interface": 1
    },
    l4_combo: {
      "label": labels[0].slice(1, 5),
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1, 1, 1],
      "interface": 1
    },
    l4_g24: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [4],
      "interface": 1
    },
    l4_g12: {
      "label": labels[2],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 2],
      "interface": 1
    },
    l4_g6: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [2],
      "interface": 1
    },
    l4_g4: {
      "label": labels[3],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1],
      "interface": 1
    },

    //////All Behaviour Generalized Here///////
    select_1: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1],
      "interface": 1
    },
    select_2: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [2],
      "interface": 1
    },
    select_3: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [3],
      "interface": 1
    },
    select_4: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [4],
      "interface": 1
    },
    select_5: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [5],
      "interface": 1
    },
    select_2_1: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [2, 1],
      "interface": 1
    },
    select_1_2: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 2],
      "interface": 1
    },
    select_1_3: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 3],
      "interface": 1
    },
    select_1_1: {
      "label": [],
      "totalBets": 1,
      "gameId": gameId,
      "allSelections": "raw",
      "samples": [1, 1],
      "interface": 1
    },
  };

  return games[className];
}

/**
 * 
 * @param {object} Json JSON to extract from.
 * @param {number} slice the number of elements to extract. It uses same indexing as javascript slice() method.
 * @returns {object} extracted elements from the json object.
 */
function sliceFromJson(Json, sliceStart = undefined, sliceEnd = undefined) {
  let keys = Object.keys(Json).slice(sliceStart, sliceEnd);//Gets response data keys;
  let extractedObj = {};
  keys.forEach(key => {
    extractedObj[key] = Json[key];
  });
  return extractedObj;
}

function isOnline() {

  $.get("http://192.168.199.126/task/receiver.php?action=statuscode", function () {
    console.log("online");
  })
    .fail(function () {
      console.log("offline");
    })
}



// let x = setInterval(function(){console.log("hello world")}, 1000);
// setTimeout(function(){clearInterval(x);}, 5000);