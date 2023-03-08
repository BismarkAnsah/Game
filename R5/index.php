<!DOCTYPE html>
<html lang="en">
<!-- <?php
// session_start();
// // php code to check if session betuser is not set?
// echo (!isset($_SESSION['betuser'])) ? '<script>window.location="login.php"</script>' : '';

?> -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Web 1920 - 1</title>
    <link rel="stylesheet" href="assets/css/cart-area-style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/libs/HackTimer/HackTimer.js"></script>
    <script src="assets/libs/AnimeJs/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <script defer src="assets/js/jquery-3.6.3.min.js"></script>
    
</head>

<body>
    <div id="Web_1920__1">

        <div class="" style="width: 200px; height:500px; background: #49546d; position: absolute;">dsfsafdsa</div>

        <div class="row-c">
            <ul class="quick-settings-box simple-hover">
                <li>
                    <i class="fas fa-arrow-circle-left" aria-hidden="true"></i>
                    <span>Back to lobby</span>
                </li>
                <li>
                    <i class="fas fa-volume-up"></i>
                    <span>Call of Heros</span>
                </li>
                <li>
                    <i class="fas fa-user-circle"></i>
                    <span>kzing00kzd9527</span>
                </li>
                <li class="balance-box show-balance">
                    <span>Bal.</span>
                    <i class="fa-solid fa-yen-sign"></i>
                    <span class="user-balance" style="display: none">38.000</span>
                    <span class="asterisks"><i class="fa-solid fa-asterisk asterisk"></i><i
                            class="fa-solid fa-asterisk"></i><i class="fa-solid fa-asterisk"></i>
                    </span>
                    <i class="fa-solid fa-eye eye" style="display: none"></i>
                    <i class="fas fa-eye-slash eye-slash"></i>
                </li>

                <li>
                    <i class="fas fa-calendar-alt"></i>
                    <span>Record</span>
                </li>
                <li>
                    <i class="fa-solid fa-user-gear"></i>
                    <span>Setting</span>
                </li>
                <li>
                    <i class="fas fa-language"></i>
                    <span>English</span>
                </li>
            </ul>
        </div>

        <div class="row-c status-box">
            <div id="n_02212211287__">
                <span>NO:</span> <span id="last-bet-id">202212211287 </span><span style="color: rgba(112, 112, 112, 1)">
                    期・截止时间</span>
            </div>

            <div class="timer-box row">
                <ul class="nav justify-content-center align-items-center ">
                    <li class="nav-item d-flex flex-column justify-content-center">
                        <span class="timer-date-time">hours</span>
                        <div class="d-inline text-center">
                            <span class="timer-box-contents" id="hrs"></span>
                        </div>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-center mt-3">
                        <span class="timer-date-time-colon">:</span>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-center">
                        <span class="timer-date-time">minutes</span>
                        <div class="d-inline text-center"><span class="timer-box-contents" id="mins"></span></div>
                    </li>

                    <li class="nav-item d-flex  mt-3">
                        <span class="timer-date-time-colon">:</span>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-center">
                        <span class="timer-date-time">seconds</span>
                        <div class="d-inline text-center">
                            <span class="timer-box-contents" id="secs"></span>
                        </div>

                    </li>
                </ul>
                <!-- <div class="col-sm-4">
                    <p class="timer-date-time">hours</p>
                    <h2 id="hrs" class="inline"></h2>
                    </div>
                    <div class="col-sm-4">
                    <p class="timer-date-time">minutes</p>
                    <h2 id="mins" class="inline"></h2>
                    </div>
                    <div class="col-sm-4">
                    <p class="timer-date-time">seconds</p>
                    <h2 id="secs" class="inline"></h2>
                    </div> -->

                <!-- <div class="hrs">
                <p class="timer-date-time">hours</p>
                <h2 id="hrs" class="inline"></h2><span>:</span>
                </div>
                <div class="mins">
                    <p class="timer-date-time">minutes</p>
                <h2 id="mins"></h2>
                </div>
                <div class="secs">
                    <p class="timer-date-time">seconds</p>
                <h2 id="secs"></h2>
                </div> -->
                <!-- <div class="hrs">
                    <span>HRS</span>
                    <span>00</span>
                </div>
                <div class="hrs">
                    <span>MIN</span>
                    <span>00</span>
                </div>
                <div class="hrs">
                    <span>SEC</span>
                    <span>00</span>
                </div> -->
            </div>

            <div class="bet-id">
                <span>NO: </span><span id="next_bet_id" style="color: rgba(207, 121, 119, 1)">20221108-246</span>
            </div>
            <div class="for-sale">
                <span>For sale</span>
            </div>
            <div class="Rectangle_93">
                <!-- <div class="Rectangle_37" style="height: 24px;"></div> -->
                <div id="progressBar">
                    <div class="bar"></div>
                </div>
                <div class="current-px visually-hidden"></div>
            </div>
            <div class="draw-num-box container">
                <div class="slot-wrapper">

                </div>
                <div><button id="control" style="display: none">Start</button></div>
            </div>
        </div>

        <div id="Group_2">
            <div class="work-area outline">
                <div class="work-area" style="border: px solid black">
                    <div class="game-group-nav-box">
                        <ul class="group-nav simple-hover">
                            <li class="active-nav" data-points-to="all5">All 5</li>
                            <li data-points-to="all4">All 4</li>
                            <li data-points-to="first3">First 3</li>
                            <li data-points-to="mid3">Mid 3</li>
                            <li data-points-to="last3">Last 3</li>
                            <li>First 2</li>
                            <li>Last 2</li>
                            <li data-points-to="fixed-place">Fixed place</li>
                            <li data-points-to="any-place">Any Place</li>
                            <li>B/S/O/E</li>
                            <li>Fun</li>
                            <li>Pick 2</li>
                            <li>Pick 3</li>
                            <li>Pick 4</li>
                        </ul>
                    </div>
                    <div class="d-flex flex-column justify-content-end" style="margin-left: 50px">
                        <div class="all5 game-nav-box">
                            <label for="">Straight:</label>
                            <div class="straight">
                                <div class="active-svg nav-item-c" data-class="a5_joint" data-game-id="1">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">All 5 straight(Joint)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="a5_manual" data-game-id="2">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">All 5 straight(manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="a5_combo" data-game-id="3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">All 5 straight(combo)</span>
                                    </div>
                                </div>
                            </div>
                            <label for="">Group:</label>
                            <div class="group">
                                <div class="nav-item-c" data-class="a5_g120" data-game-id="4">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">All 5 Group 120</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="a5_g60" data-game-id="5">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">All 5 Group 60</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="a5_g30" data-game-id="6">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">All 5 Group 30</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="a5_g20" data-game-id="7">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">All 5 Group 20</span>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="nav-item-c" data-class="a5_g10" data-game-id="8">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">All 5 Group 10</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="a5_g5" data-game-id="9">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">All 5 Group 5</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="all4 game-nav-box">
                            <label for="">Straight:</label>
                            <div class="straight">
                                <div class="active-svg nav-item-c" data-class="f4_joint">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 4 Straight(Joint)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f4_manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 4 straight(manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f4_combo">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 4 straight(combo)</span>
                                    </div>
                                </div>
                            </div>
                            <label for="">Group:</label>
                            <div class="group">
                                <div class="nav-item-c" data-class="f4_g24">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 4 Group 24</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f4_g12">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text"> First 4 Group 12</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f4_g6">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text"> First 4 Group 6</span>
                                    </div>
                                </div>
                                <br />
                                <div class="nav-item-c" data-class="f4_g4">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text"> First 4 Group 4</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <label for="">Straight:</label>
                            <div class="straight">
                                <div class="nav-item-c" data-class="l4_joint">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Last 4 Straight(Joint)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="l4_manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Last 4 straight(manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="l4_combo">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Last 4 straight(combo)</span>
                                    </div>
                                </div>
                            </div>
                            <label for="">Group:</label>
                            <div class="group">
                                <div class="nav-item-c" data-class="l4_g24">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Last 4 Group 24</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="l4_g12">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text"> Last 4 Group 12</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="l4_g6">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text"> Last 4 Group 6</span>
                                    </div>
                                </div>
                                <br />
                                <div class="nav-item-c" data-class="l4_g4">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text"> Last 4 Group 4</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="first3 game-nav-box">
                            <label for="">Straight:</label>
                            <div class="straight">
                                <div class="nav-item-c" data-class="f3_joint">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Straight(Joint)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 straight(manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_combo">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 straight(combo)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="sum_f3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Sum of First 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="straight">
                                <div class="nav-item-c" data-class="span_f3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Span of First 3</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <label for="">Group:</label>
                            <div class="group">
                                <div class="nav-item-c" data-class="f3_g3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 3</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_g6">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 6</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_gCombo">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Combo Group</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_gSum">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Sum of Group</span>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="nav-item-c" data-class="f3_g3_Manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 3(Manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_g6_Manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 6(Manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_fixed_digit">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Fixed Digit</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_gSum">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Sum of Group</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <label for="">Other:</label>
                            <div class="other">
                                <div class="nav-item-c" data-class="f3_sum_tails">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Sum of Tails</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mid3 game-nav-box">
                            <label for="">Straight:</label>
                            <div class="straight">
                                <div class="nav-item-c" data-class="f3_joint">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Mid 3 Straight(Joint)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Mid 3 straight(manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_combo">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Mid 3 straight(combo)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="sum_f3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Sum of First 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="straight">
                                <div class="nav-item-c" data-class="span_f3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Span of First 3</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <label for="">Group:</label>
                            <div class="group">
                                <div class="nav-item-c" data-class="f3_g3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 3</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_g6">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 6</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_gCombo">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Combo Group</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_gSum">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Sum of Group</span>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="nav-item-c" data-class="f3_g3_Manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 3(Manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_g6_Manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 6(Manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_fixed_digit">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Fixed Digit</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_gSum">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Sum of Group</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <label for="">Other:</label>
                            <div class="other">
                                <div class="nav-item-c" data-class="f3_sum_tails">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Sum of Tails</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="last3 game-nav-box">
                            <label for="">Straight:</label>
                            <div class="straight">
                                <div class="nav-item-c" data-class="f3_joint">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Straight(Joint)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 straight(manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_combo">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 straight(combo)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="sum_f3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Sum of First 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="straight">
                                <div class="nav-item-c" data-class="span_f3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Span of First 3</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <label for="">Group:</label>
                            <div class="group">
                                <div class="nav-item-c" data-class="f3_g3">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 3</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_g6">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 6</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_gCombo">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Combo Group</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_gSum">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Sum of Group</span>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="nav-item-c" data-class="f3_g3_Manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 3(Manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_g6_Manual">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Group 6(Manual)</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_fixed_digit">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Fixed Digit</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="f3_gSum">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Sum of Group</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <label for="">Other:</label>
                            <div class="other">
                                <div class="nav-item-c" data-class="f3_sum_tails">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">First 3 Sum of Tails</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fixed place -->
                        <div class="fixed-place game-nav-box">
                            <label for="">Fixed place:</label>
                            <div class="other">
                                <div class="nav-item-c" data-class="fixed_place">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Fixed place</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fixed place -->

                        <!-- Any place -->
                              <!--All 3 -->
                        <div class="any-place game-nav-box">
                            <label for="">All 3:</label>
                            <div class="group">
                                <div class="active-svg nav-item-c" data-class="any_plce_one_out_of_first_three">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                            <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                                <path class="path-fill"
                                                    d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                                </path>
                                            </svg>
                                    <div class="nav-text">
                                        <span class="text label-space">Any place 1 out of First 3</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_two_out_of_first_three">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 2 out First 3</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_one_out_of_mid_three">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 1 out of Mid 3</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_two_out_of_mid_three">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 2 Out of Mid 3</span>
                                    </div>
                                </div>
                            </div>

                            <label for=""></label>
                            <div class="group">
                                <div class="nav-item-c" data-class="any_place_one_out_of_last_three">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 1 out of Last 3</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_two_out_of_last_last_three">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 2 out of Last 3</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                          </div>
                           <!-- All 3  -->
                            <!-- All 4 -->
                            <div class="any-place game-nav-box">
                            <label for="">All 4:</label>
                            <div class="group">
                                <div class="active-svg nav-item-c" data-class="any_place_one_out_of_first_four">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 1 out of First 4</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_two_out_of_first_four">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 2 out of First 4</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_three_out_of_first_four">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 3 out of First 4</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_one_out_of_last_four">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 1 out of Last 4</span>
                                    </div>
                                </div>
                            </div>

                            <label for=""></label>
                            <div class="group">
                                <div class="nav-item-c" data-class="any_place_two_out_of_last_four">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 2 out of Last 4</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_three_out_of_last_four">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 3 out of Last 4</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                           
                            <label for="">All 5</label>
                            <div class="group">
                                <div class="nav-item-c" data-class="any_place_one_out_of_five">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 1 out of 5</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_two_out_of_five">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 2 out of 5</span>
                                    </div>
                                </div>
                                <div class="nav-item-c" data-class="any_place_three_out_of_five">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text">Any Place 3 out of 5</span>
                                    </div>
                                </div>
                                <!-- <br />
                                <div class="nav-item-c" data-class="any_place">
                                    <svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
                                        <path class="path-outline"
                                            d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
                                        </path>
                                    </svg>
                                    <svg class="path-fill-box" viewBox="1566.5 8196 354 52">
                                        <path class="path-fill"
                                            d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
                                        </path>
                                    </svg>
                                    <div class="nav-text">
                                        <span class="text"> Last 4 Group 4</span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                            <!-- All 4 -->

                        <!-- Any place -->
                        <div class="row-c">
                            <div class="col-c active-game-box">
                                <span class="active-game">All 5 straight(Joint)</span>
                                <span>Prize:
                                    <span class="prize-value" style="color: red">1965.15</span></span>
                            </div>

                            <div class="solo-play">
                                <button id="how-to-play" data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="Another one here too">How to play</button>
                                <button id="What_is_solo">What is solo?</button>
                            </div>

                            <div class="hotCold-lack col-c">
                                <div class="hotCold-box">
                                    <input class="hotCold btn-c" type="radio" name="hotCold-lack" id="hotCold" /><label
                                        for="hotCold">Hot/Cold</label>
                                </div>
                                <div class="lack-box">
                                    <input class="lack btn-c" type="radio" name="hotCold-lack" id="lack" /><label
                                        for="lack">Lack</label>
                                </div>
                            </div>
                        </div>
                        <div class="allRows num-btn-controls game-interface" style="display: none">
                            <div class="row1 interface-item">
                                <div class="col-c num-group row1" data-points-to="row1">
                                    <label for="">one pair</label>
                                    <?php
                                    for ($x = 0; $x < 10; $x++) {
                                        ?>
                                    <button class="btn-c num hover-shape row1 btn-circle" value="<?= $x ?>">
                                        <span>
                                            <?= $x ?>
                                        </span>
                                    </button>
                                    <?php
                                    } ?>
                                </div>
                                <div class="col-c num-controls row1" data-points-to="row1">
                                    <button id="All" class="btn-c hover-shape btn-rec all-btn">
                                        All
                                    </button>
                                    <button id="Big" class="btn-c hover-shape btn-rec big-btn">
                                        Big
                                    </button>
                                    <button id="Small" class="btn-c hover-shape btn-rec small-btn">
                                        Small
                                    </button>
                                    <button id="Odd" class="btn-c hover-shape btn-rec odd-btn">
                                        Odd
                                    </button>
                                    <button id="Even" class="btn-c hover-shape btn-rec even-btn">
                                        Even
                                    </button>
                                    <button id="Clear" class="btn-c hover-shape btn-rec clear-btn">
                                        Clear
                                    </button>
                                </div>
                            </div>

                            <div class="row2 interface-item">
                                <div class="col-c num-group row2" data-points-to="row2">
                                    <label for="">four of a kind</label>
                                    <?php
                                    for ($x = 0; $x < 10; $x++) {
                                        ?>
                                    <button class="btn-c num hover-shape row2 btn-circle" value="<?= $x ?>">
                                        <span>
                                            <?= $x ?>
                                        </span>
                                    </button>
                                    <?php
                                    } ?>
                                </div>

                                <div class="col-c num-controls row2" data-points-to="row2">
                                    <button id="All" class="btn-c hover-shape btn-rec all-btn">
                                        All
                                    </button>
                                    <button id="Big" class="btn-c hover-shape btn-rec big-btn">
                                        Big
                                    </button>
                                    <button id="Small" class="btn-c hover-shape btn-rec small-btn">
                                        Small
                                    </button>
                                    <button id="Odd" class="btn-c hover-shape btn-rec odd-btn">
                                        Odd
                                    </button>
                                    <button id="Even" class="btn-c hover-shape btn-rec even-btn">
                                        Even
                                    </button>
                                    <button id="Clear" class="btn-c hover-shape btn-rec clear-btn">
                                        Clear
                                    </button>
                                </div>
                            </div>

                            <div class="row3 interface-item">
                                <div class="col-c num-group row3" data-points-to="row3">
                                    <label for="">3rd</label>
                                    <?php
                                    for ($x = 0; $x < 10; $x++) {
                                        ?>
                                    <button class="btn-c num hover-shape row3 btn-circle" value="<?= $x ?>">
                                        <span>
                                            <?= $x ?>
                                        </span>
                                    </button>
                                    <?php
                                    } ?>
                                </div>

                                <div class="col-c num-controls row3" data-points-to="row3">
                                    <button id="All" class="btn-c hover-shape btn-rec all-btn">
                                        All
                                    </button>
                                    <button id="Big" class="btn-c hover-shape btn-rec big-btn">
                                        Big
                                    </button>
                                    <button id="Small" class="btn-c hover-shape btn-rec small-btn">
                                        Small
                                    </button>
                                    <button id="Odd" class="btn-c hover-shape btn-rec odd-btn">
                                        Odd
                                    </button>
                                    <button id="Even" class="btn-c hover-shape btn-rec even-btn">
                                        Even
                                    </button>
                                    <button id="Clear" class="btn-c hover-shape btn-rec clear-btn">
                                        Clear
                                    </button>
                                </div>
                            </div>

                            <div class="row4 interface-item">
                                <div class="col-c num-group row4" data-points-to="row4">
                                    <label for="">4th</label>
                                    <?php
                                    for ($x = 0; $x < 10; $x++) {
                                        ?>
                                    <button class="btn-c num hover-shape row4 btn-circle" value="<?= $x ?>">
                                        <span>
                                            <?= $x ?>
                                        </span>
                                    </button>
                                    <?php
                                    } ?>
                                </div>

                                <div class="col-c num-controls row4" data-points-to="row4">
                                    <button id="All" class="btn-c hover-shape btn-rec all-btn">
                                        All
                                    </button>
                                    <button id="Big" class="btn-c hover-shape btn-rec big-btn">
                                        Big
                                    </button>
                                    <button id="Small" class="btn-c hover-shape btn-rec small-btn">
                                        Small
                                    </button>
                                    <button id="Odd" class="btn-c hover-shape btn-rec odd-btn">
                                        Odd
                                    </button>
                                    <button id="Even" class="btn-c hover-shape btn-rec even-btn">
                                        Even
                                    </button>
                                    <button id="Clear" class="btn-c hover-shape btn-rec clear-btn">
                                        Clear
                                    </button>
                                </div>
                            </div>

                            <div class="row5 interface-item">
                                <div class="col-c num-group row5" data-points-to="row5">
                                    <label for="">5th</label>
                                    <?php
                                    for ($x = 0; $x < 10; $x++) {
                                        ?>
                                    <button class="btn-c num hover-shape row5 btn-circle" value="<?= $x ?>">
                                        <span>
                                            <?= $x ?>
                                        </span>
                                    </button>
                                    <?php
                                    } ?>
                                </div>

                                <div class="col-c num-controls row5" data-points-to="row5">
                                    <button id="All" class="btn-c hover-shape btn-rec all-btn">
                                        All
                                    </button>
                                    <button id="Big" class="btn-c hover-shape btn-rec big-btn">
                                        Big
                                    </button>
                                    <button id="Small" class="btn-c hover-shape btn-rec small-btn">
                                        Small
                                    </button>
                                    <button id="Odd" class="btn-c hover-shape btn-rec odd-btn">
                                        Odd
                                    </button>
                                    <button id="Even" class="btn-c hover-shape btn-rec even-btn">
                                        Even
                                    </button>
                                    <button id="Clear" class="btn-c hover-shape btn-rec clear-btn">
                                        Clear
                                    </button>
                                </div>
                            </div>

                            <div class="row6 interface-item">
                                <div class="col-c num-group row6" data-points-to="row6">
                                    <label for=""></label>
                                    <?php
                                    for ($text = 'All', $dataValue = 0; $dataValue < 10; $dataValue++) {
                                        ?>
                                    <button class="btn-rec hover-shape all-btn-col" data-value="<?= $dataValue ?>">
                                        <span>
                                            <?= $text ?>
                                        </span>
                                    </button>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                            <div class="row7 interface-item">
                                <div class="col-c num-group row7" data-points-to="row7">
                                    <label for=""></label>
                                    <?php
                                    for ($text = 'Clear', $dataValue = 0; $dataValue < 10; $dataValue++) {
                                        ?>
                                    <button class="btn-rec hover-shape clear-btn-col" data-value="<?= $dataValue ?>">
                                        <span>
                                            <?= $text ?>
                                        </span>
                                    </button>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="game-interface manual">
                            <textarea name=""
                                placeholder="Enter your bet manually here&#10;&#10;Example is as below. Separate your bet with semi colon (;)&#10;&#10;0,1,2,3,4;   0,4,5,6,2;   0,2,5,6,1;   0,1,3,4,2;"></textarea>
                        </div>

                        <div class="row-c">
                            <div class="col-c period-bonus-box">
                                <div class="period-box">
                                    <label for="">Period</label>
                                    <select class="period" name="">
                                        <option value="20221221413">20221221413</option>
                                        <option value="20221221414">20221221414</option>
                                        <option value="20221221415">20221221415</option>
                                    </select>
                                </div>

                                <div class="bonus-box">
                                    <label for="">Bonus</label>
                                    <select class="bonus" name="">
                                        <option value="0%">1639.999-0%</option>
                                        <option value="13.5%">1414.999-13.5%</option>
                                    </select>
                                </div>
                            </div>

                            <div class="selections-box">
                                <div class="unit-amt-select-box">
                                    <label for="">Unit</label>
                                    <div class="unit-amt-select-values">
                                        <button class="btn-c hover-shape unit-amt-select active-btn" value="2">
                                            2
                                        </button>
                                        <button class="btn-c hover-shape unit-amt-select" value="1">
                                            1
                                        </button>
                                        <button class="btn-c hover-shape unit-amt-select" value="0.2">
                                            0.2
                                        </button>
                                        <button class="btn-c hover-shape unit-amt-select" value="0.1">
                                            0.1
                                        </button>
                                        <button class="btn-c hover-shape unit-amt-select" value="0.02">
                                            0.02
                                        </button>
                                        <button class="btn-c hover-shape unit-amt-select" value="0.01">
                                            0.01
                                        </button>
                                        <button class="btn-c hover-shape unit-amt-select" value="0.002">
                                            0.002
                                        </button>
                                        <button class="btn-c hover-shape unit-amt-select" value="0.001">
                                            0.001
                                        </button>
                                    </div>
                                </div>
                                <div class="multiplier-select-box">
                                    <label for="">Multiplier</label>
                                    <div class="multiplier-select-values">
                                        <button class="btn-c hover-shape multiplier-select active-btn" value="1">
                                            x1
                                        </button>
                                        <button class="btn-c hover-shape multiplier-select" value="5">
                                            x5
                                        </button>
                                        <button class="btn-c hover-shape multiplier-select" value="10">
                                            x10
                                        </button>
                                        <button class="btn-c hover-shape multiplier-select" value="20">
                                            x20
                                        </button>
                                        <button class="btn-c hover-shape multiplier-select" value="30">
                                            x30
                                        </button>
                                        <button class="btn-c hover-shape multiplier-select" value="40">
                                            x40
                                        </button>
                                        <button class="btn-c hover-shape multiplier-select" value="50">
                                            x50
                                        </button>
                                        <button class="btn-c hover-shape multiplier-select" value="100">
                                            x100
                                        </button>
                                    </div>
                                </div>

                                <div class="model-select-box">
                                    <label for="">Model</label>
                                    <div class="model-select-values">
                                        <button class="btn-c hover-shape model-select" value="1/4">
                                            1/4
                                        </button>
                                        <button class="btn-c hover-shape model-select" value="1/3">
                                            1/3
                                        </button>
                                        <button class="btn-c hover-shape model-select" value="1/2">
                                            1/4
                                        </button>
                                        <button class="btn-c hover-shape model-select" value="1">
                                            All in
                                        </button>
                                    </div>
                                    <div class="bet-info">
                                        <span>selected <span class="total-bets">0</span> bets, total
                                            <span class="actual-amt">0</span> Yuan profit
                                            <span class="profit">0</span> Yuan</span>
                                    </div>
                                </div>
                            </div>

                            <div class="multiplier-bet-box">
                                <div class="multiplier-input-box">
                                    <button type="button" class="minus">-</button>
                                    <input class="multiplier-input" type="text" name="" value="1"
                                        placeholder="multiplier" />
                                    <button type="button" class="plus">+</button>
                                </div>

                                <div class="bet-amt-box">
                                    <input class="bet-amt" disabled="disabled" type="text" name=""
                                        placeholder="Enter bet amount" />
                                </div>
                            </div>
                        </div>

                        <div class="row-c cart-track-bet" id="cart-track-bet">
                            <div id="Group_3" class="col-c track disabled-svg" onclick="">
                                <svg class="Path_3 path" viewBox="2771.25 1959.5 314.75 76.5">
                                    <style>

                                    </style>
                                    <path id="Path_3" class="text"
                                        d="M 2824 1959.5 L 2805.5 1964.75 L 2783.75 1990 L 2771.25 2019.75 L 2774.25 2024 L 2825 2036 L 3033.5 2036 L 3052.5 2030.75 L 3074.25 2005.75 L 3086 1976 L 3082.5 1971.75 L 3033.5 1960.75 L 2824 1959.5 Z">
                                    </path>
                                </svg>
                                <svg class="Path_3_h" viewBox="2581.089 1959.5 68.033 77">
                                    <path id="Path_3_h"
                                        d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
                                    </path>
                                </svg>
                                <svg class="Path_3_ia" viewBox="2581.089 1959.5 68.033 77">
                                    <path id="Path_3_ia"
                                        d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
                                    </path>
                                </svg>
                                <div id="Track">
                                    <span class="text">Track</span>
                                </div>
                            </div>
                            <div id="Group_5" class="col-c cart disabled-svg" ">
                                <svg class=" Path_3_ib" viewBox="2771.25 1959.5 314.75 76.5">
                                <style>
                                .disabled-svg {
                                    pointer-events: none;
                                }
                                </style>
                                <path id="Path_3_ib"
                                    d="M 2824 1959.5 L 2805.5 1964.75 L 2783.75 1990 L 2771.25 2019.75 L 2774.25 2024 L 2825 2036 L 3033.5 2036 L 3052.5 2030.75 L 3074.25 2005.75 L 3086 1976 L 3082.5 1971.75 L 3033.5 1960.75 L 2824 1959.5 Z">
                                </path>
                                </svg>
                                <svg class="Path_3_ic" viewBox="2581.089 1959.5 68.033 77">
                                    <path id="Path_3_ic"
                                        d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
                                    </path>
                                </svg>
                                <svg class="Path_3_id" viewBox="2581.089 1959.5 68.033 77">
                                    <path id="Path_3_id"
                                        d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
                                    </path>
                                </svg>
                                <div id="Add_to_cart">
                                    <span class="text">Add to cart</span>
                                </div>
                            </div>
                            <div id="Group_4" class="col-c bet-now disabled-svg">
                                <svg class="Path_4 path" viewBox="2771.25 1959.5 314.75 76.5">
                                    <style>
                                    .disabled-svg {
                                        pointer-events: none;
                                    }
                                    </style>
                                    <path id="Path_4"
                                        d="M 2824 1959.5 L 2805.5 1964.75 L 2783.75 1990 L 2771.25 2019.75 L 2774.25 2024 L 2825 2036 L 3033.5 2036 L 3052.5 2030.75 L 3074.25 2005.75 L 3086 1976 L 3082.5 1971.75 L 3033.5 1960.75 L 2824 1959.5 Z">
                                    </path>
                                </svg>
                                <svg class="Path_3_ig" viewBox="2581.089 1959.5 68.033 77">
                                    <path id="Path_3_ig"
                                        d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
                                    </path>
                                </svg>
                                <svg class="Path_3_ih" viewBox="2581.089 1959.5 68.033 77">
                                    <path id="Path_3_ih" class="path"
                                        d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
                                    </path>
                                </svg>
                                <div id="Bet_now" onclick="showModal('Bet confirm', 'Track Confirm')">
                                    <span class="text">Bet now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="line"></div>

            <div class=" cart-area outline ">
                <div class="row-c cart-area-head">
                    <div class="container">
                        <div class="wrapper">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">
                                        Home
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="track-tab" data-bs-toggle="tab"
                                        data-bs-target="#track-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">
                                        Track
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="cart-tab" data-bs-toggle="tab"
                                        data-bs-target="#cart-tab-pane" type="button" role="tab"
                                        aria-controls="cart-tab-pane" aria-selected="false">
                                        Cart
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="my-number-tab" data-bs-toggle="tab"
                                        data-bs-target="#my-number-tab-pane" type="button" role="tab"
                                        aria-controls="my-number-tab-pane" aria-selected="false">
                                        My number
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab-5-tab-pane" type="button" role="tab"
                                        aria-controls="tab-5-tab-pane" aria-selected="false">
                                        My bet
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab-6-tab-pane" type="button" role="tab"
                                        aria-controls="tab-6-tab-pane" aria-selected="false">
                                        Shopping basket
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    new tab1
                                </div>
                                <div class="tab-pane fade" id="track-tab-pane" role="tabpanel"
                                    aria-labelledby="track-tab" tabindex="0">
                                    <div class="table-content track-table-content">
                                        <div class="card mb-2">
                                            <div class="table-responsive tableFixHead">
                                                <table class="table table-borderless" aria-describedby>
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Detail</th>
                                                            <th scope="col">Bets</th>
                                                            <th scope="col">Unit</th>
                                                            <th scope="col">Bet Amount</th>
                                                            <!-- <th scope="col" >Balance 2000<span class="bi bi-eye"></span>d</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody class="track-table-top">
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs justify-content-around align-content-center row mt-3"
                                            id="trackTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link  active" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#chase-same-number-tab-pane" type="button"
                                                    role="tab" aria-controls="chase-same-number-tab-pane"
                                                    aria-selected="true">
                                                    Track number
                                                </button>
                                            </li>

                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profit-margin-chase-number-tab-pane" type="button"
                                                    role="tab" aria-controls="profit-margin-chase-number-tab-pane"
                                                    aria-selected="false">
                                                    Profit margin chasing number
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="trackContent">
                                            <div class="tab-pane fade show active" id="chase-same-number-tab-pane"
                                                role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                <div class="draw-and-multibet-container">
                                                    <div class="first-multi-draws mb-3">
                                                        <div class="first-draw-container d-flex
                                                            align-items-center">
                                                            <label for="first_draw" class="form-label">
                                                                First draw:&nbsp;&nbsp;
                                                            </label>
                                                            <select name="first_draw" class="form-select draw-ids"
                                                                id="first__draw__select">

                                                            </select>
                                                        </div>
                                                        <!-- <div class="track-container">
                                                                <label for="current_draw">Track draw: </label>
                                                                <input type="text" class="current-draw" />draws (Maximum
                                                                track 120 draws)
                                                                </div> -->
                                                        <div class="row flex-lg-nowrap ms-lg-5">
                                                            <label for="input_track_draw_o"
                                                                class="col-sm-3 col-form-label mr-n3">Track draw:
                                                            </label>
                                                            <div class="col-sm-3">
                                                                <input type="number" min="1" max="120"
                                                                    class="form-control total-draws" id="input_track_draw_o"
                                                                    value="10" />
                                                            </div>
                                                            <label for="input_track_draw_o"
                                                                class="current-draw col-md-7 col-form-label text-danger">
                                                                draws (Maximum track 120 draws)</label>
                                                        </div>
                                                        <div class="m-auto"></div>
                                                    </div>
                                                    <div
                                                        class="first-multi-draws first-multi-draws-negative-margin mb-3">
                                                        <div class="row">
                                                            <label for="firstMulti"
                                                                class="col-sm-4 col-form-label">First Multi:
                                                            </label>
                                                            <div class="col-sm-4">
                                                                <input type="number" min="1"
                                                                    class="form-control first-multiplier"
                                                                    id="firstMulti" value="1" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label for="input_track_every_o"
                                                                class="col-sm-2 col-form-label">Every:
                                                            </label>
                                                            <div class="col-sm-4">
                                                                <input type="number" min="1"
                                                                    class="form-control multiplyAfterEvery"
                                                                    id="input_track_every_o" value="1" />
                                                            </div>
                                                            <label for="input_track_every_o"
                                                                class="current-draw col-sm-2 col-form-label">draw(s)</label>
                                                        </div>
                                                        <div class="row">
                                                            <label for="input_track_multi_o"
                                                                class="col-sm-2 col-form-label text-danger">Multi x:
                                                            </label>
                                                            <div class="col-sm-2">
                                                                <input type="number" min="1"
                                                                    class="form-control multiplyBy" id="input_track_multi_o"
                                                                    value="1" />
                                                            </div>
                                                            <label for="input_track_multi_o"
                                                                class="current-draw col-sm-7 col-form-label text-danger">Hint:
                                                                each draw times 1 implies equal track</label>
                                                        </div>
                                                        <!-- <label for="first_draw" class="text-danger">Multi x: </label>
                                                            <input type="text" class="current-draw" />
                                                            <span class="text-danger"
                                                            >Hint: each draw times 1 implies equal track</span
                                                        > -->
                                                    </div>
                                                    <div class="card m-0">
                                                        <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> -->
                                                        <div class="card-body m-0">
                                                            <div class="table-responsive tableFixHead">
                                                                <table class="table table-bordered" aria-describedby>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Track No.</th>
                                                                            <th scope="col">
                                                                                <input
                                                                                    class="form-check-input visually-hidden"
                                                                                    type="checkbox" name="track_number"
                                                                                    id="mmaster" checked />
                                                                                Track ID.
                                                                            </th>
                                                                            <th scope="col">Multi.</th>
                                                                            <th scope="col">Bet Amount</th>
                                                                            <th scope="col">Estimate draw time</th>

                                                                            <!-- <th scope="col" >Balance 2000<span class="bi bi-eye"></span>d</th> -->
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="overflow-auto table-body track-data"
                                                                        style="max-height: 150px">

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="row justify-content-center align-items-center g-2 mb-4">
                                                            <div class="total__bar col-sm-5">
                                                                <span class="track__total me-3">
                                                                    Total track
                                                                    <strong
                                                                        class="text-danger track__total__draws">00</strong>
                                                                    draw(s)
                                                                </span>
                                                                <span class="total__bets">
                                                                    Total.
                                                                    <strong
                                                                        class="text-danger track__total__bets">000</strong>
                                                                    bet(s)
                                                                </span>
                                                            </div>
                                                            <div class="total__track__bets col-sm-4">
                                                                <span class="total__amount">Total Amt.
                                                                    <strong
                                                                        class="text-danger track__total__amt__to_pay">000</strong></span>
                                                            </div>
                                                            <div class="total__amount__balance col-sm-3">
                                                                <span class="total__balance">Balance:
                                                                    <strong
                                                                        class="text-danger track__total__balance">000</strong></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card p-4 mt-2 bg-light text-dark">
                                                        <div class="d-flex justify-content-end align-content-center">
                                                            <ul
                                                                class="nav justify-content-between align-items-center m-track-timer text-danger">
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center">
                                                                    <div class="d-inline text-center">
                                                                        <span
                                                                            class="timer-box-content display-6 me-2">End
                                                                            Time:</span>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center">
                                                                    <div class="d-inline text-center">
                                                                        <span class="timer-box-content display-6"
                                                                            id="track_hrs">00</span>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center me-3">
                                                                    <span class="timer-date-time-colon">:</span>
                                                                </li>
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center">
                                                                    <div class="d-inline text-center"><span
                                                                            class="timer-box-content display-6"
                                                                            id="track_mins">00</span></div>
                                                                </li>

                                                                <li class="nav-item d-flex  me-3">
                                                                    <span class="timer-date-time-colon">:</span>
                                                                </li>
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center">
                                                                    <div class="d-inline text-center">
                                                                        <span
                                                                            class="timer-box-content text text-small display-6"
                                                                            id="track_secs">00</span>
                                                                    </div>

                                                                </li>
                                                            </ul>
                                                            <div class="m-auto"></div>

                                                            <div class="form-check m-2">
                                                                <input class="form-check-input m-1" type="radio"
                                                                    name="flexRadioDefault" id="stop_if_win" />
                                                                <label class="form-check-label" for="stop_if_win">
                                                                    Stop if win
                                                                </label>
                                                            </div>
                                                            <div class="form-check m-2">
                                                                <input class="form-check-input m-1" type="radio"
                                                                    name="flexRadioDefault" id="stop_if_not_win" />
                                                                <label class="form-check-label" for="stop_if_not_win">
                                                                    Stop if not win
                                                                </label>
                                                            </div>
                                                            <button type="button"
                                                                class="m-btn-orange btn-track track-confirm ms-3">
                                                                Track Confirm
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profit-margin-chase-number-tab-pane"
                                                role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                                <div class="draw-and-multibet-container">
                                                    <div
                                                        class="first-multi-draws first-multi-draws-negative-margin mb-3">
                                                        <div class="row">
                                                            <label for="firstMulti"
                                                                class="col-sm-4 col-form-label">First Multi:
                                                            </label>
                                                            <div class="col-sm-4">
                                                                <input type="number" min="1"
                                                                    class="form-control profit-first-multiplier"
                                                                    id="firstMulti" value="1">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <label for="input__track_percentage"
                                                                class="col-sm-6 col-form-label">Minimum yield:
                                                            </label>
                                                            <div class="col-sm-4 d-flex align-items-center">
                                                                <input type="number" min="0"
                                                                    class="form-control input__track_percentage" id="input__track_percentage"
                                                                    value="50" />
                                                                    <span class="ms-1">%</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="row flex-lg-nowrap ms-lg-5">
                                                            <label for="input_track_draw_t"
                                                                class="col-sm-3 col-form-label mr-n3">Track draw:
                                                            </label>
                                                            <div class="col-sm-3">
                                                                <input type="number" min="1" max="120"
                                                                    class="form-control total-draws-t" id="input_track_draw_t"
                                                                    value="10">
                                                            </div>
                                                            <label for="input_track_draw_t"
                                                                class="current-draw col-md-7 col-form-label text-danger">
                                                                draws (Maximum track 120 draws)</label>
                                                        </div>
                                                        </div>
                                                        <!-- <label for="first_draw" class="text-danger">Multi x: </label>
                                                            <input type="text" class="current-draw" />
                                                            <span class="text-danger"
                                                            >Hint: each draw times 1 implies equal track</span
                                                        > -->
                                                    </div>
                                                    <div class="card m-0">
                                                        <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> -->
                                                        <div class="card-body m-0">
                                                            <div class="table-responsive tableFixHead">
                                                                <table class="table table-bordered" aria-describedby="">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Track No.</th>
                                                                            <th scope="col">
                                                                                <input
                                                                                    class="form-check-input visually-hidden"
                                                                                    type="checkbox" name="track_number"
                                                                                    id="mmaster" checked="">
                                                                                Track ID.
                                                                            </th>
                                                                            <th scope="col">Multi.</th>
                                                                            <th scope="col">Bet Amount</th>
                                                                            <th scope="col">Estimate draw time</th>

                                                                            <!-- <th scope="col" >Balance 2000<span class="bi bi-eye"></span>d</th> -->
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="overflow-auto table-body track-profit-data"
                                                                        style="max-height: 150px">
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="row justify-content-center align-items-center g-2 mb-4">
                                                            <div class="total__bar col-sm-5">
                                                                <span class="track__total me-3">
                                                                    Total track
                                                                    <strong
                                                                        class="text-danger track__total__draws_p">00</strong>
                                                                    draw(s)
                                                                </span>
                                                                <span class="total__bets">
                                                                    Total.
                                                                    <strong
                                                                        class="text-danger track__total__bets_p">00</strong>
                                                                    bet(s)
                                                                </span>
                                                            </div>
                                                            <div class="total__track__bets col-sm-4">
                                                                <span class="total__amount">Total Amt.
                                                                    <strong
                                                                        class="text-danger track__total__amt__to_pay_p">000</strong></span>
                                                            </div>
                                                            <div class="total__amount__balance col-sm-3">
                                                                <span class="total__balance">Balance:
                                                                    <strong
                                                                        class="text-danger track__total__balance">00</strong></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card p-4 mt-2 bg-light text-dark">
                                                        <div class="d-flex justify-content-end align-content-center">
                                                            <ul
                                                                class="nav justify-content-between align-items-center m-track-timer text-danger">
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center">
                                                                    <div class="d-inline text-center">
                                                                        <span
                                                                            class="timer-box-content display-6 me-2">End
                                                                            Time:</span>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center">
                                                                    <div class="d-inline text-center">
                                                                        <span class="timer-box-content display-6"
                                                                            id="hrs">0</span>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center me-3">
                                                                    <span class="timer-date-time-colon">:</span>
                                                                </li>
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center">
                                                                    <div class="d-inline text-center"><span
                                                                            class="timer-box-content display-6"
                                                                            id="mins">1</span></div>
                                                                </li>

                                                                <li class="nav-item d-flex  me-3">
                                                                    <span class="timer-date-time-colon">:</span>
                                                                </li>
                                                                <li
                                                                    class="nav-item d-flex flex-column justify-content-center">
                                                                    <div class="d-inline text-center">
                                                                        <span
                                                                            class="timer-box-content text text-small display-6"
                                                                            id="secs">59</span>
                                                                    </div>

                                                                </li>
                                                            </ul>
                                                            <div class="m-auto"></div>

                                                            <div class="form-check m-2">
                                                                <input class="form-check-input m-1" type="radio"
                                                                    name="flexRadioDefault" id="stop_if_win">
                                                                <label class="form-check-label" for="stop_if_win">
                                                                    Stop if win
                                                                </label>
                                                            </div>
                                                            <div class="form-check m-2">
                                                                <input class="form-check-input m-1" type="radio"
                                                                    name="flexRadioDefault" id="stop_if_not_win">
                                                                <label class="form-check-label" for="stop_if_not_win">
                                                                    Stop if not win
                                                                </label>
                                                            </div>
                                                            <button type="button"
                                                                class="m-btn-orange btn-track track-confirm ms-3">
                                                                Track Confirm
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cart-tab-pane" role="tabpanel" aria-labelledby="cart-tab"
                                    tabindex="0">
                                    <div class="table-balance-container">
                                        <div class="table-content table-responsive sub-table">
                                            <table class="table table-borderless tableClassName" aria-describedby>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Detail</th>
                                                        <th scope="col">Bets</th>
                                                        <th scope="col">Unit</th>
                                                        <th scope="col">Multi</th>
                                                        <th scope="col">Bet Amount</th>
                                                        <th scope="col">Clear</th>
                                                        <!-- <th scope="col" >Balance 2000<span class="bi bi-eye"></span>d</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody class="cart-items">

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m-2"></div>
                                        <div class="balance-content">
                                            <table class="table table-responsive table-borderless" style="height: 100%;"
                                                aria-describedby>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            Balance <span class="cart__table_balance fw-bold mask-balance">0</span><span
                                                                class="unmasked-balance fw-bold visually-hidden mt-1"><i class="fa-solid fa-asterisk"></i><i class="fa-solid fa-asterisk"></i><i class="fa-solid fa-asterisk"></i><i class="fa-solid fa-asterisk"></i></span>
                                                            &nbsp;<span class="fa-solid fa-eye eye btn-mask-balance"></span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="cart-items-track-bets">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="my-number-tab-pane" role="tabpanel"
                                    aria-labelledby="my-number-tab" tabindex="0">
                                    <table class="table table-borderless" aria-describedby>
                                        <thead>
                                            <tr>
                                                <th scope="col">Lottery name</th>
                                                <th scope="col">How to play</th>
                                                <th scope="col">Start period number</th>
                                                <th scope="col">Betting number</th>
                                                <th scope="col">Total chasing number amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>no data</th>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab-5-tab-pane" role="tabpanel"
                                    aria-labelledby="tab-5-tab" tabindex="0">
                                    <table class="table table-borderless" aria-describedby>
                                        <thead>
                                            <tr>
                                                <th scope="col">Lottery name</th>
                                                <th scope="col">Gameplay</th>
                                                <th scope="col">Issue number</th>
                                                <th scope="col">Betting content</th>
                                                <th scope="col">Betting amount</th>
                                                <th scope="col">Winning bonus</th>
                                                <th scope="col">Betting status</th>
                                                <th scope="col">Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>no data</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab-6-tab-pane" role="tabpanel"
                                    aria-labelledby="tab-6-tab" tabindex="0">
                                    <table class="table table-borderless" aria-describedby>
                                        <thead>
                                            <tr>
                                                <th scope="col">How to play</th>
                                                <th scope="col">Betting content</th>
                                                <th scope="col">Start period number</th>
                                                <th scope="col">Number of bets</th>
                                                <th scope="col">Multiples</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>no data</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <div class="modal fade" id="m-betModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" data-keyboard="false">

        <div class="modal-dialog modal-dialog-centered" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" data-keyboard="false">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="game-type">Royal 5</div>
                    <div class="modal-draw-number-container mb-3">
                        Draw:&nbsp;<span class="modal-draw-number-id">No. 20202020-192 ~ No. 20202020-198</span>
                    </div>
                    <div class="card">
                        <div class="row gx-0">
                            <div class="col-sm-6 me-0">
                                <div class="card-header">Type</div>
                                <div class="card-body">All 5 Group 120</div>
                                <div class="card-header">Total track <span class="m-total-num-track-draws">2</span>
                                    draws
                                </div>
                            </div>
                            <div class="col-sm-6 ms-0">
                                <div class="card-header">Detail</div>
                                <div class="card-body">56789</div>
                                <div class="card-header">Total Amt: <span class="text-danger">0.0020</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="m-btn-ash p-2" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="m-btn-orange button-type p-2">
                        Save changes
                    </button>
                </div>
            </div>
        </div>

    </div>



    <script type="module" src="assets/js/demo.js"></script>
    <script type="module" src="assets/js/royal5.js"></script>
    <script type="module" src="assets/js/tracks-cart.js"></script>
    <script type="module" src="assets/js/timer.js"></script>
    <script type="module" src="assets/js/main.js"></script>
</body>

</html>