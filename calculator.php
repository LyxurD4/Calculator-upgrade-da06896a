<?php
echo "Rekenen zuigt, maar daar heb je mij voor neef. Pass me je operatie(+ , -, %)\n";
$a = readline();
if ($a == "*")
    echo "Ik kan geen vermedigvuldigingen", exit;
echo "Sterk neef. Wats je eerste cijfer\n";
$b = readline();

    if (is_numeric($b)) {

        echo "Je tweede getal?\n";
        $c = readline();
            if (is_numeric($c)) {

                if ($a == "+") 
                echo "Je antwoord is : ". ($b + $c);

                if ($a == "-")
                echo "Je antwoord is : ". ($b - $c);

                if ($a == "%")
                echo "Je antwoord is : ". ($b % $c);
                
        } else {
            echo var_export($c, true) . " is NOT numeric", exit("\nFek of grappenmaker");
        }

    } else {
        echo var_export($b, true) . " is NOT numeric", exit("\nGeen numeriek symbool");
    }
?>
