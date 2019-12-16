<?php
    $curl = curl_init();
    $url = 'http://localhost:3000/matches';
    curl_setopt($curl, CURLOPT_URL,$url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($result, true);
    // var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>footballApi</title>
</head>
<body>
    <h1>Matches</h1>
    <?php
        for($i=0;$i<12;$i+=2){
            echo "<p>".$data[$i]["Name"]." : ".$data[$i]["ResultOfTeamHome"]."<br> vs <br>".$data[$i+1]["Name"]." : ".$data[$i+1]["ResultOfTeamHome"]."</p> <hr>";
        }
    ?>
</body>
</html>