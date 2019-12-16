<?php
if(isset($_GET["name"])){
    echo "<h1>".$_GET["name"]."</h1>";
    $curl = curl_init();
    $url = 'http://localhost:3000/'.$_GET["name"].'';
    curl_setopt($curl, CURLOPT_URL,$url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($result, true);
    //var_dump($data);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>footballApi</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>First Leg</h2>
    <table style='width:100%'>
        <tr>
            <th>Player name</th>
            <th>Goals</th> 
            <th>Shots</th>
            <th>Shots On Target</th>
            <th>Fouls</th> 
            <th>Yellow Cards</th>
            <th>Red Cards</th>
            <th>Passes</th>
            <th>Dribbles</th>
            <th>Tackles</th>
            <th>Saves</th>
        </tr>
    <?php
        for($i=0;$i<11;$i++){
            echo "<tr><td>".$data[$i]["Name"]."</td><td>".$data[$i]["Goals"]."</td><td>".$data[$i]["Shots"]."</td><td>".$data[$i]["ShotsOnTarget"]."</td><td>".$data[$i]["Fouls"]."</td><td>".$data[$i]["YellowCards"]."</td><td>".$data[$i]["RedCards"]."</td><td>".$data[$i]["Passes"]."</td><td>".$data[$i]["Dribbles"]."</td><td>".$data[$i]["Tackles"]."</td><td>".$data[$i]["Saves"]."</td></tr>";
        }
    ?>
    </table>
    <br>
    <h2>Second Leg</h2>
    <table style='width:100%'>
        <tr>
            <th>Player name</th>
            <th>Goals</th> 
            <th>Shots</th>
            <th>Shots On Target</th>
            <th>Fouls</th> 
            <th>Yellow Cards</th>
            <th>Red Cards</th>
            <th>Passes</th>
            <th>Dribbles</th>
            <th>Tackles</th>
            <th>Saves</th>
        </tr>
    <?php
        for($i=11;$i<22;$i++){
            echo "<tr><td>".$data[$i]["Name"]."</td><td>".$data[$i]["Goals"]."</td><td>".$data[$i]["Shots"]."</td><td>".$data[$i]["ShotsOnTarget"]."</td><td>".$data[$i]["Fouls"]."</td><td>".$data[$i]["YellowCards"]."</td><td>".$data[$i]["RedCards"]."</td><td>".$data[$i]["Passes"]."</td><td>".$data[$i]["Dribbles"]."</td><td>".$data[$i]["Tackles"]."</td><td>".$data[$i]["Saves"]."</td></tr>";
        }
    ?>
    </table>
</body>
</html>