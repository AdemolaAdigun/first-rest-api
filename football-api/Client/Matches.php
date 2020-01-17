<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>footballApi</title>
    <style>
        table,th,td {
            border: 1px solid black;
           }
    </style>
</head>


    <!-- JSON DATA section -->


    <?php
    //Getting the data from Api in JSON and storing it in an array

        $ch = curl_init();
        $url = 'http://localhost:3000/matches';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($result, true);

    // var_dump($data);
    
    require_once 'vendor/autoload.php';
 
    use JsonSchema\Validator;
    use JsonSchema\Constraints\Constraint;
 
    $config = json_decode(file_get_contents('http://localhost:3000/matches'));
    $validator = new Validator; 
    $validator->validate(
    $config,
    (object)['$ref' => 'file://' . realpath('js/schema1.json')],
    Constraint::CHECK_MODE_APPLY_DEFAULTS
    );
 
    if ($validator->isValid()) {
    echo "JSON VALID!\n";
    ?>

<body>
    <h1>MATCHES DATA IN JSON</h1>
    <h2>First Leg</h2>
    <table style='width:100%'>
        <tr>
            <th>Home Team</th>
            <th>Goals</th>
            <th>Away Team</th>
            <th>Goals</th>
        </tr>
    <?php
    $i = 0;
        while ($i <= 8) {
        echo "<tr><td><a href='Teams.php?name=" . $data[$i]["TeamName"] . "'>" . $data[$i]["TeamName"] . "</a></td><td>" . $data[$i]["ResultOfTeamHome"] . "</td><td>" . $data[$i + 2]["TeamName"] . "</td><td>" . $data[$i + 2]["ResultOfTeamHome"] . "</td></tr>";
        $i +=4;
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
    $p = 1;
        while ($p < 12) {
        echo "<tr><td><a href='Teams.php?name=" . $data[$p + 2]["TeamName"] . "'>" . $data[$p + 2]["TeamName"] . "</a></td><td>" . $data[$p + 2]["ResultOfTeamHome"] . "</td><td>" . $data[$p]["TeamName"] . "</td><td>" . $data[$p]["ResultOfTeamHome"] . "</td></tr>";
        $p +=4;
        }
    ?>
    </table>
    <?php
    } else {
        echo "JSON validation errors:\n";
        foreach ($validator->getErrors() as $error) {
            print_r($error);
        }
        }
    ?>
    
    <!-- XML DATA section -->

    <br>
    <h1>MATCHES DATA IN XML</h1>

    <?php
    //Getting the data from Api in XML and storing it in an array

        $ch2 = curl_init();
        $url2 = 'http://localhost:3000/matchesXML';
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_URL, $url2); // get the url contents
        $result2 = curl_exec($ch2); // execute curl request
        curl_close($ch2);
        $data2 = new SimpleXMLElement($result2, LIBXML_NOCDATA);

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
    $xml->load('http://localhost:3000/matchesXML');
    
    if (!$xml->schemaValidate('xsd/schema1.xsd')) {
        print '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
        libxml_display_errors();
    } else {
        echo "<script>console.log('Validated!')</script>";
        echo "<p>XML VALID!</p>";
    }
    ?>
    
    <h2>First Leg</h2>
    <table style='width:100%'>
        <tr>
            <th>Home Team</th>
            <th>Goals</th>
            <th>Away Team</th>
            <th>Goals</th>
        </tr>
    <?php
        $i = 0;
        while ($i <= 8) {
        echo "<tr><td><a href='Teams.php?name=" . $data2->matches[$i]->TeamName. "'>" . $data2->matches[$i]->TeamName. "</a></td><td>" . $data2->matches[$i]->ResultOfTeamHome . "</td><td>" . $data2->matches[$i+2]->TeamName . "</td><td>" . $data2->matches[$i+2]->ResultOfTeamHome . "</td></tr>";
        $i +=4;
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
        $p = 1;
        while ($p < 12) {
        echo "<tr><td><a href='Teams.php?name=" . $data2->matches[$p + 2]->TeamName. "'>" . $data2->matches[$p + 2]->TeamName. "</a></td><td>" . $data2->matches[$p + 2]->ResultOfTeamHome . "</td><td>" . $data2->matches[$p]->TeamName . "</td><td>" . $data2->matches[$p]->ResultOfTeamHome . "</td></tr>";
        $p += 4;
    }
    ?>
    </table>
</body>
</html>