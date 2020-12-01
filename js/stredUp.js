$(document).ready(function() {
    $("#x1").click(function(){
        if(skoreAktualne>=100){
            upgrade(100,pocetPrvnichUp/10);
            x1up*=2;
            x12up*=2;
            x1upKup = true;
            $("#x1").addClass("schovej");
        }
    });
    $("#x2").click(function(){
        if(skoreAktualne>=500){
            upgrade(500,pocetPrvnichUp/5);
            x1up*=2;
            x12up*=2;
            x2upKup = true;
            $("#x2").addClass("schovej");
        }
    });
    $("#x3").click(function(){
        if(skoreAktualne>=10000){
            upgrade(10000,pocetPrvnichUp/2.5);
            x1up*=2;
            x12up*=2;
            x3upKup = true;
            $("#x3").addClass("schovej");
        }
    });
    $("#x4").click(function(){
        if(skoreAktualne>=50000){
            upgrade(50000,pocetPrvnichUp/1.25);
            x1up*=2;
            x12up*=2;
            x4upKup = true;
            $("#x4").addClass("schovej");
        }
    });
    $("#x5").click(function(){
        if(skoreAktualne>=100000){
            upgrade(100000,pocetPrvnichUp/(1.25/2));
            x1up*=2;
            x12up*=2;
            x5upKup = true;
            $("#x5").addClass("schovej");
        }
    });
    $("#x6").click(function(){
        if(skoreAktualne>=1000){
            upgrade(1000,pocetDruhychUp);
            x2up*=2;
            x6upKup = true;
            $("#x6").addClass("schovej");
        }
    });
    $("#x7").click(function(){
        if(skoreAktualne>=5000){
            upgrade(5000,pocetDruhychUp*2);
            x2up*=2;
            x7upKup = true;
            $("#x7").addClass("schovej");
        }
    });
    $("#x8").click(function(){
        if(skoreAktualne>=11000){
            upgrade(11000,pocetTretichUp*8);
            x3up*=2;
            x8upKup = true;
            $("#x8").addClass("schovej");
        }
    });
    $("#x9").click(function(){
        if(skoreAktualne>=55000){
            upgrade(55000,pocetTretichUp*8*2);
            x3up*=2;
            x9upKup = true;
            $("#x9").addClass("schovej");
        }
    });
    $("#x10").click(function(){
        if(skoreAktualne>=120000){
            upgrade(120000,pocetCtvrtychUp*47);
            x4up*=2;
            x10upKup = true;
            $("#x10").addClass("schovej");
        }
    });
    $("#x11").click(function(){
        if(skoreAktualne>=600000){
            upgrade(600000,pocetCtvrtychUp*47*2);
            x4up*=2;
            x11upKup = true;
            $("#x11").addClass("schovej");
        }
    });
    $("#x12").click(function(){
        if(skoreAktualne>=1300000){
            upgrade(1300000,pocetPatychUp*260);
            x5up*=2;
            x12upKup = true;
            $("#x12").addClass("schovej");
        }
    });
    $("#x13").click(function(){
        if(skoreAktualne>=6500000){
            upgrade(6500000,pocetPatychUp*260*2);
            x5up*=2;
            x13upKup = true;
            $("#x13").addClass("schovej");
        }
    });
    $("#x14").click(function(){
        if(skoreAktualne>=14000000){
            upgrade(14000000,pocetSestychUp*1400);
            x6up*=2;
            x14upKup = true;
            $("#x14").addClass("schovej");
        }
    });
    $("#x15").click(function(){
        if(skoreAktualne>=70000000){
            upgrade(70000000,pocetSestychUp*1400*2);
            x6up*=2;
            x15upKup = true;
            $("#x15").addClass("schovej");
        }
    });
    $("#x16").click(function(){
        if(skoreAktualne>=200000000){
            upgrade(200000000,pocetSedmychUp*7800);
            x7up*=2;
            x16upKup = true;
            $("#x16").addClass("schovej");
        }
    });
    $("#x17").click(function(){
        if(skoreAktualne>=1000000000){
            upgrade(1000000000,pocetSedmychUp*7800*2);
            x7up*=2;
            x17upKup = true;
            $("#x17").addClass("schovej");
        }
    });
});