<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $theFirstArray = $_POST["theFirstArray"];
    $secondArray = $_POST["secondArray"];
    //Hàm explode () phá vỡ một chuỗi thành một mảng.
    $theFirstArray = explode(" ",$theFirstArray);
    $secondArray = explode(" ", $secondArray);
    function poolingArray($theFirstArray, $secondArray){
        $array = [];
        foreach ($theFirstArray as $key => $value){
            array_push($array, $theFirstArray[$key]);
        }
        foreach ($secondArray as $key => $value){
            array_push($array, $secondArray[$key]);
        }
//        for ($index = 0; $index < count($theFirstArray); $index++){
//            array_push($array, $theFirstArray[$index]);
//        }
//        for ($index = 0; $index < count($secondArray); $index++){
//            array_push($array, $secondArray[$index]);
//        }
        return $array;
    }
    print_r(poolingArray($theFirstArray,$secondArray));
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập gộp mảng</title>
    <style>
        form{
            margin-left: 40%;
        }
        h2{
            color: blue;
            margin-left: 30px;
        }
        .display{
            height: 180px; width: 330px;
            margin: 0;
            padding: 10px;
            border:1px #dd33dd solid;
        }
        input[name=theFirstArray]{
            margin-left: 23px;
        }
        input[type=submit]{
            margin-left: 30%;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Combine two arrays into one</h2>
        <fieldset>
            <legend>Combine Array</legend>
            <br>Array Fist:
            <input type="text" name="theFirstArray" size="30">
            <br>Array Second:
            <input type="text" name="secondArray" size="30">
            <br>Combine:
            <input type="submit" value="Combine">
        </fieldset>
    </div>
</form>
</body>
</html>
