<?php
    $ch = curl_init();
    $url = 'http://localhost:3000/matches';
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($result, true);
    // var_dump($data);
    if(isset($_GET["Submit"]) && isset( $_GET["state"])){
        echo"xml";    }
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
<form action="footballApi.php" method="GET">
    <input type="radio" name="state" value="JSON"> JSON
    <input type="radio" name="state" value="XML"> XML &nbsp
    <input type="submit" name="Submit" value="Submit">
</form>
    <h1>MATCHES</h1>
    <h2>First Leg</h2>
    <table style='width:100%'>
        <tr>
            <th>Home Team</th>
            <th>Goals</th> 
            <th>Away Team</th>
            <th>Goals</th> 
        </tr>
    <?php
        for($i=0;$i<5;$i+=2){
            echo "<tr><td><a href='team.php?name=".$data[$i]["Name"]."'>".$data[$i]["Name"]."</a></td><td>".$data[$i]["ResultOfTeamHome"]."</td><td>".$data[$i+1]["Name"]."</td><td>".$data[$i+1]["ResultOfTeamHome"]."</td></tr>";
        }
    ?>
    </table>
    <br>
    <h2>Second Leg</h2>
    <table style='width:100%'>
        <tr>
            <th>Home Team</th>
            <th>Goals</th> 
            <th>Away Team</th>
            <th>Goals</th> 
        </tr>
    <?php
        for($i=5;$i<11;$i+=2){
            echo "<tr><td><a href='team.php?name=".$data[$i]["Name"]."'>".$data[$i]["Name"]."</a></td><td>".$data[$i]["ResultOfTeamHome"]."</td><td>".$data[$i+1]["Name"]."</td><td>".$data[$i+1]["ResultOfTeamHome"]."</td></tr>";
        }
    ?>
    </table>
</body>
</html>