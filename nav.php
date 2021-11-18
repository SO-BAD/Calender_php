<style>
    .menu_back {
        width: 100%;
        height: 60px;
        position: fixed;
        top: 0px;
        background-color: #07252d;
        display: flex;
        justify-content: center;
    }

    .menu {
        width: 1200px;
        display: flex;
        color: #0e3742;
        text-align: center;
        font-weight: bolder;
    }

    .menu a {
        width: 200px;
        height: 40px;
        margin-left: 20px;
        margin-top: 10px;
        background-color: #d7f7ef;
        border-radius: 5px;
        font-size: 30px;
        text-decoration: none;
        font-weight: bolder;
        line-height: 1.3;
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
</style>
<div class="menu_back">
    <div class="menu">
        <a href="index.php?year=<?= ($year) ?>&month=<?= ($month) ?>">Calendar</a>
        <a href="year.php?year=<?= ($year) ?>">Almanac</a>
    </div>
</div>