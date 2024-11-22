<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>table</title>
     <link rel="stylesheet" href="table.css">
</head>
<body>

    <?php
    if (isset($_POST["submit"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $fullname = $fname." ".$lname;
        $dateo = $_POST["dateo"];
        $location = $_POST["location"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $tel = $_POST["tel"];
        $prof = $_POST["prof"];
        $rate = $_POST["rate"];
        $eng = isset($_POST["eng"]) ? $_POST["eng"] :'';
        $swa = isset($_POST["swa"]) ? $_POST["swa"] :'';
        $fre = isset($_POST["fre"]) ? $_POST["fre"] :'';
        $gend = isset($_POST['gend']) ? $_POST['gend'] :'';
        $lang = $eng  ?: ($swa ?: $fre);
        $cont = $_POST["cont"];
        echo '
             
    <table border="1">
       <tr class="tr1"><th colspan="8" class="h1">student application form</th></tr>
        <tr class="tr2">
            <th colspan="4">student inforamtion</th>
            <th colspan="4">languages</th>
        </tr>
        <tr class="tr3">
            <th>student name</th>
            <th>data of birth</th>
            <th>email</th>
            <th>phone number</th>
            <th>english ratings</th>    
            <th>languages good at</th>
            <th>gender</th>
            <th>continent residence</th>
        </tr>
        
    <tr>
        <td>'.$fullname.'</td>
        <td>'.$dateo.'</td>
        <td>'.$email.'</td>
        <td>'.$tel.'</td>
        <td>'.$rate.'</td>
        <td>'.$lang.'</td>
         <td>'.$gend.'</td>
         <td> '.$cont.'</td>
    </tr>
    <tr class="tr4">
        <th colspan="8">essay</th>
    </tr>
    <tr class="tr5">
        <th colspan="8" rowspan="1" >N.B: we\'ll first analyze your essay before sending your our response</th>
    </tr>
     <tr class="tr7">
        <th colspan="8" class="h2">thanks for taking your time applying to our college</th>
    </tr>
    </table>
    ';
    }
    ?>
</body>
</html>