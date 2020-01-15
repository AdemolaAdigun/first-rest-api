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
//JSON DATA SECTION
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
    <h2>First Leg data in JSON</h2>
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
    <h2>Second Leg data in JSON</h2>
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
    <br> 
    <?php
    //XML DATA Section
        echo "<h1>".$_GET["name"]."</h1>";
        $ch2 = curl_init();
        $url2 = 'http://localhost:3000/'.$_GET["name"].'/XML';
        //echo $url2;
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_URL, $url2); // get the url contents
        $result2 = curl_exec($ch2); // execute curl request
        curl_close($ch2);
        $data2 = new SimpleXMLElement($result2, LIBXML_NOCDATA);
        //"<pre>".var_dump($data2)."</pre>";
        $team = "team";
        // echo $team;
        // echo $url2;

    //Validator
        include "xsd/validator.php";
        function libxml_display_errors() {
        $errors = libxml_get_errors();
        foreach ($errors as $error) {
            print libxml_display_error($error);
        }
        libxml_clear_errors();
        }
    
    // Enable user error handling
        libxml_use_internal_errors(true);
    
        $xml = new DOMDocument();
        $xml->load('http://localhost:3000/'.$_GET["name"].'/XML');
    
        if (!$xml->schemaValidate('xsd/schema2.xsd')) {
        print '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
        libxml_display_errors();
        } else {
            echo "<script>console.log('Validated!')</script>";
        }
    ?>
<h2>First Leg data in XML</h2>
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
            echo "<tr><td>".$data2->$team[$i]->Name."</td><td>".$data2->$team[$i]->Goals."</td><td>".$data2->$team[$i]->Shots."</td><td>".$data2->$team[$i]->ShotsOnTarget."</td><td>".$data2->$team[$i]->Fouls."</td><td>".$data2->$team[$i]->YellowCards."</td><td>".$data2->$team[$i]->RedCards."</td><td>".$data2->$team[$i]->Passes."</td><td>".$data2->$team[$i]->Dribbles."</td><td>".$data2->$team[$i]->Tackles."</td><td>".$data2->$team[$i]->Saves."</td></tr>";
        }
    ?>
    </table>
    </table>
    <br>
    <h2>Second Leg data in XML</h2>
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
            echo "<tr><td>".$data2->$team[$i]->Name."</td><td>".$data2->$team[$i]->Goals."</td><td>".$data2->$team[$i]->Shots."</td><td>".$data2->$team[$i]->ShotsOnTarget."</td><td>".$data2->$team[$i]->Fouls."</td><td>".$data2->$team[$i]->YellowCards."</td><td>".$data2->$team[$i]->RedCards."</td><td>".$data2->$team[$i]->Passes."</td><td>".$data2->$team[$i]->Dribbles."</td><td>".$data2->$team[$i]->Tackles."</td><td>".$data2->$team[$i]->Saves."</td></tr>";
        }
    ?>
    </table>
</body>
</html>