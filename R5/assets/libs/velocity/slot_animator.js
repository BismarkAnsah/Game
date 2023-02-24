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

export function startAnimation(arr) {
    // Set up the HTML for the ball animation elements
  $(".slot-wrapper").html(`
        <ul class="ball-animation-ul ball-animation-ul-SSC">
            <li class="animation-list" data-margin-top="-175" style="margin-top: -30px">
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
            <li class="animation-list" data-margin-top="-105" style="margin-top: -30px">
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
            <li class="animation-list" data-margin-top="-280" style="margin-top: -30px">
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
            <li class="animation-list" data-margin-top="-315" style="margin-top: -30px">
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
            <li class="animation-list" data-margin-top="-35" style="margin-top: -30px">
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
  let stops = [350, 350, 350, 350, 350]; //ensures each list item is animated from top to down before the next one starts
  stops = stops.sort(() => Math.random() - 0.5); // Shuffle the stop positions array

  li.each(function (index) {
    const stopPosition = stops[index] * -1; // Calculate the stop position for each list item based on its index
    $(this).data("stopPosition", stopPosition); // Store the stop position as a data attribute on the list item
  });

  li.each(function (index) {
    const delay = index * 100; // Set a delay for each list item based on its index
    const currentLi = $(this); // Get the current list item
    const stopPosition = currentLi.data("stopPosition"); // Get the stop position for the current list item from its data attribute
    setTimeout(() => {
      currentLi.velocity(
        {
          marginTop: stopPosition + "px", // Animate the list item to its stop position
        },
        {
          duration: 3000,
          easing: "linear",
          loop: false,
          direction: "reverse",
          complete: function () {
            currentLi.css("margin-top", -arr[index] * 35 + "px"); // After the animation is complete, set the margin-top of the list item to show the correct number based on the value in the arr array
          },
        }
      );
    }, delay);
  });
}

// start animation
// startAnimation(arr);
