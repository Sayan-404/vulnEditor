<?php
$code = $_POST['uname'];
$first = "sed -i &#39;5i";
$last = "&#39; helloworld.c";
$_command = $first.$code.$last;
$_compile = shell_exec("gcc helloworld.c -o helloworld");
$_return = shell_exec("./helloworld");
$output = shell_exec(html_entity_decode($_command));
echo $output;
echo $_compile;
echo $_return;
