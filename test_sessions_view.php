<!DOCTYPE html>
<html>
    <head>
        <title>Session Testing</title>        
    </head>
    <body>
		<?php
		echo date("F j, Y, g:i:s a")."<br>"; //so you can tell the page actually does refresh/reload
        //Is $_SESSION['status'] set?
        $status = $this->session->status ? TRUE : FALSE;
        //Display message depending on $status
        echo  $status ? "You are logged In" : "You are logged Out";
        
		echo form_open('test_sessions/process_submit');
		// button test depends on if 'status' is found in $_SESSION
		$btn_text = $status ? "Log Out" : "Log In";
		echo form_submit('submit', $btn_text);
		echo form_close();
		var_dump($_SESSION); //Show all session data
		?>
    </body>
</html>
