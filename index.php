<?php
if(isset($_POST['n'])){
  include("number/index.php");
  exit();
}
else if(isset($_GET['n'])){
  include("number/index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Midelight Numbers</title>
  <link rel="shortcut icon" href="../lowpolyc.png">

  <meta name="title" content="Midelight Numbers">
  <meta name="author" content="Hypenexy">
  <meta name="description" content="Learn interesting facts about numbers.">

  <meta property="og:site_name" content="Midelight Numbers">
  <meta property="og:title" content="Midelight Numbers">
  <meta property="og:description" content="Learn interesting facts about numbers.">
  <meta property="og:image" content="../lowpolyc.png">

  <link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="mdblock">
    <input id="number" placeholder="Type any number or math expression" autocomplete="off" oninput="create(this.value);">
    <div id="factdiv" class="fact interestingstuff">
      <p class="details">Fact of the number</p>
      <p id="fact">Interesting stuff goes here but you shouldn't be able to see this yet.</p>
    </div>
    <div id="numeraldiv" class="othernumeralsystem interestingstuff">
      <a class="details">Numeral systems</a>
      <p>Your number in other numeral systems is written like this</p>
      <ul id="numeral">
        <li id="binary" style="display: block;">Binary </li>
        <li id="octal">Octal </li>
        <li id="hexadecimal">Hexadecimal </li>
      </ul>
      <!--<a href="" class="link">Learn more</a>-->
    </div>
    <div id="math" class="othernumeralsystem interestingstuff">
      <p class="details">Math operations</p>
      <p id="ifnumberisset" style="display:none">Your number calculated with your last number</p>
      <ul>
        <li id="plus" style="display: block"> </li>
        <li id="minus" style="display: block"> </li>
        <li id="multiply" style="display: block"> </li>
        <li id="divide" style="display: block"> </li>
      </ul>
      <p>Your number calculated</p>
      <ul>
        <li id="power" style="display: block"> </li>
        <li id="size" style="display: block"> </li>
      </ul>
    </div>
    <div id="support" class="othernumeralsystem interestingstuff">
      <a href="https://midelight.net">Midelight</a>, <a href="https://github.com/Hypenexy/Numbers">Contribute</a>, <a href="api">API</a>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
</html>