<?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['skoreAktualne']);
    unset($_SESSION['skoreCelkove']);
    unset($_SESSION['pomocnaKHps']);
    for($i=1;$i<=17;$i++){
        unset($_SESSION['x'.$i.'upKup']);
    }
    for($i=1;$i<=7;$i++){
        unset($_SESSION['poc'.$i.'up']);
    }
    header("location: index.php");
?>