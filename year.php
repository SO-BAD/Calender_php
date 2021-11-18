<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: arial;
        }

        body {
            margin: 0;
            background-color: #d7f7ef;
        }

        .topDiv {
            width: 100%;
            height: 80px;
            position: fixed;
            top: 60px;
        }

        .top {
            width: 1010px;
            height: 80px;
            background: #d7f7ef;
            border-bottom: 5px solid #666;
            color: white;
            font-size: 60px;
            margin: auto;
            animation: s 5s linear infinite;
            text-shadow: 0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4;
            display: flex;
            justify-content: center;
        }

        .top>span {
            width: 200px;
            height: 100%;
            text-align: center;
        }

        form {
            width: 160px;
            height: 100%;
            margin-left: 100px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        form>input:nth-child(1) {
            width: 100px;
            height: 20px
        }

        form>input:nth-child(2) {
            width: 50px;
            height: 20px;
            margin-left: 10px;
        }

        form span {
            margin-top: -30px;
            flex-basis: 90%;
            font-size: 20px;
            height: 20px;
            color: crimson;
            text-shadow: none;
        }

        .top a {
            color: #c1e8df;
            transition: 0.8s;
            text-shadow: none;
        }

        .top a:hover {
            color: white;
            text-shadow: 0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4;
        }


        main {
            margin: 137px auto;
            width: 1000px;
            height: 1500px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-content: flex-start;
        }

        .monthDiv {
            margin-top: 3px;
            width: 330px;
            height: 380px;
            background-color: #07252d;
            border-radius: 10px;
        }

        .monthDiv:hover {
            box-shadow: 0 0 10px #ccc;
        }

        a {
            text-decoration: none;
        }

        tr:nth-child(1)>td {
            font-size: 26px;
            color: white;
        }

        td {
            width: 45px;
            height: 45px;
            text-align: center;
            color: white;
            font-weight: bolder;
        }

        table:hover {
            animation: oo 1.8s linear infinite;
        }

        @keyframes oo {

            0%,
            100% {
                text-shadow: none;
            }

            50% {
                text-shadow: 0 0 5px #03bcf4,
                    0 0 5px #03bcf4,
                    0 0 5px #03bcf4,
                    0 0 5px #03bcf4;
            }
        }

        .menu a:nth-child(2) {
            color: white;
            text-shadow: 0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4,
                0 0 5px #03bcf4;
        }

        .menu a:nth-child(1) {
            color: #0e3742;
        }

        .menu a:nth-child(1):hover {
            animation: oo 1.8s linear infinite;
        }
    </style>
    <script>
        function check() {
            if (document.getElementsByClassName("input")[0].value < 1) {
                document.getElementsByClassName("alert")[0].innerText = "input > 0";
                document.getElementsByClassName("submit")[0].type = "button";
            } else {
                document.getElementsByClassName("alert")[0].innerText = "";
                document.getElementsByClassName("submit")[0].type = "submit";
            }
        }
    </script>
</head>
<?php
if (isset($_GET['year']) && $_GET['year'] > 0) {
    $year = $_GET['year'];
} else {
    $year = date("Y");
}
$month = 1;
$month_day = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
$month_name = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
?>

<body>
    <?php
    include "nav.php";
    ?>
    <div class="topDiv">
        <div class="top">
            <a href="year.php?year=<?= ($year - 1) ?>">
                < </a>
                    &ensp;<span><?= ($year) ?></span> &ensp;
                    <a href="year.php?year=<?= ($year + 1) ?>">></a>
                    <form action="./year.php">
                        <input type="number" value="<?= ($year) ?>" name="year" class="input" onkeyup="check()" onclick="check()">
                        <input type="submit" value="submit" class="submit">
                        <span class="alert"></span>
                    </form>
        </div>
    </div>
    <main>

        <?php
        for ($i = 0; $i < 12; $i++) {
            $da = $year . "-" . $month . "-1";
            if (date("L", strtotime($da)) == 1) {
                $month_day[1] = 29;
            }
            $startDiv = date("w", strtotime($da));
            echo "<div class = 'monthDiv'><a href='./index.php?year=$year&month=$month'><table>";
            for ($x = 0; $x < 8; $x++) {
                echo "<tr>";
                if ($x == 0) {
                    echo "<td colspan ='7'>" . $month_name[($month - 1)] . "</td>";
                } else if ($x == 1) {
                    echo "<td>Sun</td>";
                    echo "<td>Mon</td>";
                    echo "<td>Thus</td>";
                    echo "<td>Wed</td>";
                    echo "<td>Tues</td>";
                    echo "<td>Fri</td>";
                    echo "<td>Sat</td>";
                } else {
                    for ($y = 0; $y < 7; $y++) {
                        if ((($x - 2) * 7 + $y) >= $startDiv && (($x - 2) * 7 + $y) < $startDiv + $month_day[($month - 1)]) {
                            echo "<td>" . (($x - 2) * 7 + $y - $startDiv + 1) . "</td>";
                        } else {
                            echo "<td></td>";
                        }
                    }
                }
                echo "</tr>";
            }
            echo "</table></a></div>";
            $month++;
        }
        ?>
    </main>
</body>

</html>