<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <script src="../jquery.js"></script>
    <script src="../validace.js"></script>
    <script src="../js/stredUp.js"></script>
    <script src="../js/upgrady.js"></script>
    <script src="../js/nactiScore.js"></script>
    <style>
        input[type=text], input[type=password] {
            border: 2px solid black;
            border-radius: 4px;
            height: 20px;
            width: 180px;
            font-size: 18px;
        }

        input[type=submit] {
            background-color: rgb(0, 255, 255);
            border: 2px solid black;
            padding: 3.5px 5px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div>
    <div id="main">
        <div id="hlavicka">
            <div id="skore">0</div>
            <div id="hps">0</div>
        </div>
        <div id="paticka">
            <div id="computer">
                <img src="../obrazky/PC.png">
            </div>
        </div>
    </div>
    <div id="upgrady">
        <div class="upgrade" id="prvni">
            <span class="obr"><img src="../obrazky/periferie.png"></span>
            <div class="textik">
                <span class="name">Periferie</span><br/>
                <span id="pricePrvniho">Cena: 20</span><br/>
                <span id="numPrvniho">Počet: 0</span>
            </div>
        </div>

        <div class="upgrade" id="druhy">
            <span class="obr"><img src="../obrazky/case.png"></span>
            <div class="textik">
                <span class="name">Skříň</span><br/>
                <span id="priceDruhyho">Cena: 100</span><br/>
                <span id="numDruhyho">Počet: 0</span>
            </div>
        </div>

        <div class="upgrade" id="treti">
            <span class="obr"><img src="../obrazky/zaklad.png"></span>
            <div class="textik">
                <span class="name">Základní deska</span><br/>
                <span id="priceTretiho">Cena: 1,100</span><br/>
                <span id="numTretiho">Počet: 0</span>
            </div>
        </div>

        <div class="upgrade schovej" id="ctvrty">
            <span class="obr"><img src="../obrazky/procesor.png"></span>
            <div class="textik">
                <span class="name">Procesor</span><br/>
                <span id="priceCtvrtyho">Cena: 12,000</span><br/>
                <span id="numCtvrtyho">Počet: 0</span>
            </div>
        </div>

        <div class="upgrade schovej" id="paty">
            <span class="obr"><img src="../obrazky/grafika.png"></span>
            <div class="textik">
                <span class="name">Grafická karta</span><br/>
                <span id="pricePatyho">Cena: 130,000</span><br/>
                <span id="numPatyho">Počet: 0</span>
            </div>
        </div>

        <div class="upgrade schovej" id="sesty">
            <span class="obr"><img src="../obrazky/ram.png"></span>
            <div class="textik">
                <span class="name">RAM</span><br/>
                <span id="priceSestyho">Cena: 1,400,000</span><br/>
                <span id="numSestyho">Počet: 0</span>
            </div>
        </div>

        <div class="upgrade schovej" id="sedmy">
            <span class="obr"><img src="../obrazky/disk.png"></span>
            <div class="textik">
                <span class="name">Disk</span><br/>
                <span id="priceSedmyho">Cena: 20,000,000</span><br/>
                <span id="numSedmyho">Počet: 0</span>
            </div>
        </div>

    </div>
    <div id="stred">
        <div id="horni">
            <div class="castMenu" id="hZeb">
                Žebříčky
            </div>
            <div class="castMenu" id="hLog">
                Login
            </div>
            <div class="castMenu" id="hUp" style="background-color: rgb(0, 255, 255);">
                Upgrady
            </div>
        </div>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<div class='chybka'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message']);
        }
        ?>
        <div id="mainCas">

            <div class="castecek, schovej" id="zebricky">
                <div id="skoreajmeno">
                    <div id="Sjmeno">Jmeno</div>
                    <div id="Sskore">Skóre ↑</div>
                </div>
                <div id="Shodnoty"><?php include 'zebrik.php'; ?></div>
            </div>
            <div class="castecek, schovej" id="login">
                <b>Login </b>
                <div id="log_formicek">
                    <form action="login.php" method="post">
                        <label for="log_jmeno">Jméno: </label>
                        <input type="text" name="log_jmeno">
                        <label for="log_heslo">Heslo: </label>
                        <input type="password" name="log_heslo">
                        <input type="submit" name="log_tlacitko" value="Přihlásit se!">
                    </form>
                </div>
                <br><br>
                <b>Register </b>
                <div id="reg_formicek">
                    <form action="register.php" method="post" id="regs_formicek">
                        <label for="reg_jmeno">Jméno: </label>
                        <input type="text" name="reg_jmeno"><br>
                        <label for="reg_heslo">Heslo: </label>
                        <input type="password" name="reg_heslo"><br>
                        <label for="reg_heslo2">Potvrzení hesla: </label>
                        <input type="password" name="reg_heslo2"><br>
                        <input type="submit" name="reg_tlacitko" value="Zaregistrovat se!">
                    </form>

                </div>
            </div>
            <div class="castecek" id="upgrades">
                <div class="sUpgrade schovej" id="x1">
                    <span class="obrzek"><img src="../obrazky/monitor.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x2">
                    <span class="obrzek"><img src="../obrazky/sluchatka.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x6">
                    <span class="obrzek"><img src="../obrazky/china.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x3">
                    <span class="obrzek"><img src="../obrazky/klavesnice.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x7">
                    <span class="obrzek"><img src="../obrazky/trust.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x4">
                    <span class="obrzek"><img src="../obrazky/mys.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x5">
                    <span class="obrzek"><img src="../obrazky/mikrofon.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x8">
                    <span class="obrzek"><img src="../obrazky/ASUS.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x9">
                    <span class="obrzek"><img src="../obrazky/MSI.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x10">
                    <span class="obrzek"><img src="../obrazky/i3.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x11">
                    <span class="obrzek"><img src="../obrazky/i5.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x12">
                    <span class="obrzek"><img src="../obrazky/AMD.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x13">
                    <span class="obrzek"><img src="../obrazky/NVIDIA.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x14">
                    <span class="obrzek"><img src="../obrazky/512.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x15">
                    <span class="obrzek"><img src="../obrazky/4.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x16">
                    <span class="obrzek"><img src="../obrazky/hdd.png"></span>
                </div>
                <div class="sUpgrade schovej" id="x17">
                    <span class="obrzek"><img src="../obrazky/ssd.png"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var skoreAktualne = 0,
        skoreCelkove = 0,
        pomocnaKHps = 0,

        hps = $("#hps"),
        skore = $("#skore"),

        pocetPrvnichUp = 0,
        pocetDruhychUp = 0,
        pocetTretichUp = 0,
        pocetCtvrtychUp = 0,
        pocetPatychUp = 0,
        pocetSestychUp = 0,
        pocetSedmychUp = 0,

        cenaPrvniho = 20,
        cenaDruhyho = 100,
        cenaTretiho = 1100,
        cenaCtvrtyho = 12000,
        cenaPatyho = 130000,
        cenaSestyho = 1400000,
        cenaSedmyho = 20000000,

        x1up = 0.1,
        x2up = 1,
        x3up = 8,
        x4up = 47,
        x5up = 260,
        x6up = 1400,
        x7up = 7800,
        x12up = 1,

        x1upKup = false,
        x2upKup = false,
        x3upKup = false,
        x4upKup = false,
        x5upKup = false,
        x6upKup = false,
        x7upKup = false,
        x8upKup = false,
        x9upKup = false,
        x10upKup = false,
        x11upKup = false,
        x12upKup = false,
        x13upKup = false,
        x14upKup = false,
        x15upKup = false,
        x16upKup = false,
        x17upKup = false;
        
    nactiSkore();
    $("#ctvrty").css("opacity", "0");
    $("#paty").css("opacity", "0");
    $("#sesty").css("opacity", "0");
    $("#sedmy").css("opacity", "0");

    function oddal() {
        $("#computer img").css("width", '55%');
    }

    var iner;
    $("#computer").click(function () {
        skoreAktualne += x12up;
        skoreCelkove += x12up;
        nactiSkore();
        $("#computer img").css("width", '60%');
        if (iner) window.clearTimeout(iner)
        iner = setTimeout(oddal, 100);
    });

    $("#hZeb").click(function () {
        $("#hLog").css("background-color", "white");
        $("#hUp").css("background-color", "white");
        $("#hZeb").css("background-color", "rgb(0,255,255)");
        $("#login").addClass("schovej");
        $("#upgrades").addClass("schovej");
        $("#zebricky").removeClass("schovej");
    });

    $("#hUp").click(function () {
        $("#hLog").css("background-color", "white");
        $("#hUp").css("background-color", "rgb(0, 255, 255)");
        $("#hZeb").css("background-color", "white");
        $("#login").addClass("schovej");
        $("#upgrades").removeClass("schovej");
        $("#zebricky").addClass("schovej");
    });

    $("#hLog").click(function () {
        $("#hLog").css("background-color", "rgb(0, 255, 255)");
        $("#hUp").css("background-color", "white");
        $("#hZeb").css("background-color", "white");
        $("#login").removeClass("schovej");
        $("#upgrades").addClass("schovej");
        $("#zebricky").addClass("schovej");
    });
    $("#regs_formicek").validate({
        errorClass: "chyba",
        rules: {
            reg_jmeno: {
                required: true,
                minlength: 4
            },
            reg_heslo: {
                required: true,
                minlength: 4,
                maxlength: 32
            },
            reg_heslo2: {
                equalTo: "input[name=reg_heslo]"
            }
        },
        messages: {
            jmeno: {
                required: "Jméno je povinné",
                minlength: "Jméno musí obsahovat minimálně 4 znaky"
            }
        }
    });

    function autoClicker2() {
        skoreAktualne += pomocnaKHps / 100;
        skoreCelkove += pomocnaKHps / 100;
        nactiSkore();
    };
    var cas;

    function upgrade(cena, rychlost) {
        skoreAktualne -= cena;
        pomocnaKHps += rychlost;
        nactiSkore();
        hps.text(Math.round(pomocnaKHps * 10) / 10 + " za sekundu");
        if (cas) window.clearTimeout(cas)
        cas = setInterval(autoClicker2, 10);
    };
    $("#hlavicka").click(function () {
        skoreAktualne += 9999999999999;
        skoreCelkove += 9999999999999;
        nactiSkore();
    });
    var pomocnna = false;
    var pomocnna2 = false;
    $("#Sjmeno").click(function () {
        pomocnna = true;
        pomocnna2 = !pomocnna2;
        pomocnna2 ? $("#Sjmeno").text("Jméno ↓") : $("#Sjmeno").text("Jméno ↑");
        $("#Sskore").text("Skóre");
        $.post("zebrik.php", {
                "pomocnna": pomocnna,
                "pomocnna2": pomocnna2
            },
            function (h) {
                $("#Shodnoty").html(h);
            })
    });
    $("#Sskore").click(function () {
        pomocnna = false;
        pomocnna2 = !pomocnna2;
        pomocnna2 ? $("#Sskore").text("Skóre ↓") : $("#Sskore").text("Skóre ↑");
        $("#Sjmeno").text("Jméno");
        $.post("zebrik.php", {
                "pomocnna": pomocnna,
                "pomocnna2": pomocnna2
            },
            function (h) {
                $("#Shodnoty").html(h);
            })
    });
    $.post("zebrik.php", {
            "pomocnna": pomocnna,
            "pomocnna2": pomocnna2
        },
        function (h) {
            $("#Shodnoty").html(h);
        })
</script>