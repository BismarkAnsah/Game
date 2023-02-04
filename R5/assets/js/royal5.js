import * as $C from "../libs/combinatorics/combinatorics.js";
// import fixedPlace from "./c1`omponents/fixed_place.js";
import { truncate, checkRemainingSelectOptions } from "./main.js";

$(".eye, .eye-slash").click(function () {
  $(".balance-box").toggleClass("show-balance");
});
// import { animateDraw } from "../lib/slot-master/slot.js";
class Royal5utils {
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
  constructor(pageId) {
    // this.pageId = pageId;
    // this.page = $(pageId);
  }

  hideAllExcept(hideAll, except) {
    $(hideAll).hide();
    $(except).show();
  }

  $(element = "") {
    // return element ? $(this.pageId).find(element) : this.$(this.pageId);
    return $(element);
  }

  /** gets current bet type */
  getBetType() {
    // this.$("nav-item-c active-svg")
    //get svg object, like a jquery object
    let svg = $(".nav-item-c:visible.active-svg");
    //use jquery functions to do some thing
    let currentBetType = svg.find(".nav-text").text();
    //  console.log(findd)
    //  console.log(svg)
    //  console.log(svg.find(".nav-text").html())

    return currentBetType;
  }

  getPageId() {
    return this.pageId;
  }
  selectAll(row = this.classNames.row1Nums, effects = "active-btn") {
    this.$(row).addClass(effects);
  }

  selectBig(row = this.classNames.row1Nums, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(`${row}:nth-child(n+7)`).addClass(effects);
  }

  selectSmall(row = this.classNames.row1Nums, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(`${row}:nth-child(-n+6)`).addClass(effects);
  }

  selectEven(row = this.classNames.row1Nums, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(`${row}:nth-child(even)`).addClass(effects);
  }

  selectOdd(row, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(`${row}:nth-child(odd)`).addClass(effects);
  }

  clear(row, effects = "active-btn") {
    this.$(row).removeClass(effects);
  }

  selectAmount(row, effects = "active-btn") {
    this.$(row).removeClass(effects);
    this.$(row).addClass(effects);
  }

  selectElement(target, effects = "active-btn") {
    this.$(target).removeClass(effects);
    console.log(this.$(this));
    this.$(this).addClass(effects);
  }

  toggleBetsDisplay(totalBets) {
    if (totalBets) {
      this.$(".least-bet-info").hide();
    } else this.$(".total-bets-info").hide();
  }

