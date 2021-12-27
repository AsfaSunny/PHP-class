<?php 


$age = 15;
$Bgender = "male";
$Ggender = "female";


if($Bgender == "male" && $age >= 21) {
        echo "<b>Oh Boy, You are allowed to get married</b>";
    }
    else {
        echo '<span style="color:indianred;text-align:center;font-weight:bold;">Sorry Man, you are not allowed to get married</span>';
    }

echo "<br>";


if ($Ggender == "female" && $age >= 18) {
        echo "<b>Ladies, you are allowed to get married</b>";
    }
    else {
        echo '<span style="color:indianred;text-align:center;font-weight:bold;">Sorry Women, you are not allowed to get married</span>';
    }


?>