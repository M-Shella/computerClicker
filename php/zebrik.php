<?php 
    $index = 0;
    $data = array();
    $pomocnna = json_decode($_POST['pomocnna']);
    $pomocnna2 = json_decode($_POST['pomocnna2']);
    $db = mysqli_connect("localhost", "root", "", "computerclicker");
    if($pomocnna && $pomocnna2){
        $sql = "SELECT users.name, skore.celkove, users.idu FROM skore JOIN users ON skore.idu = users.idu GROUP BY name";
    }else if($pomocnna && !$pomocnna2){
        $sql = "SELECT users.name, skore.celkove, users.idu FROM skore JOIN users ON skore.idu = users.idu GROUP BY name ORDER BY name DESC";
    }else if(!$pomocnna && $pomocnna2){
        $sql = "SELECT users.name, skore.celkove, users.idu FROM skore JOIN users ON skore.idu = users.idu ORDER BY celkove ASC";
    }elseif(!$pomocnna && !$pomocnna2){
        $sql = "SELECT users.name, skore.celkove, users.idu FROM skore JOIN users ON skore.idu = users.idu ORDER BY celkove DESC";
    }
    
    $query = mysqli_query($db, $sql);
    while($row = mysqli_fetch_assoc($query)){
        $data[$index][0] = $row['name'];
        $data[$index][1] = $row['celkove'];
        $data[$index][2] = $row['idu'];
        $index++;
    }
    for($i=0;$i<count($data);$i++){
        echo "<div class='polozka'>";
        echo "<span>".$data[$i][0]."</span>";
        echo "<div class='skoreckos' id='".$data[$i][2]."'>";
        echo $data[$i][1];
        echo "</div>";
        echo "</div>";
    }
?>