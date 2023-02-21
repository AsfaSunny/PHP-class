<?php 

$Our_file = "myDocs.txt";
// echo readfile("myDocs.txt");
// echo file_exists("myDocs.txt"); //if...else condition can be applied

// copy($Our_file, "newtext.txt");
// rename($Our_file, "mytext.txt");

if (file_exists("fmil")) {
	// unlink($Our_file);
	rmdir("fmil");
} else {
	echo "File Doen't Exist <br>" ;
}

// echo filesize($Our_file); file size 
// echo filetype(); file er type
// unlink("newtext.txt"); //for delete or remove file
// mkdir("myfilefolder"); creating folder

// echo realpath("myDocs.txt");


// print_r(pathinfo($Our_file));

$path = realpath($Our_file);
echo dirname($path);

?>