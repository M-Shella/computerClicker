$(document).ready(function() {
    $("#prvni").click(function(){
        if(skoreAktualne>=cenaPrvniho){
            pocetPrvnichUp++;
            if(pocetPrvnichUp>=1 && !x1upKup) $("#x1").removeClass("schovej");
            if(pocetPrvnichUp>=1 && !x2upKup) $("#x2").removeClass("schovej");
            if(pocetPrvnichUp>=10 && !x3upKup) $("#x3").removeClass("schovej");
            if(pocetPrvnichUp>=25 && !x4upKup) $("#x4").removeClass("schovej");
            if(pocetPrvnichUp>=50 && !x5upKup) $("#x5").removeClass("schovej");
            upgrade(cenaPrvniho,x1up);
            cenaPrvniho = Math.floor(20*Math.pow(1.15, pocetPrvnichUp));
            $("#pricePrvniho").text("Cena: " + cenaPrvniho);
            $("#numPrvniho").text("Počet: " + pocetPrvnichUp);
        }
    });
    $("#druhy").click(function(){
        if(skoreAktualne>=cenaDruhyho){
            pocetDruhychUp++;
            if(pocetDruhychUp>=1 && !x6upKup) $("#x6").removeClass("schovej");
            if(pocetDruhychUp>=5 && !x7upKup) $("#x7").removeClass("schovej");
            upgrade(cenaDruhyho,x2up);
            cenaDruhyho = Math.floor(100*Math.pow(1.15, pocetDruhychUp));
            $("#priceDruhyho").text("Cena: " + cenaDruhyho);
            $("#numDruhyho").text("Počet: " + pocetDruhychUp);
        }
    });
    $("#treti").click(function(){
        if(skoreAktualne>=cenaTretiho){
            pocetTretichUp++;
            if(pocetTretichUp>=1 && !x8upKup) $("#x8").removeClass("schovej");
            if(pocetTretichUp>=5 && !x9upKup) $("#x9").removeClass("schovej");
            upgrade(cenaTretiho,x3up);
            cenaTretiho = Math.floor(1100*Math.pow(1.15, pocetTretichUp));
            $("#priceTretiho").text("Cena: " + cenaTretiho);
            $("#numTretiho").text("Počet: " + pocetTretichUp);
        }
    });
    $("#ctvrty").click(function(){
        if(skoreAktualne>=cenaCtvrtyho){
            pocetCtvrtychUp++;
            if(pocetCtvrtychUp>=1 && !x10upKup) $("#x10").removeClass("schovej");
            if(pocetCtvrtychUp>=5 && !x11upKup) $("#x11").removeClass("schovej");
            upgrade(cenaCtvrtyho,x4up);
            cenaCtvrtyho = Math.floor(12000*Math.pow(1.15, pocetCtvrtychUp));
            $("#priceCtvrtyho").text("Cena: " + cenaCtvrtyho);
            $("#numCtvrtyho").text("Počet: " + pocetCtvrtychUp);
        }
    });
    $("#paty").click(function(){
        if(skoreAktualne>=cenaPatyho){
            pocetPatychUp++;
            if(pocetPatychUp>=1 && !x12upKup) $("#x12").removeClass("schovej");
            if(pocetPatychUp>=5 && !x13upKup) $("#x13").removeClass("schovej");
            upgrade(cenaPatyho,x5up);
            cenaPatyho = Math.floor(130000*Math.pow(1.15, pocetPatychUp));
            $("#pricePatyho").text("Cena: " + cenaPatyho);
            $("#numPatyho").text("Počet: " + pocetPatychUp);
        }
    });
    $("#sesty").click(function(){
        if(skoreAktualne>=cenaSestyho){
            pocetSestychUp++;
            if(pocetSestychUp>=1 && !x14upKup) $("#x14").removeClass("schovej");
            if(pocetSestychUp>=5 && !x15upKup) $("#x15").removeClass("schovej");
            upgrade(cenaSestyho,x6up);
            cenaSestyho = Math.floor(1400000*Math.pow(1.15, pocetSestychUp));
            $("#priceSestyho").text("Cena: " + cenaSestyho);
            $("#numSestyho").text("Počet: " + pocetSestychUp);
        }
    });
    $("#sedmy").click(function(){
        if(skoreAktualne>=cenaSedmyho){
            pocetSedmychUp++;
            if(pocetSedmychUp>=1 && !x16upKup) $("#x16").removeClass("schovej");
            if(pocetSedmychUp>=5 && !x17upKup) $("#x17").removeClass("schovej");
            upgrade(cenaSedmyho,x7up);
            cenaSedmyho = Math.floor(20000000*Math.pow(1.15, pocetSedmychUp));
            $("#priceSedmyho").text("Cena: " + cenaSedmyho);
            $("#numSedmyho").text("Počet: " + pocetSedmychUp);
        }
    });
});