  applyEffects(effectsClass, elementSelector) {
    this.$(elementSelector).addClass(effectsClass);
  }
  /**
   *
   * @param label {,boolean, array}  the label names to display for each button row. specify false when no label is present. default is false
   * @param manual {,boolean}  whether game interface is manual or not. default is false
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

  appendRow(type, detail, bets, unit, multiplier, betAmt, index) {
    let cartItem = `<tr id="cart-row${index}">
      <th scope="row">${type}</th>
      <td>${detail}</td>
      <td>${bets}</td>
      <td>${unit}</td>
      <td>${multiplier}</td>
      <td>${betAmt}</td>
      <td><i class="del bx bxs-trash" id="del-${index}"></i></td>
      </tr>`;
    $(".cart-items").prepend(cartItem);
    $("#cart-submit").show();
    $(".clear-cart").show();
    // $(`del-${index}`).fadeIn('slow', function() { $(this).prepend(cartItem); });
  }

  createTrackJson(
    firstDrawDate,
    firstDrawId,
    totalDraws,
    firstMultiplier,
    multiplyAfterEvery,
    multiplyBy,
    unitAmt
  ) {
    firstDrawId = parseInt(firstDrawId);
    let currentDrawDate = new Date(firstDrawDate);
    let nextDrawDate, betAmt;
    let track = [];
    let nextDay = false;
    let trackNo = 0;
    let multiplier = firstMultiplier;
    track[0] = {
      trackNo: ++trackNo,
      trackId: this.getTrackID(currentDrawDate, firstDrawId),
      multiplier: firstMultiplier,
      betAmt: firstMultiplier * unitAmt,
      estimatedDrawTime:
        this.getDate(currentDrawDate) + " " + this.getTime(currentDrawDate),
      nextDay: nextDay,
      current: true,
    };

    for (let i = 1; i < totalDraws; i++) {
      nextDrawDate = new Date(
        this.addMinutes(currentDrawDate, intervalMinutes)
      );
      if (!nextDay) {
        nextDay = this.isNextDay(currentDrawDate, nextDrawDate);
        firstDrawId = nextDay ? 0 : firstDrawId;
      }
      multiplier =
        trackNo % multiplyAfterEvery == 0
          ? multiplier * multiplyBy
          : multiplier;

      multiplier = multiplier >= 99999 ? 99999 : multiplier;
      betAmt = this.truncate(multiplier * unitAmt, 4);
      // betAmt = (multiplier * unitAmt).toFixed(4);
      track[i] = {
        trackNo: ++trackNo,
        trackId: this.getTrackID(nextDrawDate, ++firstDrawId),
        multiplier: multiplier,
        betAmt: betAmt,
        estimatedDrawTime:
          this.getDate(nextDrawDate) + " " + this.getTime(nextDrawDate),
        nextDay: nextDay,
      };
      currentDrawDate = nextDrawDate;
    }

    return track;
  }

  createTrackInterface(
    firstDrawDate,
    firstDrawId,
    totalDraws,
    firstMultiplier,
    multiplyAfterEvery,
    multiplyBy,
    unitAmt
  ) {
    let trackJson = this.createTrackJson(
      firstDrawDate,
      firstDrawId,
      totalDraws,
      firstMultiplier,
      multiplyAfterEvery,
      multiplyBy,
      unitAmt
    );
    let entries = this.$(".track-entry:visible");
    let entriesLength = entries.length;
    let nextIndex = 0;
    let selectTrackIds = [];
    console.log("already there", entriesLength);
    entries.each(function (index) {
      $(entries[index]).find(".trackNo").text(trackJson[index].trackNo);
      $(entries[index]).find(".trackID").text(trackJson[index].trackId);
      $(entries[index]).find(".betAmt").text(trackJson[index].betAmt);
      $(entries[index])
        .find(".estimatedDrawTime")
        .text(trackJson[index].estimatedDrawTime);
      $(entries[index])
        .find(".track-multiplier")
        .val(trackJson[index].multiplier);
      ++nextIndex;
    });
    let remainEntriesLength = totalDraws - entriesLength;
    let output = "";
    console.log("remaining entries", remainEntriesLength);
    for (let i = 0; i < remainEntriesLength; i++, nextIndex++) {
      selectTrackIds.push(trackJson[nextIndex].trackId);
      $('select[name="first_draw"]').append(
        `<option value="${trackJson[nextIndex].trackId}">${trackJson[nextIndex].trackId}</option>`
      );
      output += `<tr class="track-entry">
      <td class="trackNo">${trackJson[nextIndex].trackNo}</td>
      <td>
        <ul class="list-unstyled  my-ul-el justify-content-between align-items-center g-2">
          <li class="col-md-2">
            <input
            checked
              class="form-check-input slave"
              type="checkbox"
              name="track_number"
              id="track_number"
            />
          </li>
          <li class="col-md-7">
            <span class="trackID">${trackJson[nextIndex].trackId}</span>
          </li>
          <li class="col-md-3">`;
      output += trackJson[nextIndex].current
        ? `<button class=" m-btn-orange p-2">current</button>`
        : "";
      output += trackJson[nextIndex].nextDay
        ? `<button type="button" class="btn-next-day m-btn-indigo p-2" data-toggle="button" aria-pressed="false" autocomplete="off">next day</button>`
        : "";
      output += `</li>
        </ul>
      </td>
      <td class="d-flex justify-content-center align-content-center">
        <div class="col-sm-4">
          <input 
            type="number"
            min="1"
            class="form-control track-multiplier"
          value="${trackJson[nextIndex].multiplier}"/>
        </div>
      </td>
      <td class="betAmt">${trackJson[nextIndex].betAmt}</td>
      <td class="estimatedDrawTime">${trackJson[nextIndex].estimatedDrawTime}</td>
    </tr>`;
    }

    $(".track-data").append(output);
    console.log(selectTrackIds);
    // for (const trackIds of selectTrackIds) {

    //   $('select[name="first_draw"]').append(`<option value="${trackIds}">${trackIds}</option>`);
    // }
  }

  onlyNums(value, minValue = 1, maxValue = 9999) {
    let onlyNums = parseInt(value.replace(/\D+/g, ""));
    onlyNums = onlyNums ? onlyNums : minValue;
    onlyNums = onlyNums >= maxValue ? maxValue : onlyNums;
    return onlyNums;
  }

  addMinutes(date, minutes) {
    return new Date(date.getTime() + minutes * 60000);
  }

  getTrackID(date, id) {
    return (
      date.getFullYear() +
      String(date.getMonth() + 1).padStart(2, "0") +
      date.getDate() +
      "-" +
      String(id).padStart(3, "0")
    );
  }

  getTime(date) {
    return (
      String(date.getHours()).padStart(2, "0") +
      ":" +
      String(date.getMinutes()).padStart(2, "0") +
      ":" +
      String(date.getSeconds()).padStart(2, "0")
    );
  }
  getDate(date) {
    return (
      date.getFullYear() +
      "-" +
      String(date.getMonth() + 1).padStart(2, "0") +
      "-" +
      String(date.getDate()).padStart(2, "0")
    );
  }

  isNextDay(date, checkDate) {
    const date1 = new Date(date);
    const date2 = new Date(checkDate);
    if (date1.getDate() != date2.getDate()) return true;
    return false;
  }

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

  fetchData(url, data = []) {
    data = data || JSON.stringify(data);

    return $.ajax({
      url: url,
      data: data,
    });
  }
  deleteFromCart(id, cart) {
    let key = id.split("-")[1];
    delete cart[key];
  }

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

  decimalCount(value) {
    const strValue = String(value);
    return strValue.includes(".") ? strValue.split(".")[1].length : 0;
  }
  getCombination(n, r) {
    if (!(r >= 0 && n >= r)) return -1;
    return this.factorial(n) / (this.factorial(r) * this.factorial(n - r));
  }
  factorial(num) {
    if (num == 0) return 1;
    if (num < 0) return -1;
    let result = num;
    for (let i = num - 1; i > 1; i--) result *= i;
    return result;
  }

  calcPseudoUnit() {
    return this.truncate(this.betAmt / this.totalBets);
  }

  fixArithmetic(value) {
    return +value.toFixed(8);
  }
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

  calcBetAmt() {
    return this.totalBets * this.multiplier * this.unitAmt;
  }

  calcActualAmt() {
    let actualAmt =
      this.totalBets * this.truncate(this.betAmt / this.totalBets);
    return parseFloat(actualAmt.toFixed(3));
  }

  calcMultiplier() {
    let actualAmt = this.calcActualAmt();
    let unitAmt = this.calcUnitAmt();
    return +(actualAmt / (this.totalBets * unitAmt)).toFixed(8);
  }

  calcPrize(prize) {
    let winAmt = this.multiplier * this.unitAmt * prize;
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

  calcUnitFromModel(balance, modelValue) {
    if (!this.totalBets) return 1;
    let unitAmt = (balance * modelValue) / this.totalBets;
    return this.truncate(unitAmt);
  }

  calcAmtFromModel(balance, modelValue) {
    let unitAmt = this.calcUnitFromModel(balance, modelValue);
    let amt = +(this.totalBets * unitAmt).toFixed(8);
    return amt;
  }

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

  // totalBet()
  // {

  // }

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

  /**Getters */
  getCart() {
    return this.cart;
  }

