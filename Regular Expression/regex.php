<?php


$string = "No body or people cares about you so stop self satisfication in front of other people. 52, 68";

// $exp = preg_match("/PEOPLE/i", $string); //i means case-insasitive

// $exp = preg_match_all("/PEOPLE/i", $string, $array);

// $exp = preg_match_all("/PEOPLE|cares|self/i", $string, $array); //multiple search

// $exp = preg_match_all("/P|l|i|s/i", $string, $array);

// $exp = preg_match_all("/[^uyi]/i", $string, $array);
// $exp = preg_match_all("/[^A-H]/i", $string, $array);

// $exp = preg_match_all("/[A-O]/", $string, $array);

// $exp = preg_match_all("/[a-h]/i", $string, $array);
// $exp = preg_match_all("/[A-H]/i", $string, $array);
// $exp = preg_match_all("/[a-hA-O]/i", $string, $array);

// $exp = preg_match_all("/[2-8]/i", $string, $array);




$file_num = "file1 file2 file3 file5 file# file+ file@ file4 file8 file6";

// $exp = preg_match_all("/file[1-4]/i", $file_num, $array);
// $exp = preg_match_all("/\d/i", $file_num, $array);



$years = "2014 2016 2018 2019 2022";

// $exp = preg_match_all("/201[1-4]/i", $years, $array);




$words = "bat cat mat rat fat";
$words_2 = "internet web browser server hosting network fiber topology";

// $exp = preg_match_all("/[a-c]at/i", $words, $array);
// $exp = preg_match_all("/f[a-z]r/i", $words, $array);



$character = "! @ # $ % ^ & & * % ( ) # _ + ??? /// \\ | ";

// $exp = preg_match_all("/\//i", $character, $array);
// $exp = preg_match_all("/\^/i", $character, $array);
$exp = preg_match_all("/&/i", $character, $array);

if ($exp) {
	echo "Expression got the result";
} else {
	echo "no result found";
}

echo "<pre>";
print_r($array);
echo "<pre>";



//for more go to google and search for regular expression tester
//or simply visit the site: https://regex101.com/
?>