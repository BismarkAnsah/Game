import { formatDateString } from "../../js/main.js";
// const ul = $(".ball-animation-ul");
// // const liHeight = li.height();
// let obj = {
//   0: "0px",
//   1: "-35px",
//   2: "-70px",
//   3: "-105px",
//   4: "-140px",
//   5: "-175px",
//   6: "-210px",
//   7: "-245px",
//   8: "-280px",
//   9: "-315px",
// };
// // let arr = [3, 2, 5, 6, 9];
// // generate a random order of stops
// let stops = [350, 350, 350, 350, 350];

export function startAnimation(arr, betId, nextBetId) {
  console.log("slot- animation called");

  $("#last-bet-id").fadeOut(function() {
    $(this).text(`${formatDateString(betId)}`).fadeIn();
  });
  $("#next_bet_id").fadeOut(function() {
    $(this).text(`${formatDateString(nextBetId)}`).fadeIn();
  });
    // Set up the HTML for the ball animation elements
  $(".slot-wrapper").html(`
        <ul class="ball-animation-ul ball-animation-ul-SSC">
            <li class="animation-list" style="margin-top: -350px">
                <div>0</div>
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
                <div>9</div>
                <div>0</div>
            </li>
            <li class="animation-list" style="margin-top: -350px">
                <div>0</div>
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
                <div>9</div>
                <div>0</div>
            </li>
            <li class="animation-list" style="margin-top: -350px">
                <div>0</div>
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
                <div>9</div>
                <div>0</div>
            </li>
            <li class="animation-list" style="margin-top: -350px">
                <div>0</div>
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
                <div>9</div>
                <div>0</div>
            </li>
            <li class="animation-list" style="margin-top: -350px">
                <div>0</div>
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
                <div>9</div>
                <div>0</div>
            </li>
        </ul>
    `);

  const li = $(".ball-animation-ul li"); // Get all the list items inside the ball animation UL
  

  li.each(function (index) {
    const delay = index * 100; // Set a delay for each list item based on its index
    const currentLi = $(this); // Get the current list item
    setTimeout(() => {
      anime({
        targets: li[index],
        marginTop: 0,
        duration: 1500,
        // delay: function(el, i) {
        //   return i * 1000;
        // },
        complete: () => {
            const num = arr[index];
          currentLi.css("margin-top", `-${num * 35}px`); 
          },
        easing: 'linear',
        loop: 2
      });
    }, delay);
  });
}

// start animation
// startAnimation(arr);