  getAllRows() {
    return this.rows;
  }

  getMultiplier() {
    return this.multiplier;
  }

  getBetAmt() {
    return this.betAmt;
  }

  getTotalBets() {
    return this.totalBets;
  }

  setMultiplier(multiplier) {
    this.multiplier = multiplier;
  }

  setTotalBets(totalBets) {
    this.totalBets = totalBets;
  }
  setBetAmt(amt) {
    this.betAmt = amt;
  }

  setUnitAmt(amt) {
    this.unitAmt = amt;
  }

  getUnitAmt() {
    return this.unitAmt;
  }

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
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class a5_g60 extends Royal5utils {
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
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return (
      ((row2.length * (row2.length - 1) * (row2.length - 2)) / 6) *
        (row1.length - repeat) +
      (repeat * (row2.length - 1) * (row2.length - 2) * (row2.length - 3)) / 6
    );
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
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1
    );
    readyData.userSelections = Object.values(this.rows).join("|");
    return readyData;
  }
}

class a5_joint extends Royal5utils {
  gameId = 1;
  type = "All 5 Straight(Joint)";
  labels = ["1st", "2nd", "3rd", "4th", "5th"];
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
    this.createGameInterface(this.labels);
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
    readyData.allSelections = this.allSelections(
      ...Object.values(this.rows),
      this.sample1,
      this.sample2
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

const intervalMinutes = 5; // Royal5 draw number intervals
const maxEntryValue = 9999; //maximum value allowed for input fields
let lastId = 0;
let initializedClasses = [];
let cart = [];
let oldClass = "a5_joint";
let balanceUrl = "http://192.168.199.126/task/receiver.php?action=userbalance";
let game = new a5_joint("#a5-joint");
hideAllExcept(".game-nav-box", ".game-nav-box.all5");
// let balance = await game.fetchData(balanceUrl) || 500;
let balance = 500;
// $('.user-balance').html(JSON.parse(balance).userBalance);

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
  $("#first__draw__select").on("change", function () {
    console.log("changed")
    // checkRemainingSelectOptions("#first__draw__select")
    let drawSelect =  checkRemainingSelectOptions("#first__draw__select");
    console.log(drawSelect)
  })
  game.$(classNames.allBtn).click(function () {
    let data = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    let row = $(this).parent().attr("data-points-to");
    game.selectAll(`.num-group.${row}>button`);
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
  /**Track Begins */

  game.$(".track").click(function () {
    // alert('click')m-group-type
// m-group
// m-bet
// m-units
    //TODO ========= get user bet data======================
    // console.log(game.getSavedData());
    // console.log(game.getBetType());
    $(".m-group-type").text(game.getBetType());
    $(".m-detail").text(truncate(game.getSavedData().userSelections.split(",").join(" "), 19));
    $(".m-bet").text(game.getSavedData().totalBets);
    $(".m-units").text(game.getSavedData().unitStaked);
    $(".m-currency").text(game.getSavedData().totalBetAmt);

    game.createTrackInterface("2023-01-31 20:24:55", 161, 10, 3, 4, 3, 0.002);
  });

  /**Track Ends */

  /**Edit Track Begins */
  game
    .$(".total-draws, .first-multiplier, .multiplyAfterEvery, .multiplyBy")
    .on("input", function () {
      let thisValue = $(this).val();
      let totalDraws = $(".total-draws").val();
      $(this).val(game.onlyNums(thisValue));
      $(".total-draws").val(game.onlyNums(totalDraws, "", 120));
      totalDraws = parseInt($(".total-draws").val());
      let firstMultiplier = parseInt($(".first-multiplier").val());
      let multiplyAfterEvery = parseInt($(".multiplyAfterEvery").val());
      let multiplyBy = parseInt($(".multiplyBy").val());
      $(".track-data").children().hide();
      $(".track-data").children().slice(0, totalDraws).show();
      game.createTrackInterface(
        "2023-01-31 20:24:55",
        154,
        totalDraws,
        firstMultiplier,
        multiplyAfterEvery,
        multiplyBy,
        game.getUnitAmt()
      );
    });

  game
    .$(".total-draws, .first-multiplier, .multiplyAfterEvery, .multiplyBy")
    .click(function () {
      $(this).select();
    });
  /**Edit Track Ends */

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
    game.setBetAmt(game.calcBetAmt());  ``
    game.$("input.bet-amt").val("");
    game.$(".multiplier-select").removeClass("active-btn");
    game.$(`.multiplier-select[value='${value}']`).addClass("active-btn");
    showBetsInfo();
  });

  game.$(".cart").click(function () {
    game.pushToCart(cart);
    game.resetAllData();
  });

  game.$(".bet-now").click(function () {
    game.disableButtons(true, ".cart", "input.bet-amt");
    game.$(".spinner").show();
    // game.alertErrBets();
    let savedData = game.getSavedData();
    console.log(savedData);
    let data = JSON.stringify([savedData]);
    // let url = '../nav.php';
    let url = "http://192.168.199.126/task/nav.php";
    let req = $.post(url, data, function (response) {
      // console.log(response);
      game.$(".spinner").hide();
      response = JSON.parse(response);
      if (response.title == "success") {
        game.fetchData(balanceUrl).then((response) => {
          response = JSON.parse(response);
          $(".user-balance").html(response.userBalance);
        });
        alert(response.message);
        // toastr.options.progressBar = true;
        // toastr.success(response.message, response.title);
        game.resetAllData();
        cart = [];
      } else {
        // toastr.options.progressBar = true;
        // toastr.warning(response.message, response.title);
        game.disableButtons(false, ".cart", ".bet-now");
        alert(response.message);
      }

      req.fail(function () {
        alert("failed");
        // toastr.options.progressBar = true;
        // toastr.warning('Please check your internet connection', 'Failed');
      });
    });
  });

  $("#cart-submit").click(function () {
    let data = JSON.stringify(cart);
    let url = "../nav.php";
    console.log(data);
    let req = $.post(url, data, function (response) {
      // console.log(response);
      response = JSON.parse(response);
      if (response.title == "success") {
        toastr.options.progressBar = true;
        toastr.success(response.message, response.title);
        $(".del").click();
      } else {
        toastr.options.progressBar = true;
        toastr.warning(response.message, response.title);
      }
      req.fail(function () {
        toastr.options.progressBar = true;
        toastr.warning("Please check your internet connection", "Failed");
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

$(document).on("click", ".del", function () {
  // let deleteThisRow = $(this).closest("tr");
  // deleteThisRow.remove();

  let id = $(this).attr("id");
  game.removeFromCart(id);
});

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
    game = getClass(className, /*`#${pointsTo}`*/ ".game-interface");
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
  // game = getClass(className, `#${pointsTo}`);
  // if(oldClass != className){
  // oldClass = className;
  // ready(className);
  // let hideAll = '.game-group.page';
  // let except  = `#${pointsTo}`;
  // hideAllExcept(hideAll, except);
  // hideAllExcept('.game-nav', `.game-nav.${pointsTo}`);
  //}
});

function getClass(className, classConstructor) {
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
    f4_g24: f4_g24,
    f4_g6: f4_g6,
    fixed_place: fixed_place,
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
  return new classes[className](classConstructor);
}

function getDrawNums(url = false, data = false) {
  // let url = '../generateRandom.php';
  //  url = url || '../receiver.php?action=getdrawnumber';
  url = url || "http://192.168.199.126/task/receiver.php?action=getdrawnumber";
  data = data || {
    last_id: lastId,
  };
  return fetchData(url, data).numbers;
}

function showDrawNums(drawNums = getDrawNums()) {
  $(".wining_num").each(function (index) {
    $(this).html(drawNums[index]);
  });
}
// showDrawNums([1,0,5,6,7]);

$().ready(function () {
  // let url = '../generateRandom.php';
  // let url = '../receiver.php?action=getdrawnumber';
  let url = "http://192.168.199.126/task/receiver.php?action=getdrawnumber";
  let data = {
    last_id: lastId,
  };
  data = JSON.stringify(data);
  let req = $.post(url, data, function (response) {
    response = JSON.parse(response);
    lastId = response.id;
    // console.log(response);
    $(".wining_num").each(function (index) {
      $(this).html(response.numbers[index]);
    });
  });
  req.fail(function () {
    console.log("failed");
  });
});

function drawNum() {
  // let url = '../generateRandom.php';
  let url = "http://192.168.199.126/task/receiver.php?action=getdrawnumber";
  let data = {
    last_id: lastId,
  };
  data = JSON.stringify(data);
  let req = $.post(url, data, function (response) {
    response = JSON.parse(response);
    if (response.numbers) {
      // console.log(response);
      // lastId = response.id;
      $(".wining_num").each(function (index) {
        $(this).html(response.numbers[index]);
      });
    }
  });
  req.fail(function () {
    console.log("failed");
  });
}
// slotjs([9, 2, 3, 4, 5]);
