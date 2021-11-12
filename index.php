<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpetual Calendar</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: arial;
            color: #0e3742;
            text-align: center;
            font-weight: bolder;
        }

        body {
            margin: 0;
            background-color: #d7f7ef;
        }



        .div span {
            text-shadow: none;
            color: #fff;
            transition: 1s;
        }

        main {
            width: 800px;
            margin: 50px auto;
            background-color: #07252d;
            display: flex;
            flex-wrap: wrap;
            border-radius: 20px;
        }

        header {
            flex-basis: 100%;
            height: 80px;
            border-bottom: 1px solid #d7f7ef;
            display: flex;
            justify-content: center;
            line-height: 75px;
            font-size: 40px;
        }

        header span {
            color: #fff;
        }

        header:hover span {
            animation: animate 1.8s linear infinite;
            animation-delay: calc(0.1s * var(--i));
        }

        @keyframes animate {
            0% {
                text-shadow: none;
            }

            50% {
                text-shadow: 0 0 5px #03bcf4,
                    0 0 10px #03bcf4,
                    0 0 20px #03bcf4,
                    0 0 40px #03bcf4;
            }

            100% {
                text-shadow: none;
            }
        }

        aside {
            flex-basis: 200px;
            height: 600px;
            border-top: 1px solid #d7f7ef;
            border-right: 1px solid #d7f7ef;
        }

        .div1 {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 15px;
        }

        .clock {
            width: 171px;
            height: 171px;
            border-radius: 50%;
            background: rgb(255, 255, 255);
        }

        .hour {
            width: 45px;
            height: 5px;
            position: absolute;
            top: calc(380px + 228px);
            margin-left: 80px;
            transform-origin: 5px 3px;
            background-color: rgb(49, 49, 49);
            transform: rotate(0deg);
            /* animation: s 5s linear infinite; */
        }

        .minute {
            position: absolute;
            width: 70px;
            height: 5px;
            position: absolute;
            top: calc(380px + 228px);
            margin-left: 77px;
            transform-origin: 8px 3px;
            background-color: rgb(155, 154, 154);
            transform: rotate(0deg);
            /* animation: s 10s linear infinite; */
        }

        .second {
            position: absolute;
            width: 90px;
            height: 3px;
            position: absolute;
            top: calc(380px + 229px);
            margin-left: 75px;
            transform-origin: 10px 2px;
            background-color: rgb(122, 122, 122);
            transform: rotate(0deg);
            /* animation: s 2s linear infinite; */
        }

        @keyframes s {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .div {
            height: 100px;
            font-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .link {
            flex-basis: 20%;
            font-size: 18px;
            text-decoration: none;
            transition: 1s;
        }

        .link:hover {
            color: #fff;
            text-shadow: 0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4;
        }

        .font {
            flex-basis: 60%;
            transition: 1s;
        }

        .font:hover {
            text-shadow: 0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4;
        }

        .div2 {
            height: 160px;
            display: flex;
            flex-wrap: wrap;
            padding-top: 20px;
            padding-left: 20px;
            margin-top: 20px;

        }

        .div2 span {
            width: 90px;
            height: 30px;
            color: brown;
            margin-left: 10px;
            line-height: 35px;
        }

        form {
            width: 100%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        form input {
            width: 70px;
            height: 30px;
        }

        section {
            flex-basis: calc(100% - 200px);
            border-top: 1px solid white;
            padding-top: 10px;
            border-left: 1px solid white;
            padding-left: 10px;
        }

        td {
            width: 80px;
            height: 80px;
            /* border: 1px solid #0e3742; */
            border: 1px solid #07252d;
            border-radius: 50%;
            transition: 0.2s;
        }

        .gray a {
            color: #0e3742;
            text-decoration: none;
        }

        .gray:hover a {
            color: #fff;
        }

        .white {
            color: white;
            font-size: 20px;
        }

        td:hover {
            animation: o 1.8s linear infinite;
        }

        @keyframes o {

            0%,
            100% {
                border: 1px solid #07252d;
                text-shadow: none;
                box-shadow:none;
            }

            50% {
                border: 1px solid #fff;
                text-shadow: 0 0 5px #03bcf4,
                    0 0 5px #03bcf4,
                    0 0 5px #03bcf4,
                    0 0 5px #03bcf4;
                box-shadow: 0 0 5px #03bcf4,
                    0 0 5px #03bcf4,
                    0 0 5px #03bcf4,
                    0 0 5px #03bcf4;
            }
        }
    </style>

    <script>
        function clock_cal() {
            let time = new Date();
            let hour = time.getHours();
            let minute = time.getMinutes();
            let second = time.getSeconds();
            document.getElementsByClassName("hour")[0].style.transform = "rotate(" + (hour * 30 + minute / 2 - 90) + "deg)";
            document.getElementsByClassName("minute")[0].style.transform = "rotate(" + (minute * 6 + second / 10 - 90) + "deg)";
            document.getElementsByClassName("second")[0].style.transform = "rotate(" + (second * 6 - 90) + "deg)";
        }
        var clock = setInterval(clock_cal, 1000);

        function check() {
            var ckY = document.getElementsByClassName("input")[0].value;
            var ckM = document.getElementsByClassName("input")[1].value;

            document.getElementsByClassName("hint")[0].innerText = (ckY < 1) ? " input>0" : "";
            document.getElementsByClassName("hint")[1].innerText = (ckM <= 0 || ckM > 12) ? "input:1-12" : "";
            document.getElementsByClassName("input")[2].type = ((ckM <= 12 && ckM >= 1) && ckY > 0) ? "submit" : "button";
        }
    </script>
</head>

<?php
date_default_timezone_set('Asia/Taipei');
if (isset($_GET['month'])) {
    $year =  $_GET['year'];
    $month = $_GET['month'];
    if ($month == 13) {
        $month = 1;
        $year = $year + 1;
    } else if ($month == 0) {
        $month = 12;
        $year = $year - 1;
    }
    $da = $year . "-" . $month . "-1";
} else {
    $month = date("m");
    $year = date("Y");
    $da = date("Y-m-1");
}

?>



<body>
    <main>
        <header>
            <span style="--i:1;">P</span>
            <span style="--i:2;">e</span>
            <span style="--i:3;">r</span>
            <span style="--i:4;">p</span>
            <span style="--i:5;">e</span>
            <span style="--i:6;">t</span>
            <span style="--i:7;">u</span>
            <span style="--i:8;">a</span>
            <span style="--i:9;">l</span>
            <span style="--i:10;margin-left: 10px;">C</span>
            <span style="--i:11;">a</span>
            <span style="--i:12;">l</span>
            <span style="--i:13;">e</span>
            <span style="--i:14;">n</span>
            <span style="--i:15;">d</span>
            <span style="--i:16;">a</span>
            <span style="--i:17;">r</span>
        </header>
        <aside>



            <div class="div">
                <a href="index.php?year=<?= ($year - 1) ?>&month=<?= $month ?>" class="link">
                    < </a>
                        <span class="font"><?= $year ?></span>
                        <a href="index.php?year=<?= ($year + 1) ?>&month=<?= $month ?>" class="link">></a>
            </div>
            <div class="div">
                <a href="index.php?year=<?= $year ?>&month=<?= ($month - 1) ?>" class="link">
                    < </a>
                        <span class="font"><?= $month ?></span>
                        <a href="index.php?year=<?= $year ?>&month=<?= ($month + 1) ?>" class="link">></a>
            </div>
            <div class="div2">
                <form action="">
                    <input type="number" name="year" value="<?= $year ?>" class="input" onkeyup="check()" onclick="check()"><span class="hint"></span>
                    <input type="number" name="month" value="<?= $month ?>" class="input" onkeyup="check()" onclick="check()"><span class="hint"></span>
                    <input type="submit" value="submit" class="input">
                </form>
            </div>
            <div class="div1">
                <div class="clock">
                    <div class="hour"></div>
                    <div class="minute"></div>
                    <div class="second"></div>
                </div>
            </div>
        </aside>
        <section>
            <?php

            $month_day = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            if (date("L", strtotime($da)) == 1) {
                $month_day[1] = 29;
            }
            $p = $month_day[(date("m", strtotime($da)) - 1)] + date("w", strtotime($da));

            $p = ($p - $p % 7) / 7;
            $zxc = ["Sun", "Mon", "Tues", "Wed", "Thur", "Fri", "Sat"];
            echo "<table>";
            echo "<tr>";
            for ($i = 0; $i < 7; $i++) {
                echo "<td class = 'white'>" . $zxc[$i];
                echo "</td>";
            }
            echo "</tr>";

            $count = 1;
            for ($i = 0; $i < 6; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 7; $j++) {
                    echo "<td";
                    if ((7 * $i + $j) < date("w", strtotime($da))) {
                        echo " class ='gray'> " . "<a href='index.php?year=" . $year . "&month=" . ($month - 1) . "'>";
                        $lastMonth = (($month - 1) == 0) ? 12 : (date("n", strtotime($da)) - 1);
                        echo $lastMonth;
                        echo " / ";
                        echo ($month_day[($lastMonth-1)] - date("w", strtotime($da)) + $j + 1);
                        echo "</a>";
                    } else {
                        if (($i * 7 + $j - date("w", strtotime($da)) + 1) <= $month_day[(date("m", strtotime($da)) - 1)]) {

                            echo " class= 'white'>" .  ($i * 7 + $j - date("w", strtotime($da)) + 1);
                        } else {
                            echo " class ='gray'>" . "<a href='index.php?year=" . $year . "&month=" . ($month + 1) . "'>";
                            echo (((date("n", strtotime($da)) + 1) % 12) == 0) ? 12 : ((date("n", strtotime($da)) + 1) % 12);
                            echo " / " . $count . "</a>";
                            $count++;
                        }
                    }


                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </section>
    </main>
</body>
<script>
    clock_cal();
</script>


</html>