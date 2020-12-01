<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    session_start();
    
    
    $db = mysqli_connect("localhost", "root", "", "computerclicker");
    if($_POST['log_tlacitko']){
        $username = $_POST['log_jmeno'];
        $password = $_POST['log_heslo'];
        $password = md5($password);

        $sql = "SELECT * FROM users WHERE name='$username' AND password='$password'";
        $result = mysqli_query($db,$sql);

        if(mysqli_num_rows($result) == 1){

            $neco = "SELECT idu FROM users WHERE name='$username'";
            $result = $db->query($neco);
            $row = $result->fetch_assoc();
            $id =(int)$row["idu"];
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;

            $neco = "SELECT aktualne, celkove, hps FROM skore WHERE idu='$id'";
            $result = $db->query($neco);
            while($row = $result->fetch_assoc()){
                $_SESSION['skoreAktualne'] = (int)$row['aktualne'];
                $_SESSION['skoreCelkove'] = (int)$row['celkove'];
                $_SESSION['pomocnaKHps'] = (int)$row['hps'];
                
            }

            for($i=1;$i<=17;$i++){
                $neco = "SELECT vlast FROM pocetsup WHERE idu=$id AND idsup = $i";
                $result = $db->query($neco);
                $row = $result->fetch_assoc();
                $_SESSION['x'.$i.'upKup'] = $row['vlast'];
            }

            for($i=1;$i<=7;$i++){
                $neco = "SELECT pocet FROM pocetup WHERE idu='$id' AND idup = '$i'";
                $result = $db->query($neco);
                $row = $result->fetch_assoc();
                $_SESSION['poc'.$i.'up'] =(int)$row['pocet'];
            }

            header("location: home.php");
        }else{
            $_SESSION['message']="Špatné jméno nebo heslo";
            header("location: index.php");
        }
    }
?> 