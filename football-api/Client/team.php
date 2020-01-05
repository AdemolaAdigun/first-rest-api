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
<?php
    //////XML DATA////////
    if (isset($_GET["XML"])) {
        $ch = curl_init();
        $url = 'http://localhost:3000/'.$_GET["name"].'XML';
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url); // get the url contents
        $result = curl_exec($ch); // execute curl request
        curl_close($ch);
        $data = new SimpleXMLElement($result, LIBXML_NOCDATA);
        echo "<h1 align='center'> XML is call used.</h1>";
    
?>
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
            echo "<tr><td>".$data->matches[$i]->Name."</td><td>".$data->matches[$i]->Goals."</td><td>".$data->matches[$i]->Shots."</td><td>".$data->matches[$i]->ShotsOnTarget."</td><td>".$data->matches[$i]->Fouls."</td><td>".$data->matches[$i]->YellowCards."</td><td>".$data->matches[$i]->RedCards."</td><td>".$data->matches[$i]->Passes."</td><td>".$data->matches[$i]->Dribbles."</td><td>".$data->matches[$i]->Tackles."</td><td>".$data->matches[$i]->Saves."</td></tr>";
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
            echo "<tr><td>".$data->matches[$i]->Name."</td><td>".$data->matches[$i]->Goals."</td><td>".$data->matches[$i]->Shots."</td><td>".$data->matches[$i]->ShotsOnTarget."</td><td>".$data->matches[$i]->Fouls."</td><td>".$data->matches[$i]->YellowCards."</td><td>".$data->matches[$i]->RedCards."</td><td>".$data->matches[$i]->Passes."</td><td>".$data->matches[$i]->Dribbles."</td><td>".$data->matches[$i]->Tackles."</td><td>".$data->matches[$i]->Saves."</td></tr>";
        }
    ?>
    </table>
    <?php
    }
    ?>
<?php
/////JSON DATA SECTION//////
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
?>
<body>
<?php
    echo "<form action='team.php?name=".$_GET['name']."' method='GET'>
        <input type='submit' name='XML' value='XML'>
    </form>"
    ?>
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
    <?php
}
    ?>
</body>
</html>