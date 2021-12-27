<?php

$marks = 49;

switch ($marks) {
	case $marks >= 80 && $marks <= 100:
		echo "Your Grade Is A+";
		break;

	case $marks >= 70 && $marks <  80:
        echo "Your Grade Is A-";
        break;

    case $marks >= 65 && $marks <  70:
        echo "Your Grade Is A";
        break;

    case $marks >= 60 && $marks <  65:
        echo "Your Grade Is B";
        break;

    case $marks >= 50 && $marks < 60:
        echo "Your Grade Is C";
        break;

    case $marks >= 40 && $marks < 50:
        echo "Your Grade Is D";
        break;

    case $marks >= 33 && $marks < 40:
        echo "Your Grade Is E";
        break;

    case $marks < 33:
        echo "Tui Fail Korchot, rki......!!!!";
        break;
	
	default:
		echo "Put The Correct Number";
		break;
}



 ?>
