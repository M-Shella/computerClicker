<?php
    session_start();
    $db = mysqli_connect("localhost", "root", "", "computerclicker");
    if($_POST['reg_tlacitko']){
        $username = $_POST['reg_jmeno'];
        $password = $_POST['reg_heslo'];
        $password = md5($password);
        $sql = "INSERT INTO users(name, password) VALUES ('$username', '$password')";
        if (mysqli_query($db,$sql)){
            $neco = "SELECT idu FROM users WHERE name='$username'";
            $result = $db->query($neco);
            $row = $result->fetch_assoc();
            $id =(int)$row["idu"];
            $sql= "INSERT INTO skore(idu, aktualne, celkove, hps) VALUES ($id, 0, 0, 0)";
            mysqli_query($db, $sql);
            for($i=1;$i<=7;$i++){
                $sql = "INSERT INTO pocetup(pocet, idu, idup) VALUES (0, $id, $i)";
                mysqli_query($db, $sql);
            }
            for($i=1;$i<=17;$i++){
                $sql = "INSERT INTO pocetsup(vlast, idu, idsup) VALUES (False, $id, $i)";
                mysqli_query($db, $sql);
            }
            $_SESSION['username'] = $username;
            $neco = "SELECT aktualne, celkove, hps FROM skore WHERE idu=$id";
            $result = $db->query($neco);
            while($row = $result->fetch_assoc()){
                $_SESSION['skoreAktualne'] =(int)$row['aktualne'];
                $_SESSION['skoreCelkove'] =(int)$row['celkove'];
                $_SESSION['pomocnaKHps'] =(int)$row['hps'];
            }

            for($i=1;$i<=17;$i++){
                $neco = "SELECT vlast FROM pocetsup WHERE idu=$id AND idsup = $i";
                $result = $db->query($neco);
                $row = $result->fetch_assoc();
                $_SESSION['x'.$i.'upKup'] = $row['vlast'];
            }

            for($i=1;$i<=7;$i++){
                $neco = "SELECT pocet FROM pocetup WHERE idu=$id AND idup=$i";
                $result = $db->query($neco);
                $row = $result->fetch_assoc();
                $_SESSION['poc'.$i.'up']=(int)$row['pocet'];
            }
            $_SESSION['id']=$id;
            header("location: home.php");
        }else{
            $_SESSION['message']="Jméno již exzistuje";
            header("location: index.php");
        }
        
    }
?> 
