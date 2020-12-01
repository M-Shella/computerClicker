<?php
    session_start();
    $tlacitko = $_POST['tlacitko'];
    $jmeno = $_POST['jmeno'];
    $db = mysqli_connect("localhost", "root", "", "computerclicker");
    $sql = "SELECT idu FROM users WHERE name='$jmeno'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $id =(int)$row["idu"];
    $sql = "DELETE FROM skore WHERE idu=$id";
    if($db->query($sql)===true){echo "Skore s id: $id byl smazán!";}else{echo mysqli_error($db);}
    $sql = "DELETE FROM pocetup WHERE idu=$id";
    if($db->query($sql)===true){echo "Upgrady s id: $id byl smazán!";}else{echo mysqli_error($db);}
    $sql = "DELETE FROM pocetsup WHERE idu=$id";
    if($db->query($sql)===true){echo "SUpgrady s id: $id byl smazán!";}else{echo mysqli_error($db);}
    $sql = "DELETE FROM users WHERE idu=$id";
    if($db->query($sql)===true){echo "Uživatel s id: $id byl smazán!";}else{echo mysqli_error($db);}
?>