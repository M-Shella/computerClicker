<?php session_start();?> 
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <script src="../jquery.js"></script>
    <script src="../js/stredUp.js"></script>
    <script src="../js/upgrady.js"></script>
    <script src="../js/nactiScore.js"></script>
    <script src="../js/save.js"></script>
    <style>
        input[type=text]{
            border: 2px solid black;
            border-radius: 4px;
            height: 25px;
            width:180px;
            font-size: 15px;
        }
        input[type=button] {
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
                <div>Cena:  <span id="pricePrvniho">20</span></div>
                <div>Počet: <span id="numPrvniho">0</span></div>
            </div>
        </div>
        
        <div class="upgrade" id="druhy">
            <span class="obr"><img src="../obrazky/case.png"></span>
            <div class="textik">
                <span class="name">Skříň</span><br/>
                <div>Cena:  <span id="priceDruhyho">100</span></div>
                <div>Počet: <span id="numDruhyho">0</span></div>
            </div>
        </div> 

        <div class="upgrade" id="treti">
            <span class="obr"><img src="../obrazky/zaklad.png"></span>
            <div class="textik">
                <span class="name">Základní deska</span><br/>
               <div>Cena:  <span id="priceTretiho">1,100</span></div>
               <div>Počet: <span id="numTretiho">0</span></div>
            </div>
        </div> 

        <div class="upgrade schovej" id="ctvrty">
            <span class="obr"><img src="../obrazky/procesor.png"></span>
            <div class="textik">
                <span class="name">Procesor</span><br/>
                <div>Cena:  <span id="priceCtvrtyho">12,000</span></div>
                <div>Počet: <span id="numCtvrtyho">0</span></div>
            </div>
        </div> 

        <div class="upgrade schovej" id="paty">
            <span class="obr"><img src="../obrazky/grafika.png"></span>
            <div class="textik">
                <span class="name">Grafická karta</span><br/>
                <div>Cena:  <span id="pricePatyho">130,000</span></div>
                <div>Počet: <span id="numPatyho">0</span></div>
            </div>
        </div> 

        <div class="upgrade schovej" id="sesty">
            <span class="obr"><img src="../obrazky/ram.png"></span>
            <div class="textik">
                <span class="name">RAM</span><br/>
                <div>Cena:  <span id="priceSestyho">1,400,000</span></div>
                <div>Počet: <span id="numSestyho">0</span></div>
            </div>
        </div> 

        <div class="upgrade schovej" id="sedmy">
            <span class="obr"><img src="../obrazky/disk.png"></span>
            <div class="textik">
                <span class="name">Disk</span><br/>
                <div>Cena:  <span id="priceSedmyho">20,000,000</span></div>
                <div>Počet: <span id="numSedmyho">0</span></div>
            </div>
        </div> 

    </div>
    <div id="stred">
        <div id="horni">
            <div class="castMenu" id="hZeb">
                Žebříčky
            </div>
            <div class="castMenu" id="hLog">
                <?php echo $_SESSION['username'];?> 
            </div>
            <div class="castMenu" id="hUp" style="background-color: rgb(0, 255, 255);">
                Upgrades
            </div>
        </div>
        <div id="mainCas">
            <div class="castecek, schovej" id="zebricky">
                <div id="skoreajmeno">
                    <div id="Sjmeno">Jmeno</div>
                    <div id="Sskore">Skóre ↑</div><br>
                </div>
                <div id="Shodnoty"><?php include 'zebrik.php'; ?></div>
            </div>
            <div class="castecek, schovej" id="login">
                <div id="save">
                    SAVE
                </div><br><br>
                <input type="text" class="schovej" id="rem_jmeno" name="rem_jmeno">
                <input type="button" class="schovej" id="rem_tlacitko" name="rem_tlacitko" value="Odstranit!">
                <div><a href="logout.php">Logout</a></div>
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

    <script>
        var skoreAktualne =  <?php echo $_SESSION['skoreAktualne'];?>,
        skoreCelkove = <?php echo $_SESSION['skoreCelkove'];?>,
        pomocnaKHps = <?php echo $_SESSION['pomocnaKHps'];?>,
        hps = $("#hps"),
        skore = $("#skore"),

        x1upKup  = <?php echo $_SESSION['x1upKup']; ?>,
        x2upKup  = <?php echo $_SESSION['x2upKup']; ?>,
        x3upKup  = <?php echo $_SESSION['x3upKup']; ?>,
        x4upKup  = <?php echo $_SESSION['x4upKup']; ?>,
        x5upKup  = <?php echo $_SESSION['x5upKup']; ?>,
        x6upKup  = <?php echo $_SESSION['x6upKup']; ?>,
        x7upKup  = <?php echo $_SESSION['x7upKup']; ?>,
        x8upKup  = <?php echo $_SESSION['x8upKup']; ?>,
        x9upKup  = <?php echo $_SESSION['x9upKup']; ?>,
        x10upKup = <?php echo $_SESSION['x10upKup'];?>,
        x11upKup = <?php echo $_SESSION['x11upKup'];?>,
        x12upKup = <?php echo $_SESSION['x12upKup'];?>,
        x13upKup = <?php echo $_SESSION['x13upKup'];?>,
        x14upKup = <?php echo $_SESSION['x14upKup'];?>,
        x15upKup = <?php echo $_SESSION['x15upKup'];?>,
        x16upKup = <?php echo $_SESSION['x16upKup'];?>,
        x17upKup = <?php echo $_SESSION['x17upKup'];?>,
        x1up, x2up, x3up, x4up, x5up, x6up, x7up, x12up,

        pocetPrvnichUp  = parseInt(<?php echo $_SESSION['poc1up'];?>),
        pocetDruhychUp  = parseInt(<?php echo $_SESSION['poc2up'];?>),
        pocetTretichUp  = parseInt(<?php echo $_SESSION['poc3up'];?>),
        pocetCtvrtychUp = parseInt(<?php echo $_SESSION['poc4up'];?>),
        pocetPatychUp   = parseInt(<?php echo $_SESSION['poc5up'];?>),
        pocetSestychUp  = parseInt(<?php echo $_SESSION['poc6up'];?>),
        pocetSedmychUp  = parseInt(<?php echo $_SESSION['poc7up'];?>),

        cenaPrvniho  = Math.floor(20*Math.pow(1.15, pocetPrvnichUp)),
        cenaDruhyho  = Math.floor(100*Math.pow(1.15, pocetDruhychUp)),
        cenaTretiho  = Math.floor(1100*Math.pow(1.15, pocetTretichUp)),
        cenaCtvrtyho = Math.floor(12000*Math.pow(1.15, pocetCtvrtychUp)),
        cenaPatyho   = Math.floor(130000*Math.pow(1.15, pocetPatychUp)),
        cenaSestyho  = Math.floor(1400000*Math.pow(1.15, pocetSestychUp)),
        cenaSedmyho  = Math.floor(20000000*Math.pow(1.15, pocetSedmychUp));
        
        $("#pricePrvniho").text(cenaPrvniho);
        $("#numPrvniho").text(pocetPrvnichUp);

        $("#priceDruhyho").text(cenaDruhyho);
        $("#numDruhyho").text(pocetDruhychUp);

        $("#priceTretiho").text(cenaTretiho);
        $("#numTretiho").text(pocetTretichUp);

        $("#priceCtvrtyho").text(cenaCtvrtyho);
        $("#numCtvrtyho").text(pocetCtvrtychUp);

        $("#pricePatyho").text(cenaPatyho);
        $("#numPatyho").text(pocetPatychUp);

        $("#priceSestyho").text(cenaSestyho);
        $("#numSestyho").text(pocetSestychUp);

        $("#priceSedmyho").text(cenaSedmyho);
        $("#numSedmyho").text(pocetSedmychUp);

        

        if(x5upKup){
            x1up = 3.2;
            x12up = 32;
        }else if(x4upKup){
            x1up = 1.6;
            x12up = 16;            
        }else if(x3upKup){
            x1up = 0.8;
            x12up = 8;         
        }else if(x2upKup){
            x1up = 0.4;
            x12up = 4;   
        }else if (x1upKup){
            x1up = 0.2;
            x12up = 2;
        }else{
            x1up = 0.1;
            x12up = 1;
        }

        if(x7upKup) x2up=4;
        else if (x6upKup) x2up=2;  
        else x2up=1;

        if (x8upKup) x3up=32;
        else if (x7upKup) x3up=16;
        else x3up=8;

        if(x11upKup) x4up=47*4;
        else if (x10upKup) x4up=47*2; 
        else x4up=47;

        if(x13upKup) x5up=260*4;
        else if (x12upKup) x5up=260*2;
        else x5up=260;

        if(x15upKup) x6up=1400*4;  
        else if (x14upKup) x6up=1400*2;
        else x6up=1400;

        if(x17upKup) x7up=7800*4;
        else if (x16upKup) x7up=7800*2;
        else x7up=7800;
        
        nactiSkore();
        function oddal(){
            $("#computer img").css("width", '55%');
        }
        var iner;
        $("#computer").click(function(){
            skoreAktualne+=x12up;
            skoreCelkove+=x12up;
            nactiSkore();
            $("#computer img").css("width", '60%');
            if (iner) window.clearTimeout(iner)
            iner = setTimeout(oddal, 100);
            
        });    

        $("#hZeb").click(function(){
            $("#hLog").css("background-color", "white");
            $("#hUp").css("background-color", "white");
            $("#hZeb").css("background-color", "rgb(0, 255, 255)");
            $("#login").addClass("schovej");
            $("#upgrades").addClass("schovej");
            $("#zebricky").removeClass("schovej");
        });

        $("#hUp").click(function(){
            $("#hLog").css("background-color", "white");
            $("#hUp").css("background-color", "rgb(0, 255, 255)");
            $("#hZeb").css("background-color", "white");
            $("#login").addClass("schovej");
            $("#upgrades").removeClass("schovej");
            $("#zebricky").addClass("schovej");
        });

        $("#hLog").click(function(){
            $("#hLog").css("background-color", "rgb(0, 255, 255)");
            $("#hUp").css("background-color", "white");
            $("#hZeb").css("background-color", "white");
            $("#login").removeClass("schovej");
            $("#upgrades").addClass("schovej");
            $("#zebricky").addClass("schovej");
        });

        function autoClicker2(){
            skoreAktualne+=pomocnaKHps/100;
            skoreCelkove+=pomocnaKHps/100;
            $('#'+'<?php echo $_SESSION['id']; ?>').text(Math.round(skoreCelkove));
            nactiSkore();
        };
        function deset(){
            $("#save").css("background-color", "rgb(0, 255, 255)");
        };
        var cas;
        function upgrade(cena, rychlost){
            skoreAktualne-=cena;
            pomocnaKHps += rychlost;
            nactiSkore();
            hps.text(Math.round(pomocnaKHps * 10) / 10 + " za sekundu");
            if (cas) window.clearTimeout(cas)
            cas = setInterval(autoClicker2, 10);
           
        };
        
        function autoSave(){
            savenout();
        }
        $("#hlavicka").click(function(){
            skoreAktualne += 9999999999999;
            skoreCelkove += 9999999999999;
            nactiSkore();
        });
        $("#save").click(function(){
            if($("#save").css("background-color")!='rgb(255, 0, 0)'){
                $("#save").css("background-color", 'red');
                savenout();
                window.setTimeout(deset, 10000);
            }
        });
        var pomocnna = false;
        var pomocnna2 = false;
        $("#rem_tlacitko").click(function(){
            $.post("odstranit.php",{
                "jmeno": $("#rem_jmeno").val(),
                "tlacitko": $("#rem_tlacitko").val()
                },
                function(h){
                    console.log(h);
                })
                $("#rem_jmeno").val("");
        });
        $("#Sjmeno").click(function(){
            pomocnna = true;
            pomocnna2 = !pomocnna2;
            pomocnna2 ? $("#Sjmeno").text("Jméno ↓") : $("#Sjmeno").text("Jméno ↑");
            $("#Sskore").text("Skóre");
            $.post("zebrik.php",{
                "pomocnna": pomocnna,
                "pomocnna2": pomocnna2
                },
                function(h){
                    $("#Shodnoty").html(h);
                })
        });
        $("#Sskore").click(function(){
            pomocnna = false;
            pomocnna2 = !pomocnna2;
            pomocnna2 ? $("#Sskore").text("Skóre ↓") : $("#Sskore").text("Skóre ↑");
            $("#Sjmeno").text("Jméno");
            $.post("zebrik.php",{
                "pomocnna": pomocnna,
                "pomocnna2": pomocnna2
                },
                function(h){
                    $("#Shodnoty").html(h);
                })
        });
        $.post("zebrik.php",{
            "pomocnna": pomocnna,
            "pomocnna2": pomocnna2
            },
            function(h){
                $("#Shodnoty").html(h);
        });
        if("<?php echo $_SESSION['username'];?>" == "ShellaM"){
            $("#rem_jmeno").removeClass("schovej");
            $("#rem_tlacitko").removeClass("schovej");
        }

        if(pocetPrvnichUp>=1  && !x1upKup)  $("#x1").removeClass("schovej");
        if(pocetPrvnichUp>=1  && !x2upKup)  $("#x2").removeClass("schovej");
        if(pocetPrvnichUp>=10 && !x3upKup)  $("#x3").removeClass("schovej");
        if(pocetPrvnichUp>=25 && !x4upKup)  $("#x4").removeClass("schovej");
        if(pocetPrvnichUp>=50 && !x5upKup)  $("#x5").removeClass("schovej");
        if(pocetDruhychUp>=1  && !x6upKup)  $("#x6").removeClass("schovej");
        if(pocetDruhychUp>=5  && !x7upKup)  $("#x7").removeClass("schovej");
        if(pocetTretichUp>=1  && !x8upKup)  $("#x8").removeClass("schovej");
        if(pocetTretichUp>=5  && !x9upKup)  $("#x9").removeClass("schovej");
        if(pocetCtvrtychUp>=1 && !x10upKup) $("#x10").removeClass("schovej");
        if(pocetCtvrtychUp>=5 && !x11upKup) $("#x11").removeClass("schovej");
        if(pocetPatychUp>=1   && !x12upKup) $("#x12").removeClass("schovej");
        if(pocetPatychUp>=5   && !x13upKup) $("#x13").removeClass("schovej");
        if(pocetSestychUp>=1  && !x14upKup) $("#x14").removeClass("schovej");
        if(pocetSestychUp>=5  && !x15upKup) $("#x15").removeClass("schovej");
        if(pocetSedmychUp>=1  && !x16upKup) $("#x16").removeClass("schovej");
        if(pocetSedmychUp>=5  && !x17upKup) $("#x17").removeClass("schovej");
        hps.text(Math.round(pomocnaKHps) + " za sekundu");
        cas = setInterval(autoClicker2, 10);
        cas2 = setInterval(autoSave, 60000);
    </script>   