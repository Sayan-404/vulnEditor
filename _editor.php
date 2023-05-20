<?php 
$code = $_POST['heditor'];

function namegen(): string {
    
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';

    for ($i = 0; $i < 6; $i++) {
        $randomIndex = mt_rand(0, 25);
        $randomString .= $letters[$randomIndex];
    }

    return $randomString;
}

$filename = namegen();
#echo $filename.'\n';
$myfile = fopen("tmp/".$filename.'.c',"w");
fwrite($myfile,$code);
fclose($myfile);
$compile = shell_exec("gcc tmp/$filename.c -o tmp/$filename");
$exc = shell_exec("tmp/$filename");
echo $exc;
