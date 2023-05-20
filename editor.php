<?php session_start(); ?>
<?php
if(isset($_SESSION['authenticate']))
{
        if($_SESSION['authenticate']!=true)
                die();
}
else
        die();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <h3 class="question">Write your C code here</h3>

	    <div class="editor-container">
      		<div id="editor">// Program to reverse a string</div>
    	    </div>
		
	    <form method='post' action='_editor.php'>
		    <textarea id="hidden_editor" name='heditor'></textarea>
		    <input type='submit' value='submit'>
	    </form>
		    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.5.3/ace.js"></script>

    <script src="./js/main.js"></script>
  </body>
</html>
