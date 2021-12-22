<?php
    if(isset($_POST['n'])){
        $id = $_POST['n'];
    }
    else if(isset($_GET['n'])){
        $id = $_GET['n'];
    }
    else{
        echo "If you see this you haven't set a GET or POST variable.";
    }
    if(!isset($_SESSION)){
        session_start();
    }
    $datatosend = (object) [];
    $datatosend->number = $id;
    if(isset($_SESSION['Numberslastnumber'])){
        $datatosend->lastnumber = $_SESSION['Numberslastnumber'];
    }
    $_SESSION['Numberslastnumber'] = $id;
    $n = $id;
    if ($n){
        if ($n==1){
            $datatosend->fact = "$n is the most common leading digit in many sets of data, a consequence of <a href=https://en.wikipedia.org/wiki/Benford%27s_law>Benford's law</a>. <br><br>The glyph used today to represent the number 1, a vertical line, often with a serif at the top and sometimes a short horizontal line at the bottom, traces its roots back to the Brahmic script of ancient India, where it was a simple vertical line. It was transmitted to Europe via Arabic during the Middle Ages.";
        }
        else if ($n==2){
            $datatosend->fact = "$n is the smallest and only even <a href=https://en.wikipedia.org/wiki/Prime_number>prime number</a>.";
        }
        else if ($n==3){
            $datatosend->fact = "$n is the first number of π (Pi). You can also type 3.14 to learn more about it.";
        }
        else if ($n==3.14){
            $datatosend->fact = "$n known as π (Pi), defines the ratio of a circle's circumference to its diameter.<br><br> The number appears in many formulas in all areas of mathematics and physics.<br><br><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Pi-unrolled-720.gif/220px-Pi-unrolled-720.gif>";
        }
        else if ($n==3.1415){
            $datatosend->fact = "$n is π (Pi) to the 5th decimal point/place";
        }
        else if ($n==3.141592){
            $datatosend->fact = "$n is π (Pi) to the 7th decimal point/place";
        }
        else if ($n==3.14159265){
            $datatosend->fact = "$n is π (Pi) to the 9th decimal point/place";
        }
        else if ($n==3.1415926535){
            $datatosend->fact = "$n is π (Pi) to the 11th decimal point/place";
        }
        else if ($n==4){
            $datatosend->fact = "$n is the smallest <a href=https://en.wikipedia.org/wiki/Composite_number>composite number</a>, and is considered unlucky in many East Asian cultures.";
        }
        else if ($n==5){
            $datatosend->fact = "$n has attained significance throughout history in part because typical humans have five fingers on each hand.";
        }
        else if ($n==6){
            $datatosend->fact = "$n is a <a href=https://en.wikipedia.org/wiki/Composite_number>composite number</a> and the smallest <a href=https://en.wikipedia.org/wiki/Perfect_number>perfect number</a>.";
        }
        else if ($n==7){
            $datatosend->fact = "$n is the only <a href=https://en.wikipedia.org/wiki/Prime_number>prime number</a> preceding a cube, and is often considered lucky in Western culture.";
        }
        else if ($n==8){
            $datatosend->fact = "$n is the base of the <a href=https://en.wikipedia.org/wiki/Octal>octal number</a> system, which is mostly used with computers.";
        }
        else if ($n==9){
            $datatosend->fact = "$n is a <a href=https://en.wikipedia.org/wiki/Composite_number>composite number</a>, its proper divisors being 1 and 3. It is 3 times 3 and hence the third square number. Nine is a <a href=https://en.wikipedia.org/wiki/Motzkin_number>Motzkin number</a>.";
        }
        else if ($n==10){
            $datatosend->fact = "$n is a cool number";
        }
        else if ($n==11){
            $datatosend->fact = "$n is a cool number";
        }
        else if ($n==12){
            $datatosend->fact = "$n is a cool number";
        }
        else if ($n==13){
            $datatosend->fact = "$n is a cool number";
        }


        //Undefined numbers will output this
        else{
            $datatosend->fact = "$n doesn't have a specific fact to it.";
        }
    }
    else{
        if($n==0){
            $datatosend->fact = "0 is nothing. It's literally nothing. <br><br>The ancient Greeks had no symbol for zero (μηδέν), and did not use a digit placeholder for it. They seemed unsure about the status of zero as a number. They asked themselves, \"How can nothing be something?\"";
        }
    }
    
    echo json_encode($datatosend);
?>