function savenout(){
    $.post("save.php",{
    "pocetAktualne": skoreAktualne, 
    "pocetCelkove": skoreCelkove, 
    "hps": pomocnaKHps, 
    "x1upKup": x1upKup, 
    "x2upKup": x2upKup,
    "x3upKup": x3upKup,
    "x4upKup": x4upKup,
    "x5upKup": x5upKup,
    "x6upKup": x6upKup,
    "x7upKup": x7upKup,
    "x8upKup": x8upKup,
    "x9upKup": x9upKup,
    "x10upKup": x10upKup,
    "x11upKup": x11upKup,
    "x12upKup": x12upKup,
    "x13upKup": x13upKup,
    "x14upKup": x14upKup,
    "x15upKup": x15upKup,
    "x16upKup": x16upKup,
    "x17upKup": x17upKup,
    "pocetPrvnichUp": pocetPrvnichUp,
    "pocetDruhychUp": pocetDruhychUp,
    "pocetTretichUp": pocetTretichUp,
    "pocetCtvrtychUp": pocetCtvrtychUp,
    "pocetPatychUp": pocetPatychUp,
    "pocetSestychUp": pocetSestychUp,
    "pocetSedmychUp": pocetSedmychUp
    },
    function(h){
        console.log(h);
    })
}