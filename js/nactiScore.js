function nactiSkore(){
    skore.text(Math.round(skoreAktualne));
    document.title = Math.round(skoreAktualne);
    if(skoreCelkove>=100){
        $("#ctvrty").removeClass("schovej");
        (cenaCtvrtyho>skoreAktualne)? $("#ctvrty").css("opacity",0.5) : $("#ctvrty").css("opacity",1);
    }
    if(skoreCelkove>=1100){
        $("#paty").removeClass("schovej");
        (cenaPatyho>skoreAktualne)? $("#paty").css("opacity",0.5) : $("#paty").css("opacity",1);
    }
    if(skoreCelkove>=12000){
        $("#sesty").removeClass("schovej");
        (cenaSestyho>skoreAktualne)? $("#sesty").css("opacity",0.5) : $("#sesty").css("opacity",1);
    }
    if(skoreCelkove>=130000){
        $("#sedmy").removeClass("schovej");
        (cenaSedmyho>skoreAktualne)? $("#sedmy").css("opacity",0.5) : $("#sedmy").css("opacity",1);
    }
    $("#prvni").css("opacity", ((cenaPrvniho <= skoreAktualne) + 1) / 2);
    $("#druhy").css("opacity", ((cenaDruhyho <= skoreAktualne) + 1) / 2);
    $("#treti").css("opacity", ((cenaTretiho <= skoreAktualne) + 1) / 2);
    $("#x1").css("opacity", ((100 <= skoreAktualne) + 1) / 2);
    $("#x2").css("opacity", ((500 <= skoreAktualne) + 1) / 2);
    $("#x3").css("opacity", ((10000 <= skoreAktualne) + 1) / 2);
    $("#x4").css("opacity", ((50000 <= skoreAktualne) + 1) / 2);
    $("#x5").css("opacity", ((100000 <= skoreAktualne) + 1) / 2);
    $("#x6").css("opacity", ((1000 <= skoreAktualne) + 1) / 2);
    $("#x7").css("opacity", ((5000 <= skoreAktualne) + 1) / 2);
    $("#x8").css("opacity", ((11000 <= skoreAktualne) + 1) / 2);
    $("#x9").css("opacity", ((55000 <= skoreAktualne) + 1) / 2);
    $("#x10").css("opacity", ((120000 <= skoreAktualne) + 1) / 2);
    $("#x11").css("opacity", ((600000 <= skoreAktualne) + 1) / 2);
    $("#x12").css("opacity", ((1300000 <= skoreAktualne) + 1) / 2);
    $("#x13").css("opacity", ((6500000 <= skoreAktualne) + 1) / 2);
    $("#x14").css("opacity", ((14000000 <= skoreAktualne) + 1) / 2);
    $("#x15").css("opacity", ((70000000 <= skoreAktualne) + 1) / 2);
    $("#x16").css("opacity", ((200000000 <= skoreAktualne) + 1) / 2);
    $("#x17").css("opacity", ((1000000000 <= skoreAktualne) + 1) / 2);
};