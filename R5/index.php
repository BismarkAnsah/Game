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
    <!-- <script src="js/jquery-3.6.3.min.js"></script> -->
    <link rel="stylesheet" href="assets/css/cart-area-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <script src="assets/js/jquery-3.6.3.min.js"
        ></script>
    <style type="text/css">
    * {
        font-size: 12px;

        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
        font-style: normal;
        font-weight: normal;
        margin: 0;
        padding: 0;
        border: none;
    }

    body {
        background-color: #f1f3fe;
    }

    .show-balance .user-balance,
    .show-balance .eye {
        display: inline !important;
    }

    .show-balance .asterisks,
    .show-balance .eye-slash {
        display: none !important;
    }

    textarea {
        resize: none;
        margin-left: 18px;

        width: 800px;

        height: 150px;

        outline: none;
        color: #b88785;
        padding: 10px;

        background-color: #f8f4e9;
    }

    .num-btn-controls>* {
        margin: 10px !important;
    }

    .num-btn-controls {
        width: fit-content;
        margin-left: 12px;

        /* border:2px solid #000; */
    }

    .cart-info-head {
        list-style-type: none;
        display: flex;
        justify-content: space-between;
        width: 400px;

        position: relative;
        left: 200px;
    }

    .work-area.outline {
        border: 1px solid #707070;

        padding: 10px;
    }

    .work-area .col-c {
        justify-content: space-between;

        display: inline;
        /* border:1px solid #000; */

        width: fit-content;
    }

    .line {
        margin: 10px;

        position: relative;
        right: 15px;

        border: 1px solid #707070;

        width: 1000px;

        z-index: 999;
    }

    .cart-area {
        position: relative;
        right: 15px;
    }

    .solo-play {
        margin-left: 20px;
    }

    .solo-play>* {
        margin-right: 4px;
    }

    .work-area .row-c {
        display: flex;
        width: fit-content;
        /* border:2px solid black; */

        justify-content: space-between;
        margin-top: 30px;

        margin-bottom: 33px;
    }

    .work-area .row-c:nth-child(5) {
        margin-top: 50px;
    }

    .work-area {
        border: 2px solid #707070;

        width: fit-content;
    }

    .quick-settings-box {
        color: #707070;
        position: relative;
        left: 343px;

        top: 40px;

        list-style-type: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: fit-content;
        width: 800px;
    }

    .quick-settings-box>li {
        margin-left: 7px;
    }

    .quick-settings-box>li>* {
        font-size: 14px;

        margin-left: 4px;

        cursor: pointer;
    }

    #how-to-play {
        cursor: pointer;
    }

    .mediaViewInfo {
        --web-view-name: Web 1920 – 1;
        --web-view-id: Web_1920__1;
        --web-scale-on-resize: true;
        --web-enable-deep-linking: true;
    }

    :root {
        --web-view-ids: Web_1920__1;
    }

    #Web_1920__1 {
        position: absolute;
        width: 100vw;
        min-height: 100vh;
        /* height:1212px; */

        /* background-color: #f1f3fe; */
        /* overflow: hidden; */
        --web-view-name: Web 1920 – 1;
        --web-view-id: Web_1920__1;
        --web-scale-on-resize: true;
        --web-enable-deep-linking: true;
    }

    #Rectangle_1_l {
        fill: url(#Rectangle_1_l);
    }

    .Rectangle_1_l {
        position: absolute;
        overflow: visible;
        width: 1738px;

        height: 1213px;

        left: 0px;

        top: 0px;
    }

    #Path_2 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Path_2 {
        overflow: visible;
        position: absolute;
        width: 907px;

        height: 523px;

        left: 296px;

        top: 186px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Group_2 {
        position: absolute;
        width: 887px;

        height: 505px;

        left: 307px;

        top: 196px;

        overflow: visible;
    }

    #Rectangle_4 {
        opacity: 1;
        fill: #eee3bb;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_4 {
        position: absolute;
        overflow: visible;
        width: 887px;

        height: 42px;

        left: 0px;

        top: 1px;
    }

    #Rectangle_5 {
        fill: #eef0fc;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_5 {
        position: absolute;
        overflow: visible;
        width: 887px;

        height: 505px;

        left: 0px;

        top: 0px;
    }

    /* #All_5 {
        left:32px;

        top:14px;

        position: absolute;
        overflow: visible;
        width:22px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size:11px;

        color: rgba(112, 112, 112, 1);
        } */

    .game-group-nav-box,
    .history-nav-box {
        height: fit-content;
        width: fit-content;
        margin-bottom: 21px;
    }

    .game-group-nav-box>ul,
    .history-nav-box>ul {
        /* border: 2px solid black; */

        width: fit-content;

        height: 40px;

        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style-type: none;
        padding: 4px;

        /* border-radius: 5px; */

        background-color: #eee3bb;
    }

    .game-group-nav-box>ul>li,
    .history-nav-box>ul>li {
        cursor: pointer;
        border-radius: 3px;
        font-size: var(--fontSmall);
        padding: 2px 1rem;
        width: 70px;
        color: #707070;
    }

    .simple-hover>*:hover {
        color: #000;
    }

    /* #All_4 {
      left:80px;

      top:14px;

      position: absolute;
      overflow: visible;
      width:22px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #First_3 {
      left:128px;

      top:14px;

      position: absolute;
      overflow: visible;
      width:30px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #Mid_3 {
      left:184px;

      top:14px;

      position: absolute;
      overflow: visible;
      width:29px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #Last_3 {
      left:239px;

      top:14px;

      position: absolute;
      overflow: visible;
      width:29px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #First_2 {
      left:295px;

      top:14px;

      position: absolute;
      overflow: visible;
      width:30px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #Last_2 {
      left:351px;

      top:14px;

      position: absolute;
      overflow: visible;
      width:29px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #Fixed_place {
      left:406px;

      top:14px;

      position: absolute;
      overflow: visible;
      width:56px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #Any_Place {
      left:488px;

      top:14px;

      position: absolute;
      overflow: visible;
      width:49px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #BSOE {
      left:563px;

      top:14px;

      position: absolute;
      overflow: visible;
      width:40px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #Fun {
      left:629px;

      top:13px;

      position: absolute;
      overflow: visible;
      width:19px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #Pick_2 {
      left:674px;

      top:13px;

      position: absolute;
      overflow: visible;
      width:30px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #Pick_3 {
      left:730px;

      top:13px;

      position: absolute;
      overflow: visible;
      width:30px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      }

      #Pick_4 {
      left:785px;

      top:13px;

      position: absolute;
      overflow: visible;
      width:30px;

      white-space: nowrap;
      text-align: left;

      font-style: normal;
      font-weight: normal;
      font-size:11px;

      color: rgba(112, 112, 112, 1);
      } */


    #Rectangle_35 {
        opacity: 0.55;
        fill: rgba(112, 112, 112, 1);
    }

    .Rectangle_35 {
        width: 14px;

        height: 15px;

        position: absolute;
        overflow: visible;
        transform: translate(0px, 0px) matrix(1, 0, 0, 1, 3485, 628.5) rotate(90deg);

        transform-origin: center;
    }

    #Rectangle_36 {
        opacity: 0.43;
        fill: rgba(128, 185, 230, 1);
    }

    .Rectangle_36 {
        position: absolute;
        overflow: visible;
        width: 69px;

        height: 21px;

        left: 232px;

        top: 136px;
    }

    #Rectangle_95 {
        opacity: 0.43;
        fill: rgba(128, 185, 230, 1);
    }

    .Rectangle_95 {
        position: absolute;
        overflow: visible;
        width: 69px;

        height: 21px;

        left: 315px;

        top: 136px;
    }

    #V {
        left: 857px;

        top: 16px;

        position: absolute;
        overflow: visible;
        width: 4px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 7px;

        color: rgba(206, 206, 206, 1);
    }

    #Straight {
        left: 17px;

        top: 53px;

        position: absolute;
        overflow: visible;
        width: 35px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #Group {
        left: 17px;

        top: 78px;

        position: absolute;
        overflow: visible;
        width: 28px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #n_0221221413 {
        left: 76px;

        top: 348px;

        position: absolute;
        overflow: visible;
        width: 60px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(213, 135, 126, 1);
    }

    #the_amount {
        left: 215px;

        top: 348px;

        position: absolute;
        overflow: visible;
        width: 52px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #amount_betting {
        left: 590px;

        top: 347px;

        position: absolute;
        overflow: visible;
        width: 69px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #Enter_bet_amount {
        left: 700px;

        top: 349px;

        position: absolute;
        overflow: visible;
        width: 77px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(213, 135, 126, 1);
    }

    #n_ {
        left: 738px;

        top: 382px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #n__bh {
        left: 693px;

        top: 381px;

        position: absolute;
        overflow: visible;
        width: 4px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #Text {
        left: 778px;

        top: 381px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #betting_multiple {
        left: 590px;

        top: 382px;

        position: absolute;
        overflow: visible;
        width: 71px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #multiple {
        left: 215px;

        top: 385px;

        position: absolute;
        overflow: visible;
        width: 36px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #model {
        left: 267px;

        top: 423px;

        position: absolute;
        overflow: visible;
        width: 28px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #Bonus {
        left: 16px;

        top: 384px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    .active-game-box {
        display: flex;
        justify-content: space-between;
        width: 200px;
    }

    #n_st {
        left: 17px;

        top: 186px;

        position: absolute;
        overflow: visible;
        width: 15px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(112, 112, 112, 1);
    }

    #n_st_bq {
        left: 17px;

        top: 244px;

        position: absolute;
        overflow: visible;
        width: 15px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(112, 112, 112, 1);
    }

    #n_st_br {
        left: 17px;

        top: 301px;

        position: absolute;
        overflow: visible;
        width: 15px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(112, 112, 112, 1);
    }

    /* #how-to-play {
left:239px;

top:140px;

position: absolute;
overflow: visible;
width:53px;

white-space: nowrap;
text-align: left;

font-style: normal;
font-weight: normal;
font-size:10px;

color: rgba(112, 112, 112, 1);
} */

    #What_is_solo,
    #how-to-play {
        box-sizing: border-box;
        padding: 4px;

        background-color: #bfd8f2;
        color: #707070;
        border-radius: 8px;

        outline: none;
    }

    button {
        cursor: pointer;
    }

    .hotCold-lack {
        /* border:1px solid #000; */

        margin-left: 300px !important;
    }

    .hotCold-box,
    .lack-box {
        display: inline-block;
    }

    label {
        cursor: pointer;
        color: #b88785;
        margin-right: 4px;
    }

    .hotCold,
    .lack {
        height: 10px;

        width: 10px;

        background-color: #92c6ec;
        outline: none;
        margin: 4px;

        cursor: pointer;
    }

    #Path_1 {
        fill: rgba(112, 112, 112, 1);
    }

    .path-c {
        width: 141px !important;

        height: 22px !important;
    }

    .shape-c:hover,
    .hover-text-c:hover {
        fill: rgba(73, 85, 109, 1) !important;
        color: #fff !important;
    }

    .Path_1 {
        overflow: visible;
        position: absolute;
        width: 141px;

        height: 22px;

        left: 210px;

        top: 52px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_1_bx {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_bx {
        overflow: visible;
        position: absolute;
        width: 124px;

        height: 19px;

        left: 376px;

        top: 51px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_1_by {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_by {
        overflow: visible;
        position: absolute;
        width: 109px;

        height: 18px;

        left: 63px;

        top: 78px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_1_bz {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_bz {
        overflow: visible;
        position: absolute;
        width: 124px;

        height: 18px;

        left: 210px;

        top: 78px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_1_b {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_b {
        overflow: visible;
        position: absolute;
        width: 124px;

        height: 18px;

        left: 376px;

        top: 78px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_1_ca {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_ca {
        overflow: visible;
        position: absolute;
        width: 124px;

        height: 18px;

        left: 534px;

        top: 78px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_1_cb {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_cb {
        overflow: visible;
        position: absolute;
        width: 124px;

        height: 18px;

        left: 210px;

        top: 104px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_1_cc {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_cc {
        overflow: visible;
        position: absolute;
        width: 109px;

        height: 19px;

        left: 63px;

        top: 103px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_1_cd {
        fill: rgba(73, 85, 109, 1);
        /* fill:rgb(243,234,219); */
    }

    .Path_1_cd {
        overflow: visible;
        position: absolute;
        width: 109px;

        height: 19px;

        left: 64px;

        top: 51px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Rectangle_50 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_50 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 570px;

        top: 177px;
    }

    #Rectangle_51 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_51 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 570px;

        top: 236px;
    }

    #Rectangle_52 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_52 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 570px;

        top: 295px;
    }

    #Rectangle_53 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_53 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 675px;

        top: 177px;
    }

    #Rectangle_54 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_54 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 675px;

        top: 236px;
    }

    #Rectangle_55 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_55 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 675px;

        top: 295px;
    }

    #Rectangle_56 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_56 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 781px;

        top: 177px;
    }

    #Rectangle_57 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_57 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 781px;

        top: 236px;
    }

    #Rectangle_58 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_58 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 781px;

        top: 295px;
    }

    #Rectangle_59 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_59 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 623px;

        top: 177px;
    }

    #Rectangle_60 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_60 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 623px;

        top: 236px;
    }

    #Rectangle_61 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_61 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 623px;

        top: 295px;
    }

    #Rectangle_62 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_62 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 728px;

        top: 177px;
    }

    #Rectangle_63 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_63 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 728px;

        top: 236px;
    }

    #Rectangle_64 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_64 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 728px;

        top: 295px;
    }

    #Rectangle_65 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_65 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 833px;

        top: 177px;
    }

    #Rectangle_66 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_66 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 833px;

        top: 236px;
    }

    #Rectangle_67 {
        fill: rgba(231, 224, 220, 1);
        stroke: rgb(24, 4, 4);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_67 {
        position: absolute;
        overflow: visible;
        width: 46px;

        height: 34px;

        left: 833px;

        top: 295px;
    }

    #First_3_Straight_Joint_cn {
        left: 71px;

        top: 54px;

        position: absolute;
        overflow: visible;
        width: 93px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(255, 255, 255, 1);
    }

    #First_3_Straight_Manual {
        left: 221px;

        top: 54px;

        position: absolute;
        overflow: visible;
        width: 105px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #All_5_Group_120 {
        left: 84px;

        top: 79px;

        position: absolute;
        overflow: visible;
        width: 69px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #All_5_Group__10 {
        left: 86px;

        top: 105px;

        position: absolute;
        overflow: visible;
        width: 66px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #All_5_Group_5 {
        left: 248px;

        top: 106px;

        position: absolute;
        overflow: visible;
        width: 58px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #All_5_Group_60 {
        left: 245px;

        top: 79px;

        position: absolute;
        overflow: visible;
        width: 64px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #All_5_Group_30 {
        left: 406px;

        top: 79px;

        position: absolute;
        overflow: visible;
        width: 64px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #All_5_Group_20 {
        left: 559px;

        top: 79px;

        position: absolute;
        overflow: visible;
        width: 64px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #All_5_StraightCombo {
        left: 394px;

        top: 54px;

        position: absolute;
        overflow: visible;
        width: 95px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    .active-game-box>* {
        margin-right: 10px;
    }

    /* .prize {

width:24px;

white-space: nowrap;
text-align: left;

font-style: normal;
font-weight: normal;
font-size:10px;

color: rgba(0, 0, 0, 1);
} */

    #n_96515 {
        left: 171px;

        top: 140px;

        position: absolute;
        overflow: visible;
        width: 38px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(255, 0, 0, 1);
    }

    /* #All{
left:584px;

top:176px;

position: absolute;
font-size:11px;


} */

    /*my css begins*/

    .path-outline {
        fill: #707070;
    }

    .path-outline-box {
        overflow: visible;
        position: absolute;
        width: 127px;

        height: 20px;

        transform: matrix(1, 0, 0, 1, 0, 0);
        z-index: 555;
    }

    .path-fill {
        fill: #f1f3fe;
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .path-fill-box {
        overflow: visible;
        position: absolute;
        width: 122px;

        height: 20px;

        left: 4px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    .nav-item-c {
        position: relative;
        /* border:1px solid black; */

        width: 125px;

        height: 20px;

        margin-left: 15px;

        padding: 0px;
    }

    .nav-text {
        position: absolute;
        z-index: 9999;
        left: 2px;

        top: 1px;

        font-size: 4px !important;

        color: #707070;
        /* border:1px solid black !important; */

        display: flex;
        align-items: center;
        justify-content: center;
        width: 127px;

        /*#707070;*/
    }

    .nav-item-c:hover {
        cursor: pointer;
    }

    .nav-item-c:hover .path-outline,
    .nav-item-c:hover .path-fill {
        fill: #49556d;
    }

    .nav-item-c:hover .text {
        color: #fff;
    }

    .active-svg>*>* {
        fill: #49556d !important;
        color: #fff !important;
    }

    .disabled-svg path,
    .disabled-svg .text {
        fill: #cccccc !important;
        color: #666666 !important;
        background-color: #cccccc !important;
    }

    .bet-amt[disabled="disabled"] {
        color: #666666 !important;
        background-color: #cccccc !important;
    }

    .group,
    .straight {
        display: flex;
        width: fit-content;
        /* border:1px solid black; */

        margin-left: 17px;

        margin-bottom: 5px;

        position: relative;
        left: 20px;

        bottom: 4px;
    }

    .game-nav-box {
        margin-left: 15px;
    }

    .game-nav-box>label {
        position: absolute;
        font-size: 12px !important;

        margin: 0px;

        /* border:1px solid black; */
    }

    .btn-rec {
        padding: 7px;

        border: 1px solid #000;

        border-radius: 4px;

        background-color: #e7e0dc;
        width: 40px;

        text-align: center;
    }

    .num-controls {
        font-size: 11px;

        margin-left: 60px;
    }

    .hover-shape:hover,
    .active-btn {
        background-color: #49556d !important;
        color: #fff !important;
    }

    .num-group {
        font-size: 11px;
    }

    .num-group>label {
        display: inline-block;
        /* border:1px solid black; */

        position: relative;
        width: 50px;
    }

    .num {
        padding: 7px;

        border-radius: 50%;
        background-color: #e7e0dc;
        border: 1px solid #000;

        border-right: 12px;

        margin-left: 7px;

        width: 32px;

        height: 32px;
    }



    /* div.period-box {
position: absolute;
left:15px;

top:333px;

} */

    ::placeholder~textarea::placeholder {
        text-align: center;
    }

    textarea::placeholder {
        padding: 10px;
    }

    select.period,
    select.bonus,
    input.bet-amt,
    input.multiplier-input {
        color: #b88785;
        padding: 1px;

        align-items: center;
        border: 1px solid #49546d;

        background-color: #f8f4e9;
        border-radius: 4px;

        width: 124px;

        height: 20px;

        text-align: center;
        outline: none;
    }

    input.multiplier-input {
        position: relative;
        right: 4px;

        width: 64px;

        border-left: 0px;

        border-radius: 0px;

        border-right: 0px;
    }

    .plus,
    .minus {
        border: 1px solid #49546d;

        width: 31px;

        background-color: #f8f4e9;
        /* padding: 1px; */

        height: 20px;

        cursor: pointer;
    }

    .plus {
        border-left: 0px;

        border-top-right-radius: 4px;

        border-bottom-right-radius: 4px;

        position: relative;
        right: 8px;
    }

    .minus {
        border-right: 0px;

        border-top-left-radius: 4px;

        border-bottom-left-radius: 4px;
    }

    div.unit-amt-select-box {
        position: relative;
        left: 29px;

        width: fit-content;
        /* position: absolute;
left:200px;

top:300px; */
    }

    div.multiplier-select-box {
        /* position: absolute;
left:200px;

top:379px; */
    }

    div.model-select-box {
        position: relative;
        left: 97px;

        /* position: absolute;
left:200px;

top:420px; */
    }

    div.unit-amt-select-values,
    div.multiplier-select-values,
    div.model-select-values {
        border: 2px solid #49546d;
        overflow: hidden;
        display: inline-block;
        border-radius: 4px;
    }

    .unit-amt-select,
    .multiplier-select,
    .model-select {
        padding: 6px;
        /* margin-left: -4px; */
        /* margin:0px 0px 0px -4px !important; */
        margin: 0 -3px;

        background-color: inherit;
        color: #49546d;
        border-color: #49546d;
        border-style: solid;
        border-width: 0px 2px 0px 0px;

        width: 40px;
    }

    .unit-amt-select:last-child,
    .multiplier-select:last-child,
    .model-select:last-child {
        border: 0px !important;

        border-top-right-radius: 4px;

        border-bottom-right-radius: 4px;
    }

    .unit-amt-select:first-child,
    .multiplier-select:first-child,
    .model-select:first-child {
        /* border-top-left-radius: 3px; */

        /* border-bottom-left-radius:4px; */
    }

    .btn-c:focus {
        outline: none;
    }

    /* div.bet-amt-box {
position: absolute;
left:685px;

top:347px;

}

div.multiplier-input-box {
position: absolute;
left:685px;

top:379px;

} */

    div.bet-info {
        position: relative;
        /* border:2px solid black; */

        /* top:453px;

left:600px; */

        bottom: 25px;

        left: 220px;

        color: #b88785;
        width: fit-content;
        height: fit-content;
    }

    .draw-num-box {
        position: absolute;
        left: 713px;

        top: 39px;

        width: fit-content;
        height: 40px;
    }

    /* .container {
margin: 0 auto;
width:255px;


} */

    .slot-wrapper {
        /* border:0px solid #000000; */
        /* width: fit-content; */
        display: none;
        height: 40px;
    }

    .slot {
        /* margin-top: -10px; */

        /* background-position: -17px-17px; */

        /* background-position-y: -70px; */

        background: url("libs/images/sharp.png") repeat-y;
        /*Taken from http://www.swish-designs.co.uk*/
        width: 40px;

        height: 40px;

        float: left;
        /* border:0px solid #000; */

        background-position: 0 0px;
    }

    .motion {
        background: url("libs/images/sharp.png") repeat-y;
        /*Taken from http://www.swish-designs.co.uk*/
    }

    .ball-num-box {
        position: absolute;
        top: 12px;

        right: 4px;

        width: 200px;

        border: 1px solid black;

        box-sizing: border-box;
        display: none;
    }

    /* .ball-num-box>* {
font-size:12px;

font-weight: bolder;
box-sizing: border-box;
margin-left:27px;

} */

    .balls-box {
        position: relative;
        z-index: 11111111111111111119999;
        /* display: flex !important; */
        /* border:1px solid black !important; */

        /* height:40px; */

        /* overflow: hidden; */
    }

    .balls-box:nth-child(n + 4) {
        display: none;
    }

    .ball {
        width: 40px;

        height: 40px;
    }

    div.selections-box {
        /* border:2px solid black; */

        position: relative;
        left: 60px;

        /* width:500px; */

        width: fit-content;
    }

    div.period-bonus-box {
        width: fit-content;
        height: fit-content;
        margin-bottom: 0px !important;
    }

    .period-bonus-box>* {
        display: flex;
    }

    div.multiplier-bet-box {
        margin-left: 140px;

        height: fit-content;
    }

    .selections-box>*,
    .period-bonus-box>*,
    .multiplier-bet-box>* {
        margin-bottom: 10px;
    }

    .row-c {
        display: block;
        margin-bottom: 27px;

        margin-left: 18px;
    }

    /* my css ends*/

    #Rectangle_69 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_69 {
        position: absolute;
        overflow: visible;
    }

    .Rectangle_75 {
        position: absolute;
        overflow: visible;
        width: 252px;

        height: 19px;

        left: 279px;

        top: 379px;
    }

    #Rectangle_79 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_79 {
        position: absolute;
        overflow: visible;
        width: 120px;

        height: 19px;

        left: 310px;

        top: 420px;
    }

    #Rectangle_74 {
        fill: rgba(73, 85, 109, 1);
    }

    .Rectangle_74 {
        position: absolute;
        overflow: visible;
        width: 32px;

        height: 19px;

        left: 279px;

        top: 347px;
    }

    #Rectangle_76 {
        fill: rgba(73, 85, 109, 1);
    }

    .Rectangle_76 {
        position: absolute;
        overflow: visible;
        width: 32px;

        height: 19px;

        left: 279px;

        top: 379px;
    }

    #Ellipse_52 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_52 {
        position: absolute;
        overflow: visible;
        width: 11px;

        height: 11px;

        left: 743px;

        top: 142px;
    }

    #Ellipse_53 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_53 {
        position: absolute;
        overflow: visible;
        width: 11px;

        height: 11px;

        left: 821px;

        top: 142px;
    }


    .status-box {
        border: 1px solid #000;
        position: relative;
        width: 1072px;
        height: 96px;

        top: 47px;

        left: 228px;

        background: -moz-linear-gradient(117deg,
                rgba(153, 203, 231, 1) 31%,
                rgba(135, 191, 245, 1) 54%,
                rgba(122, 182, 255, 1) 100%);

        /* safari 5.1+,chrome 10+ */
        background: -webkit-linear-gradient(117deg,
                rgba(153, 203, 231, 1) 31%,
                rgba(135, 191, 245, 1) 54%,
                rgba(122, 182, 255, 1) 100%);

        /* opera 11.10+ */
        background: -o-linear-gradient(117deg,
                rgba(153, 203, 231, 1) 31%,
                rgba(135, 191, 245, 1) 54%,
                rgba(122, 182, 255, 1) 100%);


        /* ie 10+ */
        background: -ms-linear-gradient(117deg,
                rgba(153, 203, 231, 1) 31%,
                rgba(135, 191, 245, 1) 54%,
                rgba(122, 182, 255, 1) 100%);

        /* global 94%+ browsers support */
        background: linear-gradient(117deg,
                rgba(153, 203, 231, 1) 31%,
                rgba(135, 191, 245, 1) 54%,
                rgba(122, 182, 255, 1) 100%);
    }

    text {
        z-index: 9999;
    }



    #Rectangle_6 {
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_6 {
        position: absolute;
        overflow: visible;
        width: 36px;

        height: 41px;

        left: 715px;

        top: 39px;
    }

    #Rectangle_14 {
        fill: rgba(73, 84, 110, 1);
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_14 {
        position: absolute;
        overflow: visible;
        width: 36px;

        height: 41px;

        left: 794px;

        top: 39px;
    }

    #Rectangle_16 {
        fill: rgba(73, 84, 110, 1);
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_16 {
        position: absolute;
        overflow: visible;
    }

    #Rectangle_12 {
        fill: rgba(73, 84, 110, 1);
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_12 {
        position: absolute;
        overflow: visible;
        width: 36px;

        height: 41px;

        left: 754px;

        top: 39px;
    }

    #Rectangle_13 {
        fill: rgba(73, 84, 110, 1);
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_13 {
        position: absolute;
        overflow: visible;
        width: 36px;

        height: 41px;

        left: 833px;

        top: 39px;
    }

    #n_02212211287__ {
        left: 769px;

        top: 7px;

        position: absolute;
        overflow: visible;
        width: 142px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(207, 121, 119, 1);
    }

    #n_00431 {
        left: 395px;

        top: 34px;

        position: absolute;
        overflow: visible;
        width: 112px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 30px;

        color: rgba(112, 112, 112, 1);
    }

    .timer-box {
        box-sizing: border-box;
        border: 1px solid black;

        position: absolute;
        width: 143px;

        height: 40px;

        left: 377px;

        top: 27px;

        display: flex;
        justify-content: center;
        align-items: center;
        padding: 24px;
    }

    .timer-box>* {
        margin-right: 6px;
    }

    .timer-box>*>* {
        margin-left: 10px;
        color: #707070;
        font-size: 24px;
    }

    .timer-box>*>*:first-child {
        display: none;
    }

    .bet-id {
        left: 263px;

        top: 41px;

        position: absolute;
        overflow: visible;
        width: 94px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 12px;

        color: rgba(112, 112, 112, 1);
    }

    .for-sale {
        left: 319px;

        top: 55px;

        position: absolute;
        overflow: visible;
        width: 41px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 12px;

        color: rgba(112, 112, 112, 1);
    }

    .Rectangle_37 {
        overflow: hidden;
        width: 86px !important;

        height: 5px !important;

        border: 1px solid black;

        border-radius: 3px;

        border-bottom: 0px;

        border-left: 0px;

        border-top: 0px;

        /* ff 3.6+ */
        background: -moz-linear-gradient(90deg,
                rgba(123, 161, 245, 1) 0%,
                rgba(253, 114, 54, 1) 50%,
                rgba(252, 221, 26, 1) 100%);

        /* safari 5.1+,chrome 10+ */
        background: -webkit-linear-gradient(90deg,
                rgba(123, 161, 245, 1) 0%,
                rgba(253, 114, 54, 1) 50%,
                rgba(252, 221, 26, 1) 100%);

        /* opera 11.10+ */
        background: -o-linear-gradient(90deg,
                rgba(123, 161, 245, 1) 0%,
                rgba(253, 114, 54, 1) 50%,
                rgba(252, 221, 26, 1) 100%);

        /* ie 6-9 */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FCDD1A', endColorstr='#7BA1F5', GradientType=0);

        /* ie 10+ */
        background: -ms-linear-gradient(90deg,
                rgba(123, 161, 245, 1) 0%,
                rgba(253, 114, 54, 1) 50%,
                rgba(252, 221, 26, 1) 100%);

        /* global 94%+ browsers support */
        background: linear-gradient(90deg,
                rgba(123, 161, 245, 1) 0%,
                rgba(253, 114, 54, 1) 50%,
                rgba(252, 221, 26, 1) 100%);
    }

    .Rectangle_93 {
        overflow: hidden;
        position: absolute;
        width: 143px;

        height: fit-content;
        left: 377px;

        top: 84px;

        border: 1px solid black;

        border-radius: 3px;
    }

    #Rectangle_94 {
        opacity: 0.55;
        fill: rgba(112, 112, 112, 1);
    }

    .Rectangle_94 {
        width: 14px;

        height: 15px;

        position: absolute;
        overflow: visible;
        transform: translate(0px, 0px) matrix(1, 0, 0, 1, 3478.5, 441.5) rotate(90deg);

        transform-origin: center;
    }

    #V_go {
        left: 919px;

        top: 59px;

        position: absolute;
        overflow: visible;
        width: 4px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 7px;

        color: rgba(206, 206, 206, 1);
    }

    #Rectangle_68 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_68 {
        position: absolute;
        overflow: visible;
        width: 91px;

        height: 652px;

        left: 8px;

        top: 10px;
    }

    #Path_1_gq {
        fill: rgba(0, 0, 0, 0);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Path_1_gq {
        overflow: visible;
        position: absolute;
        width: 1119px;

        height: 1px;

        left: 148px;

        top: 186px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_8 {
        fill: rgba(0, 0, 0, 0);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Path_8 {
        overflow: visible;
        position: absolute;
        width: 1119px;

        height: 1px;

        left: 159px;

        top: 1191px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #abstract-user-flat-1 {
        position: absolute;
        width: 35px;

        height: 35px;

        left: 534px;

        top: 16px;

        overflow: visible;
    }

    #n_98-2986140_speaker-icon-svg- {
        position: absolute;
        width: 19px;

        height: 18px;

        left: 353px;

        top: 25px;

        overflow: visible;
    }

    #n_9-593921_png-file-svg-passwo {
        position: absolute;
        width: 5px;

        height: 3px;

        left: 947px;

        top: 36px;

        overflow: visible;
    }

    #img_572138 {
        position: absolute;
        width: 19px;

        height: 20px;

        left: 865px;

        top: 24px;

        overflow: visible;
    }

    #n_30-1300317_png-file-svg-user {
        position: absolute;
        width: 26px;

        height: 27px;

        left: 993px;

        top: 19px;

        overflow: visible;
    }

    #language-icon {
        position: absolute;
        width: 32px;

        height: 25px;

        left: 1119px;

        top: 22px;

        overflow: visible;
    }

    #n_5188 {
        position: absolute;
        width: 23px;

        height: 23px;

        left: 743px;

        top: 24px;

        overflow: visible;
    }

    #History {
        left: 24px;

        top: 41px;

        position: absolute;
        overflow: visible;
        width: 36px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #P_K_10 {
        left: 24px;

        top: 125px;

        position: absolute;
        overflow: visible;
        width: 32px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #Instant__Games {
        left: 24px;

        top: 75px;

        position: absolute;
        overflow: visible;
        width: 37px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #n_D {
        left: 24px;

        top: 159px;

        position: absolute;
        overflow: visible;
        width: 14px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #Mark_6 {
        left: 24px;

        top: 194px;

        position: absolute;
        overflow: visible;
        width: 35px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #n_1_x_5 {
        left: 24px;

        top: 228px;

        position: absolute;
        overflow: visible;
        width: 30px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #Fast_3 {
        left: 24px;

        top: 262px;

        position: absolute;
        overflow: visible;
        width: 29px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #n_D_hf {
        left: 24px;

        top: 297px;

        position: absolute;
        overflow: visible;
        width: 14px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #Happy_8 {
        left: 24px;

        top: 331px;

        position: absolute;
        overflow: visible;
        width: 42px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #n__Color_Ball {
        left: 24px;

        top: 365px;

        position: absolute;
        overflow: visible;
        width: 57px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #n_D_hi {
        left: 24px;

        top: 400px;

        position: absolute;
        overflow: visible;
        width: 14px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #North_Vietlott {
        left: 24px;

        top: 434px;

        position: absolute;
        overflow: visible;
        width: 37px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #Central_Vietlott {
        left: 24px;

        top: 484px;

        position: absolute;
        overflow: visible;
        width: 37px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #South_Vietlott {
        left: 24px;

        top: 533px;

        position: absolute;
        overflow: visible;
        width: 37px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #Thailott {
        left: 24px;

        top: 583px;

        position: absolute;
        overflow: visible;
        width: 38px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #LF_lotto {
        left: 24px;

        top: 617px;

        position: absolute;
        overflow: visible;
        width: 38px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(0, 0, 0, 1);
    }

    #Line_1 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_1 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 649px;

        top: 543px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_7 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_7 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 649px;

        top: 575px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_13 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_13 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 649px;

        top: 616px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_14 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_14 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 678px;

        top: 616px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_15 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_15 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 706px;

        top: 616px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_16 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_16 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 706px;

        top: 616px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_2 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_2 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 680px;

        top: 543px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_8 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_8 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 680px;

        top: 575px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_3 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_3 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 713px;

        top: 543px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_9 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_9 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 713px;

        top: 575px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_4 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_4 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 744px;

        top: 543px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_10 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_10 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 744px;

        top: 575px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_5 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_5 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 775px;

        top: 543px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_11 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_11 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 775px;

        top: 575px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_6 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_6 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 807px;

        top: 543px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_12 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_12 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 19px;

        left: 807px;

        top: 575px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Group_3 {
        position: relative;
        width: 114px;

        height: 26px;

        overflow: visible;
    }

    #cart-track-bet>*:hover .text,
    #cart-track-bet>*:hover path {
        fill: #49556d;
        cursor: pointer;
        color: #fff;
    }

    #cart-track-bet>*:hover {
        cursor: pointer;
    }

    .cart-track-bet {
        margin-left: 467px;

        /* border:1px solid #000; */
    }

    .cart-track-bet>* {
        display: inline-block;
        margin-right: 7px;
    }

    #Path_3 {
        fill: rgba(236, 198, 165, 1);
    }

    .Path_3 {
        overflow: visible;
        position: relative;
        width: 105px;

        height: 25px;

        left: 5px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_h {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_h {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 26px;

        left: 0px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_ia {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_ia {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 26px;

        transform: translate(-0px, -0px) matrix(1, 0, 0, 1, 2856.0886, 1959.5) rotate(180deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #Track {
        left: 44px;

        top: 4px;

        position: absolute;
        overflow: visible;
        width: 24px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #Group_5 {
        position: relative;
        width: 114px;

        overflow: visible;
    }

    #Path_3_ib {
        fill: rgba(236, 198, 165, 1);
    }

    .Path_3_ib {
        overflow: visible;
        position: absolute;
        width: 105px;

        height: 25px;

        left: 5px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_ic {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_ic {
        overflow: visible;
        position: relative;
        width: 23px;

        height: 26px;

        left: 0px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_id {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_id {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 26px;

        transform: translate(-0px, -0px) matrix(1, 0, 0, 1, 2856.0886, 1959.5) rotate(180deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #Add_to_cart {
        left: 29px;

        top: 4px;

        position: absolute;
        overflow: visible;
        width: 50px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #Group_4 {
        position: relative;
        width: 114px;

        height: 26px;

        overflow: visible;
    }

    #Path_4 {
        fill: rgba(236, 198, 165, 1);
    }

    .Path_4 {
        overflow: visible;
        position: absolute;
        width: 105px;

        height: 25px;

        left: 5px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_ig {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_ig {
        overflow: visible;
        position: relative;
        width: 23px;

        height: 26px;

        left: 0px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_ih {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_ih {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 26px;

        transform: translate(-0px, 0px) matrix(1, 0, 0, 1, 2856.0886, 1959.5) rotate(180deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #Bet_now {
        left: 39px;

        top: 4px;

        position: absolute;
        overflow: visible;
        width: 36px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #betting_content_ {
        left: 428px;

        top: 772px;

        position: absolute;
        overflow: visible;
        width: 76px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #unit_ {
        left: 558px;

        top: 772px;

        position: absolute;
        overflow: visible;
        width: 22px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #no_data_ {
        opacity: 0.7;
        left: 715px;

        top: 988px;

        position: absolute;
        overflow: visible;
        width: 42px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 11px;

        color: rgba(29, 29, 29, 1);
    }

    #multiple_ir {
        left: 632px;

        top: 772px;

        position: absolute;
        overflow: visible;
        width: 40px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Number_of_bets {
        left: 712px;

        top: 772px;

        position: absolute;
        overflow: visible;
        width: 74px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #total_amount {
        left: 826px;

        top: 772px;

        position: absolute;
        overflow: visible;
        width: 62px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #operate {
        left: 926px;

        top: 772px;

        position: absolute;
        overflow: visible;
        width: 37px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Recent_bets {
        opacity: 0.47;
        left: 420px;

        top: 734px;

        position: absolute;
        overflow: visible;
        width: 30px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Recently_chasing__number_ {
        opacity: 0.47;
        left: 501px;

        top: 734px;

        position: absolute;
        overflow: visible;
        width: 76px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Recent__recharge {
        opacity: 0.47;
        left: 628px;

        top: 734px;

        position: absolute;
        overflow: visible;
        width: 39px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Recent__withdrawals {
        opacity: 0.47;
        left: 718px;

        top: 734px;

        position: absolute;
        overflow: visible;
        width: 52px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Recent__withdrawals_iz {
        opacity: 0.47;
        left: 807px;

        top: 734px;

        position: absolute;
        overflow: visible;
        width: 52px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Recent_profit_and__loss {
        opacity: 0.47;
        left: 896px;

        top: 732px;

        position: absolute;
        overflow: visible;
        width: 79px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Plan_record {
        opacity: 0.47;
        left: 1026px;

        top: 732px;

        position: absolute;
        overflow: visible;
        width: 29px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Details {
        opacity: 0.47;
        left: 1092px;

        top: 732px;

        position: absolute;
        overflow: visible;
        width: 30px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #All_betting {
        opacity: 0.47;
        left: 1146px;

        top: 732px;

        position: absolute;
        overflow: visible;
        width: 46px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Group_8 {
        position: absolute;
        width: 398px;

        height: 1182px;

        left: 1324px;

        top: 10px;

        overflow: visible;
    }

    #Rectangle_83 {
        fill: rgba(194, 213, 224, 1);
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_83 {
        position: absolute;
        overflow: visible;
        width: 99px;

        height: 45px;

        left: 1px;

        top: 1px;
    }

    #Rectangle_17 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_17 {
        position: absolute;
        overflow: visible;
        width: 398px;

        height: 1182px;

        left: 0px;

        top: 0px;
    }

    #Rectangle_82 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_82 {
        position: absolute;
        overflow: visible;
        width: 398px;

        height: 47px;

        left: 0px;

        top: 0px;
    }

    #Line_18 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_18 {
        overflow: visible;
        position: absolute;
        width: 1px;

        height: 47px;

        left: 101px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_19 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_19 {
        overflow: visible;
        position: absolute;
        width: 1px;

        height: 47px;

        left: 301px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_20 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_20 {
        overflow: visible;
        position: absolute;
        width: 1px;

        height: 47px;

        left: 201px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Recent_draw {
        left: 22px;

        top: 16px;

        position: absolute;
        overflow: visible;
        width: 54px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Mark_No_ {
        left: 7px;

        top: 52px;

        position: absolute;
        overflow: visible;
        width: 44px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Fill_chart {
        left: 345px;

        top: 52px;

        position: absolute;
        overflow: visible;
        width: 38px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Dragon {
        left: 134px;

        top: 16px;

        position: absolute;
        overflow: visible;
        width: 33px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Trend {
        left: 233px;

        top: 16px;

        position: absolute;
        overflow: visible;
        width: 26px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Line_21 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_21 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 1px;

        left: 0px;

        top: 71px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Recent_bet {
        left: 324px;

        top: 16px;

        position: absolute;
        overflow: visible;
        width: 48px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #circle_ji {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1405px;

        top: 116px;

        overflow: visible;
    }

    #circle_jj {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1405px;

        top: 153px;

        overflow: visible;
    }

    #circle_jk {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1404px;

        top: 190px;

        overflow: visible;
    }

    #circle_jl {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1404px;

        top: 227px;

        overflow: visible;
    }

    #circle_jm {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1405px;

        top: 265px;

        overflow: visible;
    }

    #circle_jn {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1405px;

        top: 302px;

        overflow: visible;
    }

    #circle_jo {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1405px;

        top: 339px;

        overflow: visible;
    }

    #circle_jp {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1405px;

        top: 377px;

        overflow: visible;
    }

    #circle_jq {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1406px;

        top: 414px;

        overflow: visible;
    }

    #circle_jr {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1404px;

        top: 451px;

        overflow: visible;
    }

    #circle_js {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1404px;

        top: 488px;

        overflow: visible;
    }

    #circle_jt {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1404px;

        top: 525px;

        overflow: visible;
    }

    #circle_ju {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1406px;

        top: 562px;

        overflow: visible;
    }

    #circle_jv {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1406px;

        top: 600px;

        overflow: visible;
    }

    #circle_jw {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1406px;

        top: 637px;

        overflow: visible;
    }

    #circle_jx {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1405px;

        top: 674px;

        overflow: visible;
    }

    #circle_jy {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1448px;

        top: 116px;

        overflow: visible;
    }

    #circle_jz {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1448px;

        top: 153px;

        overflow: visible;
    }

    #circle_j {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1448px;

        top: 190px;

        overflow: visible;
    }

    #circle_ka {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1448px;

        top: 227px;

        overflow: visible;
    }

    #circle_kb {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1448px;

        top: 265px;

        overflow: visible;
    }

    #circle_kc {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1449px;

        top: 302px;

        overflow: visible;
    }

    #circle_kd {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1449px;

        top: 339px;

        overflow: visible;
    }

    #circle_ke {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1449px;

        top: 377px;

        overflow: visible;
    }

    #circle_kf {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1449px;

        top: 414px;

        overflow: visible;
    }

    #circle_kg {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1448px;

        top: 451px;

        overflow: visible;
    }

    #circle_kh {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1448px;

        top: 488px;

        overflow: visible;
    }

    #circle_ki {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1448px;

        top: 525px;

        overflow: visible;
    }

    #circle_kj {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1449px;

        top: 562px;

        overflow: visible;
    }

    #circle_kk {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1449px;

        top: 600px;

        overflow: visible;
    }

    #circle_kl {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1449px;

        top: 637px;

        overflow: visible;
    }

    #circle_km {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1448px;

        top: 674px;

        overflow: visible;
    }

    #circle_kn {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1426px;

        top: 116px;

        overflow: visible;
    }

    #circle_ko {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1427px;

        top: 153px;

        overflow: visible;
    }

    #circle_kp {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1426px;

        top: 190px;

        overflow: visible;
    }

    #circle_kq {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1426px;

        top: 227px;

        overflow: visible;
    }

    #circle_kr {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1427px;

        top: 265px;

        overflow: visible;
    }

    #circle_ks {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1427px;

        top: 302px;

        overflow: visible;
    }

    #circle_kt {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1427px;

        top: 339px;

        overflow: visible;
    }

    #circle_ku {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1427px;

        top: 377px;

        overflow: visible;
    }

    #circle_kv {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1427px;

        top: 414px;

        overflow: visible;
    }

    #circle_kw {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1426px;

        top: 451px;

        overflow: visible;
    }

    #circle_kx {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1426px;

        top: 488px;

        overflow: visible;
    }

    #circle_ky {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1426px;

        top: 525px;

        overflow: visible;
    }

    #circle_kz {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1427px;

        top: 562px;

        overflow: visible;
    }

    #circle_k {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1428px;

        top: 600px;

        overflow: visible;
    }

    #circle_la {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1428px;

        top: 637px;

        overflow: visible;
    }

    #circle_lb {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1427px;

        top: 674px;

        overflow: visible;
    }

    #circle_lc {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1470px;

        top: 116px;

        overflow: visible;
    }

    #circle_ld {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1470px;

        top: 153px;

        overflow: visible;
    }

    #circle_le {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1469px;

        top: 190px;

        overflow: visible;
    }

    #circle_lf {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1469px;

        top: 227px;

        overflow: visible;
    }

    #circle_lg {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1470px;

        top: 265px;

        overflow: visible;
    }

    #circle_lh {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1470px;

        top: 302px;

        overflow: visible;
    }

    #circle_li {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1470px;

        top: 339px;

        overflow: visible;
    }

    #circle_lj {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1470px;

        top: 377px;

        overflow: visible;
    }

    #circle_lk {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1471px;

        top: 414px;

        overflow: visible;
    }

    #circle_ll {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1469px;

        top: 451px;

        overflow: visible;
    }

    #circle_lm {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1469px;

        top: 488px;

        overflow: visible;
    }

    #circle_ln {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1469px;

        top: 525px;

        overflow: visible;
    }

    #circle_lo {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1471px;

        top: 562px;

        overflow: visible;
    }

    #circle_lp {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1471px;

        top: 600px;

        overflow: visible;
    }

    #circle_lq {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1471px;

        top: 637px;

        overflow: visible;
    }

    #circle_lr {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1470px;

        top: 674px;

        overflow: visible;
    }

    #circle_ls {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1491px;

        top: 116px;

        overflow: visible;
    }

    #circle_lt {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1492px;

        top: 153px;

        overflow: visible;
    }

    #circle_lu {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1491px;

        top: 190px;

        overflow: visible;
    }

    #circle_lv {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1491px;

        top: 227px;

        overflow: visible;
    }

    #circle_lw {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1492px;

        top: 265px;

        overflow: visible;
    }

    #circle_lx {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1492px;

        top: 302px;

        overflow: visible;
    }

    #circle_ly {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1492px;

        top: 339px;

        overflow: visible;
    }

    #circle_lz {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1492px;

        top: 377px;

        overflow: visible;
    }

    #circle_l {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1492px;

        top: 414px;

        overflow: visible;
    }

    #circle_ma {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1491px;

        top: 451px;

        overflow: visible;
    }

    #circle_mb {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1491px;

        top: 488px;

        overflow: visible;
    }

    #circle_mc {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1491px;

        top: 525px;

        overflow: visible;
    }

    #circle_md {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1492px;

        top: 562px;

        overflow: visible;
    }

    #circle_me {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1493px;

        top: 600px;

        overflow: visible;
    }

    #circle_mf {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1493px;

        top: 637px;

        overflow: visible;
    }

    #circle_mg {
        position: absolute;
        width: 18px;

        height: 20px;

        left: 1492px;

        top: 674px;

        overflow: visible;
    }

    #Path_6 {
        fill: rgba(230, 226, 202, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Path_6 {
        overflow: visible;
        position: absolute;
        width: 397px;

        height: 26px;

        left: 1325px;

        top: 81px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_22 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_22 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 26px;

        left: 1404px;

        top: 81px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_23 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_23 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 26px;

        left: 1520px;

        top: 80px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_24 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_24 {
        overflow: visible;
        position: absolute;
        width: 202px;

        height: 0px;

        left: 1520px;

        top: 94px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_25 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_25 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 13px;

        left: 1557px;

        top: 94px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_26 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_26 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 13px;

        left: 1590px;

        top: 94px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_27 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_27 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 13px;

        left: 1623px;

        top: 94px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_28 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_28 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 13px;

        left: 1657px;

        top: 94px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_29 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_29 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 13px;

        left: 1690px;

        top: 94px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Draw {
        left: 1343px;

        top: 87px;

        position: absolute;
        overflow: visible;
        width: 23px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1217 {
        left: 1343px;

        top: 120px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1216 {
        left: 1344px;

        top: 157px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1215 {
        left: 1343px;

        top: 194px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1214 {
        left: 1343px;

        top: 231px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1213 {
        left: 1344px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1212 {
        left: 1344px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1211 {
        left: 1344px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1210 {
        left: 1344px;

        top: 380px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1215_l {
        left: 1344px;

        top: 417px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1215_ma {
        left: 1343px;

        top: 455px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1215_mb {
        left: 1343px;

        top: 491px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1215_mc {
        left: 1343px;

        top: 529px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1215_md {
        left: 1344px;

        top: 566px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1215_me {
        left: 1345px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1215_mf {
        left: 1345px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_1215_mg {
        left: 1344px;

        top: 677px;

        position: absolute;
        overflow: visible;
        width: 27px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__mg {
        left: 1533px;

        top: 120px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__mh {
        left: 1534px;

        top: 157px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G120 {
        left: 1523px;

        top: 194px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mj {
        left: 1523px;

        top: 231px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mk {
        left: 1524px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_ml {
        left: 1524px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mm {
        left: 1524px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mn {
        left: 1524px;

        top: 380px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mo {
        left: 1525px;

        top: 417px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mp {
        left: 1523px;

        top: 455px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mq {
        left: 1523px;

        top: 491px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mr {
        left: 1523px;

        top: 529px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_ms {
        left: 1525px;

        top: 566px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mt {
        left: 1525px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mu {
        left: 1525px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #G120_mv {
        left: 1524px;

        top: 677px;

        position: absolute;
        overflow: visible;
        width: 25px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #n__mw {
        left: 1569px;

        top: 120px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60 {
        left: 1562px;

        top: 157px;

        position: absolute;
        overflow: visible;
        width: 19px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(159, 110, 72, 1);
    }

    #G60_my {
        left: 1562px;

        top: 194px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_mz {
        left: 1562px;

        top: 231px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_m {
        left: 1563px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_na {
        left: 1563px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_nb {
        left: 1563px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_nc {
        left: 1563px;

        top: 380px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_nd {
        left: 1564px;

        top: 417px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_ne {
        left: 1562px;

        top: 455px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_nf {
        left: 1562px;

        top: 491px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_ng {
        left: 1562px;

        top: 529px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_nh {
        left: 1564px;

        top: 566px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_ni {
        left: 1564px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_nj {
        left: 1564px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_nk {
        left: 1563px;

        top: 677px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nc {
        left: 1604px;

        top: 120px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nd {
        left: 1604px;

        top: 157px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ne {
        left: 1603px;

        top: 194px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nf {
        left: 1603px;

        top: 231px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ng {
        left: 1604px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nh {
        left: 1604px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ni {
        left: 1604px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nj {
        left: 1604px;

        top: 380px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nk {
        left: 1605px;

        top: 417px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nl {
        left: 1603px;

        top: 455px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nm {
        left: 1603px;

        top: 491px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nn {
        left: 1603px;

        top: 529px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__no {
        left: 1605px;

        top: 566px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__np {
        left: 1605px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nq {
        left: 1605px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nr {
        left: 1604px;

        top: 677px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ns {
        left: 1639px;

        top: 120px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nt {
        left: 1639px;

        top: 157px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nu {
        left: 1638px;

        top: 194px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nv {
        left: 1638px;

        top: 231px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nw {
        left: 1639px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nx {
        left: 1639px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ny {
        left: 1639px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__nz {
        left: 1639px;

        top: 380px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__n {
        left: 1640px;

        top: 417px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__oa {
        left: 1638px;

        top: 455px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ob {
        left: 1638px;

        top: 491px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__oc {
        left: 1638px;

        top: 529px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__od {
        left: 1640px;

        top: 566px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__oe {
        left: 1640px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__of {
        left: 1640px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__og {
        left: 1639px;

        top: 677px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10 {
        left: 1662px;

        top: 120px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_n {
        left: 1662px;

        top: 157px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_oa {
        left: 1662px;

        top: 194px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_ob {
        left: 1662px;

        top: 231px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_oc {
        left: 1662px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_od {
        left: 1663px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_oe {
        left: 1663px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_of {
        left: 1663px;

        top: 380px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_og {
        left: 1663px;

        top: 417px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_oh {
        left: 1662px;

        top: 455px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_oi {
        left: 1662px;

        top: 491px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_oj {
        left: 1662px;

        top: 529px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_ok {
        left: 1663px;

        top: 566px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_ol {
        left: 1663px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_om {
        left: 1663px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_on {
        left: 1662px;

        top: 677px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_oo {
        left: 1701px;

        top: 119px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_op {
        left: 1701px;

        top: 156px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_oq {
        left: 1700px;

        top: 193px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_or {
        left: 1700px;

        top: 230px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_os {
        left: 1701px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_ot {
        left: 1701px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_ou {
        left: 1701px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_ov {
        left: 1701px;

        top: 379px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_ow {
        left: 1702px;

        top: 416px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_ox {
        left: 1700px;

        top: 454px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_oy {
        left: 1700px;

        top: 490px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_oz {
        left: 1700px;

        top: 528px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_o {
        left: 1702px;

        top: 565px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_pa {
        left: 1702px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_pb {
        left: 1702px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n_0_pc {
        left: 1701px;

        top: 676px;

        position: absolute;
        overflow: visible;
        width: 11px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__o {
        left: 1411px;

        top: 119px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pa {
        left: 1412px;

        top: 156px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pb {
        left: 1411px;

        top: 193px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pc {
        left: 1411px;

        top: 230px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pd {
        left: 1412px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pe {
        left: 1412px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pf {
        left: 1412px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pg {
        left: 1412px;

        top: 379px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ph {
        left: 1412px;

        top: 416px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pi {
        left: 1411px;

        top: 454px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pj {
        left: 1411px;

        top: 490px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pk {
        left: 1411px;

        top: 528px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pl {
        left: 1412px;

        top: 565px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pm {
        left: 1413px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pn {
        left: 1413px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__po {
        left: 1412px;

        top: 676px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pp {
        left: 1433px;

        top: 119px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pq {
        left: 1433px;

        top: 156px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pr {
        left: 1433px;

        top: 193px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ps {
        left: 1433px;

        top: 230px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pt {
        left: 1433px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pu {
        left: 1434px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pv {
        left: 1434px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pw {
        left: 1434px;

        top: 379px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__px {
        left: 1434px;

        top: 416px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__py {
        left: 1433px;

        top: 454px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__pz {
        left: 1433px;

        top: 490px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__p {
        left: 1433px;

        top: 528px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qa {
        left: 1434px;

        top: 565px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qb {
        left: 1434px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qc {
        left: 1434px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qd {
        left: 1433px;

        top: 676px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qe {
        left: 1455px;

        top: 119px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qf {
        left: 1455px;

        top: 156px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qg {
        left: 1454px;

        top: 193px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qh {
        left: 1454px;

        top: 230px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qi {
        left: 1455px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qj {
        left: 1455px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qk {
        left: 1455px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ql {
        left: 1455px;

        top: 379px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qm {
        left: 1456px;

        top: 416px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qn {
        left: 1454px;

        top: 454px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qo {
        left: 1454px;

        top: 490px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qp {
        left: 1454px;

        top: 528px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qq {
        left: 1456px;

        top: 565px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qr {
        left: 1456px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qs {
        left: 1456px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qt {
        left: 1455px;

        top: 676px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qu {
        left: 1476px;

        top: 119px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qv {
        left: 1477px;

        top: 156px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qw {
        left: 1476px;

        top: 193px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qx {
        left: 1476px;

        top: 230px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qy {
        left: 1477px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__qz {
        left: 1477px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__q {
        left: 1477px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ra {
        left: 1477px;

        top: 379px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rb {
        left: 1477px;

        top: 416px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rc {
        left: 1476px;

        top: 454px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rd {
        left: 1476px;

        top: 490px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__re {
        left: 1476px;

        top: 528px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rf {
        left: 1477px;

        top: 565px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rg {
        left: 1478px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rh {
        left: 1478px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ri {
        left: 1477px;

        top: 676px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rj {
        left: 1498px;

        top: 119px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rk {
        left: 1498px;

        top: 156px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rl {
        left: 1498px;

        top: 193px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rm {
        left: 1498px;

        top: 230px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rn {
        left: 1498px;

        top: 268px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ro {
        left: 1499px;

        top: 305px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rp {
        left: 1499px;

        top: 342px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rq {
        left: 1499px;

        top: 379px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rr {
        left: 1499px;

        top: 416px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rs {
        left: 1498px;

        top: 454px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rt {
        left: 1498px;

        top: 490px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ru {
        left: 1498px;

        top: 528px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rv {
        left: 1499px;

        top: 565px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rw {
        left: 1499px;

        top: 603px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__rx {
        left: 1499px;

        top: 640px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #n__ry {
        left: 1498px;

        top: 676px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Winning_No {
        left: 1434px;

        top: 87px;

        position: absolute;
        overflow: visible;
        width: 56px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #All5_Group {
        left: 1591px;

        top: 80px;

        position: absolute;
        overflow: visible;
        width: 48px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G120_re {
        left: 1527px;

        top: 93px;

        position: absolute;
        overflow: visible;
        width: 24px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G60_rf {
        left: 1564px;

        top: 93px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G30 {
        left: 1598px;

        top: 93px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G20 {
        left: 1631px;

        top: 93px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G10_ri {
        left: 1664px;

        top: 93px;

        position: absolute;
        overflow: visible;
        width: 18px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #G5 {
        left: 1699px;

        top: 93px;

        position: absolute;
        overflow: visible;
        width: 12px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(29, 29, 29, 1);
    }

    #Line_30 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_30 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 143px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_31 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_31 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1325px;

        top: 180px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_32 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_32 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 217px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_33 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_33 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 254px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_34 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_34 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 292px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_35 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_35 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 329px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_36 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_36 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 366px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_37 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_37 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1325px;

        top: 404px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_39 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_39 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 441px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_40 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_40 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 478px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_41 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_41 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 515px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_42 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_42 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 553px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_43 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_43 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 590px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_44 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_44 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 627px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_45 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_45 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 664px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_46 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_46 {
        overflow: visible;
        position: absolute;
        width: 398px;

        height: 0px;

        left: 1324px;

        top: 701px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Group_9 {
        position: absolute;
        width: 396px;

        height: 106px;

        left: 1325px;

        top: 720px;

        overflow: visible;
    }

    #Rectangle_84 {
        fill: rgba(218, 184, 183, 1);
    }

    .Rectangle_84 {
        position: absolute;
        overflow: visible;
        width: 396px;

        height: 32px;

        left: 0px;

        top: 9px;
    }

    #Rectangle_86 {
        opacity: 0.5;
        fill: rgba(218, 184, 183, 1);
    }

    .Rectangle_86 {
        position: absolute;
        overflow: visible;
        width: 396px;

        height: 9px;

        left: 0px;

        top: 0px;
    }

    #Rectangle_85 {
        opacity: 0.46;
        fill: rgba(218, 184, 183, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_85 {
        position: absolute;
        overflow: visible;
        width: 396px;

        height: 32px;

        left: 0px;

        top: 41px;
    }

    #Road {
        left: 17px;

        top: 18px;

        position: absolute;
        overflow: visible;
        width: 23px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #Sum {
        left: 17px;

        top: 50px;

        position: absolute;
        overflow: visible;
        width: 20px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #n_st_r {
        opacity: 0.5;
        left: 52px;

        top: 50px;

        position: absolute;
        overflow: visible;
        width: 13px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #n_nd {
        opacity: 0.5;
        left: 80px;

        top: 50px;

        position: absolute;
        overflow: visible;
        width: 17px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #n_rd {
        opacity: 0.5;
        left: 112px;

        top: 50px;

        position: absolute;
        overflow: visible;
        width: 15px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #n_th {
        opacity: 0.5;
        left: 142px;

        top: 50px;

        position: absolute;
        overflow: visible;
        width: 15px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #n_th_sa {
        opacity: 0.5;
        left: 171px;

        top: 50px;

        position: absolute;
        overflow: visible;
        width: 15px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #Road_bet {
        left: 323px;

        top: 18px;

        position: absolute;
        overflow: visible;
        width: 40px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #Line_38 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_38 {
        filter: drop-shadow0px0px0px rgba(0, 0, 0, 0.161);

        overflow: visible;
        position: absolute;
        width: 399px;

        height: 3px;

        left: 0px;

        top: 106px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Ellipse_54 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_54 {
        position: absolute;
        overflow: visible;
        width: 17px;

        height: 17px;

        left: 368px;

        top: 17px;
    }

    #arrow_2 {
        opacity: 0.69;
        position: absolute;
        width: 9px;

        height: 11px;

        left: 372px;

        top: 19px;

        overflow: visible;
    }

    #Group_10 {
        position: absolute;
        width: 96px;

        height: 23px;

        left: 1344px;

        top: 798px;

        overflow: visible;
    }

    #Path_4_sg {
        fill: rgba(236, 198, 165, 1);
    }

    .Path_4_sg {
        overflow: visible;
        position: absolute;
        width: 86px;

        height: 23px;

        left: 5px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_sh {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_sh {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        left: 0px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_si {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_si {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        transform: translate(-0px, 0px) matrix(1, 0, 0, 1, 2801.0559, 1959.5) rotate(180deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #BigSmall {
        left: 26px;

        top: 5px;

        position: absolute;
        overflow: visible;
        width: 46px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(126, 77, 135, 1);
    }

    #Group_11 {
        position: absolute;
        width: 100px;

        height: 23px;

        left: 1473px;

        top: 798px;

        overflow: visible;
    }

    #Path_4_sl {
        fill: rgba(236, 198, 165, 1);
    }

    .Path_4_sl {
        overflow: visible;
        position: absolute;
        width: 91px;

        height: 23px;

        left: 5px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_sm {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_sm {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        left: 0px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_sn {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_sn {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        transform: translate(-0px, 0px) matrix(1, 0, 0, 1, 2814.5557, 1959.5) rotate(180deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #OddEeven {
        left: 24px;

        top: 5px;

        position: absolute;
        overflow: visible;
        width: 50px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #Group_13 {
        position: absolute;
        width: 100px;

        height: 23px;

        left: 1583px;

        top: 1118px;

        overflow: visible;
    }

    #Path_4_sq {
        fill: rgba(231, 235, 238, 1);
    }

    .Path_4_sq {
        overflow: visible;
        position: absolute;
        width: 91px;

        height: 23px;

        left: 5px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_sr {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_sr {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        left: 0px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_ss {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_ss {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        transform: translate(-0px, 0px) matrix(1, 0, 0, 1, 2814.5557, 1959.5) rotate(180deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #Next_B {
        left: 18px;

        top: 5px;

        position: absolute;
        overflow: visible;
        width: 29px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #Ellipse_47 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_47 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 51px;

        top: 7px;
    }

    #Ellipse_48 {
        fill: rgba(194, 31, 31, 1);
    }

    .Ellipse_48 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 63px;

        top: 7px;
    }

    #Line_164 {
        fill: transparent;
        stroke: rgba(51, 130, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_164 {
        overflow: visible;
        position: absolute;
        width: 8px;

        height: 8px;

        left: 74px;

        top: 8px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Group_14 {
        position: absolute;
        width: 100px;

        height: 23px;

        left: 1579px;

        top: 1148px;

        overflow: visible;
    }

    #Path_4_sy {
        fill: rgba(231, 235, 238, 1);
    }

    .Path_4_sy {
        overflow: visible;
        position: absolute;
        width: 91px;

        height: 23px;

        left: 5px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_sz {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_sz {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        left: 0px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_s {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_s {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        transform: translate(-0px, 0px) matrix(1, 0, 0, 1, 2814.5557, 1959.5) rotate(180deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #Next_S {
        left: 22px;

        top: 5px;

        position: absolute;
        overflow: visible;
        width: 29px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #Ellipse_49 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_49 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 55px;

        top: 7px;
    }

    #Ellipse_50 {
        fill: rgba(52, 131, 235, 1);
    }

    .Ellipse_50 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 68px;

        top: 7px;
    }

    #Line_165 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_165 {
        overflow: visible;
        position: absolute;
        width: 8px;

        height: 8px;

        left: 79px;

        top: 7px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Group_12 {
        position: absolute;
        width: 96px;

        height: 23px;

        left: 1600px;

        top: 798px;

        overflow: visible;
    }

    #Path_4_s {
        fill: rgba(236, 198, 165, 1);
    }

    .Path_4_s {
        overflow: visible;
        position: absolute;
        width: 86px;

        height: 23px;

        left: 5px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #DragonTiger {
        left: 16px;

        top: 5px;

        position: absolute;
        overflow: visible;
        width: 59px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(0, 0, 0, 1);
    }

    #Path_3_ta {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_ta {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        left: 0px;

        top: 0px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Path_3_tb {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_3_tb {
        overflow: visible;
        position: absolute;
        width: 23px;

        height: 23px;

        transform: translate(-0px, 0px) matrix(1, 0, 0, 1, 2800.0559, 1959.5) rotate(180deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #Line_47 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_47 {
        overflow: visible;
        position: absolute;
        width: 397px;

        height: 0px;

        left: 1324px;

        top: 844px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_48 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_48 {
        overflow: visible;
        position: absolute;
        width: 397px;

        height: 0px;

        left: 1324px;

        top: 861px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_49 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_49 {
        overflow: visible;
        position: absolute;
        width: 397px;

        height: 0px;

        left: 1324px;

        top: 878px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_50 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_50 {
        overflow: visible;
        position: absolute;
        width: 397px;

        height: 0px;

        left: 1324px;

        top: 894px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_51 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_51 {
        overflow: visible;
        position: absolute;
        width: 397px;

        height: 0px;

        left: 1324px;

        top: 911px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_52 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_52 {
        overflow: visible;
        position: absolute;
        width: 397px;

        height: 0px;

        left: 1324px;

        top: 928px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_53 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_53 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1343px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_54 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_54 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1363px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_55 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_55 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1383px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_56 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_56 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1403px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_57 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_57 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1423px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_58 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_58 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1443px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_59 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_59 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1463px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_60 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_60 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1483px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_61 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_61 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1503px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_62 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_62 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1523px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_63 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_63 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1543px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_64 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_64 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1563px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_65 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_65 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1583px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_66 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_66 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1603px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_67 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_67 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1623px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_68 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_68 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1643px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_69 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_69 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1663px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_70 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_70 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1683px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_71 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_71 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 102px;

        left: 1703px;

        top: 826px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Rectangle_87 {
        opacity: 0.5;
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_87 {
        position: absolute;
        overflow: visible;
        width: 180px;

        height: 105px;

        left: 1325px;

        top: 959px;
    }

    #Rectangle_91 {
        opacity: 0.5;
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_91 {
        position: absolute;
        overflow: visible;
        width: 180px;

        height: 105px;

        left: 1325px;

        top: 1087px;
    }

    #Rectangle_90 {
        opacity: 0.5;
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_90 {
        position: absolute;
        overflow: visible;
        width: 187px;

        height: 105px;

        left: 1534px;

        top: 959px;
    }

    #Line_83 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_83 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1428px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_124 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_124 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1426px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_109 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_109 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1641px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_75 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_75 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1357px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_120 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_120 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1357px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_105 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_105 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1569px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_81 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_81 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1458px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_126 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_126 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1458px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_111 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_111 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1673px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_77 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_77 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1393px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_122 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_122 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1393px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_107 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_107 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1607px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_79 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_79 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1473px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_127 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_127 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1473px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_112 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_112 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1689px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_73 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_73 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1341px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_119 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_119 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1341px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_104 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_104 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1551px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_82 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_82 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1443px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_125 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_125 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1443px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_110 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_110 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1657px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_74 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_74 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1375px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_121 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_121 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1375px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_106 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_106 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1589px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_80 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_80 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1489px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_129 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_129 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1519px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_128 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_128 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1489px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_161 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_161 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1521px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_162 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_162 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1535px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_113 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_113 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1706px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_76 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_76 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1410px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_123 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_123 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1410px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_108 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_108 {
        overflow: visible;
        position: absolute;
        width: 0px;

        height: 105px;

        left: 1624px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_94 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_94 {
        overflow: visible;
        position: absolute;
        width: 195px;

        height: 0px;

        left: 1324px;

        top: 1046px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_131 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_131 {
        overflow: visible;
        position: absolute;
        width: 195px;

        height: 0px;

        left: 1324px;

        top: 1064px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_118 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_118 {
        overflow: visible;
        position: absolute;
        width: 210px;

        height: 0px;

        left: 1325px;

        top: 1173px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_103 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_103 {
        overflow: visible;
        position: absolute;
        width: 187px;

        height: 0px;

        left: 1534px;

        top: 1046px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_95 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_95 {
        overflow: visible;
        position: absolute;
        width: 195px;

        height: 0px;

        left: 1324px;

        top: 1028px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_117 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_117 {
        overflow: visible;
        position: absolute;
        width: 210px;

        height: 0px;

        left: 1325px;

        top: 1155px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_102 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_102 {
        overflow: visible;
        position: absolute;
        width: 187px;

        height: 0px;

        left: 1534px;

        top: 1028px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_96 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_96 {
        overflow: visible;
        position: absolute;
        width: 195px;

        height: 0px;

        left: 1324px;

        top: 1012px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_116 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_116 {
        overflow: visible;
        position: absolute;
        width: 210px;

        height: 0px;

        left: 1325px;

        top: 1139px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_101 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_101 {
        overflow: visible;
        position: absolute;
        width: 187px;

        height: 0px;

        left: 1534px;

        top: 1012px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_97 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_97 {
        overflow: visible;
        position: absolute;
        width: 195px;

        height: 0px;

        left: 1324px;

        top: 996px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_114 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_114 {
        overflow: visible;
        position: absolute;
        width: 210px;

        height: 0px;

        left: 1325px;

        top: 1123px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_100 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_100 {
        overflow: visible;
        position: absolute;
        width: 187px;

        height: 0px;

        left: 1534px;

        top: 996px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_98 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_98 {
        overflow: visible;
        position: absolute;
        width: 195px;

        height: 0px;

        left: 1324px;

        top: 978px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_130 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_130 {
        overflow: visible;
        position: absolute;
        width: 195px;

        height: 0px;

        left: 1324px;

        top: 959px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_115 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_115 {
        overflow: visible;
        position: absolute;
        width: 210px;

        height: 0px;

        left: 1325px;

        top: 1105px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_163 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_163 {
        overflow: visible;
        position: absolute;
        width: 210px;

        height: 0px;

        left: 1325px;

        top: 1087px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_99 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_99 {
        overflow: visible;
        position: absolute;
        width: 187px;

        height: 0px;

        left: 1534px;

        top: 978px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #B {
        left: 1331px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vi {
        left: 1369px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vj {
        left: 1369px;

        top: 845px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vk {
        left: 1369px;

        top: 862px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vl {
        left: 1409px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vm {
        left: 1449px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vn {
        left: 1489px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vo {
        left: 1489px;

        top: 845px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vp {
        left: 1529px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vq {
        left: 1529px;

        top: 845px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vr {
        left: 1529px;

        top: 862px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vs {
        left: 1529px;

        top: 879px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vt {
        left: 1570px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vu {
        left: 1569px;

        top: 845px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vv {
        left: 1609px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vw {
        left: 1609px;

        top: 846px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vx {
        left: 1609px;

        top: 863px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #B_vy {
        left: 1650px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 7px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(194, 31, 31, 1);
    }

    #S {
        left: 1349px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_v {
        left: 1349px;

        top: 845px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wa {
        left: 1390px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wb {
        left: 1389px;

        top: 845px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wc {
        left: 1429px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wd {
        left: 1469px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_we {
        left: 1469px;

        top: 845px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wf {
        left: 1509px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wg {
        left: 1549px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wh {
        left: 1590px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wi {
        left: 1590px;

        top: 846px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wj {
        left: 1590px;

        top: 863px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wk {
        left: 1590px;

        top: 879px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wl {
        left: 1590px;

        top: 896px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wm {
        left: 1590px;

        top: 913px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wn {
        left: 1628px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #S_wo {
        left: 1669px;

        top: 828px;

        position: absolute;
        overflow: visible;
        width: 6px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: bold;
        font-size: 10px;

        color: rgba(52, 131, 235, 1);
    }

    #Ellipse_6 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_6 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1328px;

        top: 965px;
    }

    #Ellipse_10 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_10 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1361px;

        top: 965px;
    }

    #Ellipse_19 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_19 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1431px;

        top: 965px;
    }

    #Ellipse_23 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_23 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1461px;

        top: 965px;
    }

    #Ellipse_27 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_27 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1493px;

        top: 965px;
    }

    #Ellipse_16 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_16 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1397px;

        top: 965px;
    }

    #Ellipse_8 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_8 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1345px;

        top: 965px;
    }

    #Ellipse_25 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_25 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1478px;

        top: 965px;
    }

    #Ellipse_12 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_12 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1380px;

        top: 965px;
    }

    #Ellipse_17 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_17 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1415px;

        top: 965px;
    }

    #Ellipse_21 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_21 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1446px;

        top: 965px;
    }

    #Ellipse_14 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_14 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1380px;

        top: 999px;
    }

    #Ellipse_7 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_7 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1328px;

        top: 982px;
    }

    #Ellipse_29 {
        fill: rgba(194, 31, 31, 1);
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_29 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4035, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_31 {
        fill: rgba(194, 31, 31, 1);
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_31 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4140, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_37 {
        fill: rgba(194, 31, 31, 1);
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_37 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4140, 3331) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_33 {
        fill: rgba(194, 31, 31, 1);
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_33 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4241, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_39 {
        fill: rgba(194, 31, 31, 1);
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_39 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4241, 3331) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_40 {
        fill: rgba(194, 31, 31, 1);
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_40 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4241, 3380) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_41 {
        fill: rgba(194, 31, 31, 1);
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_41 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4241, 3429) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_35 {
        fill: rgba(194, 31, 31, 1);
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_35 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4340, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_45 {
        fill: rgba(194, 31, 31, 1);
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_45 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4432, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_11 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_11 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1361px;

        top: 982px;
    }

    #Ellipse_18 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_18 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1431px;

        top: 982px;
    }

    #Ellipse_22 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_22 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1461px;

        top: 982px;
    }

    #Ellipse_26 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_26 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1493px;

        top: 982px;
    }

    #Ellipse_20 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_20 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1431px;

        top: 999px;
    }

    #Ellipse_9 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_9 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1345px;

        top: 982px;
    }

    #Ellipse_28 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_28 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 3986, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_30 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_30 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4089, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_32 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_32 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4192, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_38 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_38 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4192, 3331) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_34 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_34 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4290, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_36 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_36 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4383, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_46 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_46 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4475, 3276) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_42 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_42 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4383, 3331) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_43 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_43 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4383, 3380) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_44 {
        fill: rgba(52, 131, 235, 1);
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_44 {
        width: 9px;

        height: 9px;

        position: absolute;
        overflow: visible;
        transform: matrix(1, 0, 0, 1, 4383, 3429) rotate(180deg);
        transform-origin: center;
    }

    #Ellipse_24 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_24 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1478px;

        top: 982px;
    }

    #Ellipse_13 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_13 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1380px;

        top: 982px;
    }

    #Ellipse_15 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_15 {
        position: absolute;
        overflow: visible;
        width: 9px;

        height: 9px;

        left: 1380px;

        top: 1016px;
    }

    #Line_132 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_132 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1556px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_148 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_148 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1629px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_151 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_151 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1660px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_158 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_158 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1692px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_142 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_142 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1595px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_140 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_140 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1556px;

        top: 983px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_147 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_147 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1629px;

        top: 983px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_149 {
        fill: transparent;
        stroke: rgba(194, 31, 31, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_149 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1628px;

        top: 1000px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_134 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_134 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1537px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_157 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_157 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1709px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_143 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_143 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1612px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_160 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_160 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1677px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_150 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_150 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1645px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_141 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_141 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1574px;

        top: 963px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_135 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_135 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1537px;

        top: 983px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_156 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_156 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1709px;

        top: 983px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_144 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_144 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1612px;

        top: 983px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_159 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_159 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1677px;

        top: 983px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_136 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_136 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1537px;

        top: 1000px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_155 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_155 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1709px;

        top: 1000px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_145 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_145 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1612px;

        top: 1000px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_137 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_137 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1537px;

        top: 1014px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_154 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_154 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1709px;

        top: 1014px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_146 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_146 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1612px;

        top: 1014px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_138 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_138 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1537px;

        top: 1032px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_153 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_153 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1709px;

        top: 1032px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_139 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_139 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1537px;

        top: 1050px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Line_152 {
        fill: transparent;
        stroke: rgba(52, 131, 235, 1);
        stroke-width: 2px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Line_152 {
        overflow: visible;
        position: absolute;
        width: 10px;

        height: 10px;

        left: 1709px;

        top: 1050px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Road_intro {
        left: 1608px;

        top: 1101px;

        position: absolute;
        overflow: visible;
        width: 49px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 10px;

        color: rgba(112, 112, 112, 1);
    }

    #Ellipse_51 {
        fill: transparent;
        stroke: rgba(112, 112, 112, 1);
        stroke-width: 0px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Ellipse_51 {
        position: absolute;
        overflow: visible;
        width: 10px;

        height: 10px;

        left: 1597px;

        top: 1103px;
    }

    #Text_yf {
        left: 1600px;

        top: 1103px;

        position: absolute;
        overflow: visible;
        width: 3px;

        white-space: nowrap;
        text-align: left;

        font-style: normal;
        font-weight: normal;
        font-size: 6px;

        color: rgba(112, 112, 112, 1);
    }

    #Group_15 {
        position: absolute;
        width: 40px;

        height: 125px;

        left: 246px;

        top: 203px;

        overflow: visible;
    }

    #Path_1_yh {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_yh {
        overflow: visible;
        position: absolute;
        width: 125px;

        height: 40px;

        transform: translate(0px, -0px) matrix(1, 0, 0, 1, 612.9375, 736.9375) rotate(-90deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #H_O_T {
        left: 16px;

        top: 43px;

        position: absolute;
        overflow: visible;
        width: 9px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 11px;

        color: rgba(112, 112, 112, 1);
    }

    #Group_16 {
        position: absolute;
        width: 40px;

        height: 125px;

        left: 249px;

        top: 333px;

        overflow: visible;
    }

    #Path_1_yk {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_yk {
        overflow: visible;
        position: absolute;
        width: 125px;

        height: 40px;

        transform: translate(-0px, -0px) matrix(1, 0, 0, 1, 619.9677, 1125.9072) rotate(-90deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #A_L_L {
        left: 16px;

        top: 39px;

        position: absolute;
        overflow: visible;
        width: 8px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 11px;

        color: rgba(112, 112, 112, 1);
    }

    #Group_17 {
        position: absolute;
        width: 40px;

        height: 125px;

        left: 249px;

        top: 468px;

        overflow: visible;
    }

    #Path_1_yn {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_yn {
        overflow: visible;
        position: absolute;
        width: 125px;

        height: 40px;

        transform: translate(-0px, 0px) matrix(1, 0, 0, 1, 619.9677, 1529.0625) rotate(-90deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #n__2____S__I___D__E__S {
        left: 13px;

        top: 20px;

        position: absolute;
        overflow: visible;
        width: 15px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 11px;

        color: rgba(112, 112, 112, 1);
    }

    #Group_18 {
        position: absolute;
        width: 40px;

        height: 125px;

        left: 249px;

        top: 604px;

        overflow: visible;
    }

    #Path_1_yq {
        fill: rgba(112, 112, 112, 1);
    }

    .Path_1_yq {
        overflow: visible;
        position: absolute;
        width: 125px;

        height: 40px;

        transform: translate(-0px, -0px) matrix(1, 0, 0, 1, 619.9677, 1938.0322) rotate(-90deg);

        transform-origin: center;
        left: 0px;

        top: 0px;
    }

    #s_t_a_n_d_a_r_d {
        left: 16px;

        top: 14px;

        position: absolute;
        overflow: visible;
        width: 9px;

        white-space: nowrap;
        text-align: center;

        font-style: normal;
        font-weight: bold;
        font-size: 11px;

        color: rgba(112, 112, 112, 1);
        text-transform: uppercase;
    }

    #Polygon_1 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Polygon_1 {
        overflow: visible;
        position: absolute;
        width: 20px;

        height: 17px;

        left: 134px;

        top: 179px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Polygon_6 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Polygon_6 {
        overflow: visible;
        position: absolute;
        width: 20px;

        height: 17px;

        left: 146px;

        top: 1184px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Polygon_5 {
        fill: transparent;
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Polygon_5 {
        overflow: visible;
        position: absolute;
        width: 20px;

        height: 17px;

        left: 1273px;

        top: 1181px;

        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    #Rectangle_96 {
        fill: rgba(73, 84, 110, 1);
        stroke: rgba(0, 0, 0, 1);
        stroke-width: 1px;

        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }

    .Rectangle_96 {
        position: absolute;
        overflow: visible;
        width: 25px;

        height: 63px;

        left: 1301px;

        top: 80px;
    }

    #arrow {
        position: absolute;
        width: 18px;

        height: 21px;

        left: 1304px;

        top: 102px;

        overflow: visible;
    }

    #n_134065 {
        position: absolute;
        width: 64px;

        height: 64px;

        left: 693px;

        top: 1100px;

        overflow: visible;
    }

    #n_9-593921_png-file-svg-passwo_y {
        position: absolute;
        width: 19px;

        height: 12px;

        left: 806px;

        top: 29px;

        overflow: visible;
    }
    </style>

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
                <span>202212211287 </span><span style="color: rgba(112, 112, 112, 1)"> 期・截止时间</span>
            </div>

            <div class="timer-box">
                <div class="hrs">
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
                </div>
            </div>

            <div class="bet-id">
                <span>NO:</span><span style="color: rgba(207, 121, 119, 1)">20221108-246</span>
            </div>
            <div class="for-sale">
                <span>For sale</span>
            </div>
            <div class="Rectangle_93">
                <div class="Rectangle_37" style="height: 24px; width: 75%"></div>
            </div>

            <div class="draw-num-box container">
                <div class="slot-wrapper">
                    <div id="slot1" class="slot"></div>
                    <div id="slot2" class="slot"></div>
                    <div id="slot3" class="slot"></div>
                    <div id="slot4" class="slot"></div>
                    <div id="slot5" class="slot"></div>
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
                            <li>Any Place</li>
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
                                <div class="active-svg nav-item-c" data-class="a5_joint">
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
                                <div class="nav-item-c" data-class="a5_manual">
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
                                <div class="nav-item-c" data-class="a5_combo">
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
                                <div class="nav-item-c" data-class="a5_g120">
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
                                <div class="nav-item-c" data-class="a5_g60">
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
                                <div class="nav-item-c" data-class="a5_g30">
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
                                <div class="nav-item-c" data-class="a5_g20">
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
                                <div class="nav-item-c" data-class="a5_g10">
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
                                <div class="nav-item-c" data-class="a5_g5">
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
                        <div class="row-c">
                            <div class="col-c active-game-box">
                                <span class="active-game">All 5 straight(Joint)</span>
                                <span>Prize:
                                    <span class="prize-value" style="color: red">1965.15</span></span>
                            </div>

                            <div class="solo-play">
                                <button id="how-to-play">How to play</button>
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
                            <div id="Group_3" class="col-c track ">
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
                            <div id="Group_5" class="col-c cart disabled-svg">
                                <svg class="Path_3_ib" viewBox="2771.25 1959.5 314.75 76.5">
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
                                <div id="Bet_now">
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
                                                            <th scope="col">Clear</th>
                                                            <!-- <th scope="col" >Balance 2000<span class="bi bi-eye"></span>d</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>All 5 Group 120</td>
                                                            <td>0 1 2 3 4 5 6 7 8 9</td>
                                                            <td>252</td>
                                                            <td>2</td>

                                                            <td>
                                                                <span class="currency">$</span>&nbsp;&nbsp;234
                                                            </td>
                                                            <td><span class="bi bi-trash3"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>All 5 Group 120</td>
                                                            <td>0 1 2 3 4 5 6 7 8 9</td>
                                                            <td>252</td>
                                                            <td>2</td>

                                                            <td>
                                                                <span class="currency">$</span>&nbsp;&nbsp;234
                                                            </td>
                                                            <td><span class="bi bi-trash3"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>All 5 Group 120</td>
                                                            <td>0 1 2 3 4 5 6 7 8 9</td>
                                                            <td>252</td>
                                                            <td>2</td>

                                                            <td>
                                                                <span class="currency">$</span>&nbsp;&nbsp;234
                                                            </td>
                                                            <td><span class="bi bi-trash3"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>All 5 Group 120</td>
                                                            <td>0 1 2 3 4 5 6 7 8 9</td>
                                                            <td>252</td>
                                                            <td>2</td>

                                                            <td>
                                                                <span class="currency">$</span>&nbsp;&nbsp;234
                                                            </td>
                                                            <td><span class="bi bi-trash3"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>All 5 Group 120</td>
                                                            <td>0 1 2 3 4 5 6 7 8 9</td>
                                                            <td>252</td>
                                                            <td>2</td>

                                                            <td>
                                                                <span class="currency">$</span>&nbsp;&nbsp;234
                                                            </td>
                                                            <td><span class="bi bi-trash3"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>All 5 Group 120</td>
                                                            <td>0 1 2 3 4 5 6 7 8 9</td>
                                                            <td>252</td>
                                                            <td>2</td>

                                                            <td>
                                                                <span class="currency">$</span>&nbsp;&nbsp;234
                                                            </td>
                                                            <td><span class="bi bi-trash3"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>All 5 Group 120</td>
                                                            <td>0 1 2 3 4 5 6 7 8 9</td>
                                                            <td>252</td>
                                                            <td>2</td>

                                                            <td>
                                                                <span class="currency">$</span>&nbsp;&nbsp;234
                                                            </td>
                                                            <td><span class="bi bi-trash3"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>All 5 Group 120</td>
                                                            <td>0 1 2 3 4 5 6 7 8 9</td>
                                                            <td>252</td>
                                                            <td>2</td>

                                                            <td>
                                                                <span class="currency">$</span>&nbsp;&nbsp;234
                                                            </td>
                                                            <td><span class="bi bi-trash3"></span></td>
                                                        </tr>
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
                                                            <select name="first_draw" class="form-select" id="">
                                                                <option value="1234567">1234567</option>
                                                                <option value="1234567">1234567</option>
                                                                <option value="1234567">1234567</option>
                                                                <option value="1234567">1234567</option>
                                                                <option value="1234567">1234567</option>
                                                            </select>
                                                        </div>
                                                        <!-- <div class="track-container">
                                                                <label for="current_draw">Track draw: </label>
                                                                <input type="text" class="current-draw" />draws (Maximum
                                                                track 120 draws)
                                                                </div> -->
                                                        <div class="row flex-lg-nowrap ms-lg-5">
                                                            <label for="inputPassword"
                                                                class="col-sm-3 col-form-label mr-n3">Track draw:
                                                            </label>
                                                            <div class="col-sm-3">
                                                                <input type="number" min="1" max="120"
                                                                    class="form-control" id="inputPassword" />
                                                            </div>
                                                            <label for="inputPassword"
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
                                                                <input type="number" min="1" class="form-control"
                                                                    id="firstMulti" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label">Every:
                                                            </label>
                                                            <div class="col-sm-4">
                                                                <input type="number" min="1" class="form-control"
                                                                    id="inputPassword" />
                                                            </div>
                                                            <label for="inputPassword"
                                                                class="current-draw col-sm-2 col-form-label">draw(s)</label>
                                                        </div>
                                                        <div class="row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label text-danger">Multi x:
                                                            </label>
                                                            <div class="col-sm-2">
                                                                <input type="number" min="1" class="form-control"
                                                                    id="inputPassword" />
                                                            </div>
                                                            <label for="inputPassword"
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
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" name="track_number"
                                                                                    id="master"/>
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
                                                                    <strong class="text-danger">10</strong> draw(s)
                                                                </span>
                                                                <span class="total__bets">
                                                                    Total.
                                                                    <strong class="text-danger">2345</strong> bet(s)
                                                                </span>
                                                            </div>
                                                            <div class="total__track__bets col-sm-4">
                                                                <span class="total__amount">Total Amt.
                                                                    <strong class="text-danger">2345</strong></span>
                                                            </div>
                                                            <div class="total__amount__balance col-sm-3">
                                                                <span class="total__balance">Balance:
                                                                    <strong class="text-danger">2345</strong></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card p-4 mt-2 bg-light text-dark">
                                                        <div class="d-flex justify-content-end align-content-center">
                                                            <div class="form-check m-2">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="flexRadioDefault1" />
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Stop if win
                                                                </label>
                                                            </div>
                                                            <div class="form-check m-2">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="flexRadioDefault2"
                                                                    checked />
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Stop if not win
                                                                </label>
                                                            </div>
                                                            <button type="button" class="btn-bet-now ms-3">
                                                                Track Confirm
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profit-margin-chase-number-tab-pane"
                                                role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                                profit margin chase
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cart-tab-pane" role="tabpanel" aria-labelledby="cart-tab"
                                    tabindex="0">
                                    <div class="table-balance-container">
                                        <div class="table-content table-responsive">
                                            <table class="table table-borderless" aria-describedby>
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
                                                <tbody>
                                                    <tr>
                                                        <td>All 5 Group 120</td>
                                                        <td>0 1 2 3 4 5 6 7 8 9</td>
                                                        <td>252</td>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="row">
                                                                <ul class="multibetCounter">
                                                                    <li data-btn-type="decrement" class="cart-decrement"
                                                                        id="decrement">
                                                                        <span class="romoveBtn"><i
                                                                                class="bi bi-dash"></i></span>
                                                                    </li>

                                                                    <input class="input-multibet-counter"
                                                                        id="btnMultiBetCount" name="multiBetCount"
                                                                        type="text" value="X1" disabled />
                                                                    <li data-btn-type="increment" id="increment"
                                                                        class="cart-increment">
                                                                        <span class="romoveBtn"><i
                                                                                class="bi bi-plus"></i></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td><span class="currency">$</span>&nbsp;&nbsp;234</td>
                                                        <td><span class="bi bi-trash3"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                        <td>@fat</td>
                                                        <td>@fat</td>

                                                        <td><span class="bi bi-trash3"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                        <td>@twitter</td>
                                                        <td>@twitter</td>
                                                        <td><span class="bi bi-trash3"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                        <td>@twitter</td>
                                                        <td>@</td>
                                                        <td><span class="bi bi-trash3"></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m-2"></div>
                                        <div class="balance-content">
                                            <table class="table table-responsive table-borderless" aria-describedby>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            Balance <span class="mask-balance">333333</span><span
                                                                class="unmasked-balance visually-hidden">******</span>
                                                            &nbsp;<span class="bi bi-eye btn-mask-balance"></span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <h5>
                                                                Total <span class="total-bets">252</span> bets
                                                            </h5>
                                                            <h6>Total <span class="total-bets">504</span></h6>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <button class="btn-track">Track</button>
                                                            <button class="btn-bet-now">Bet Now</button>
                                                        </th>
                                                    </tr>
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
                                        <tbody></tbody>
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
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
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
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
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
    <div class="modal-content visually-hidden">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    <script type="module" src="assets/js/royal5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="assets/libs/slot_master/slot.js"></script>
    <script src="assets/js/tracks-cart.js"></script>
</body>

</html>