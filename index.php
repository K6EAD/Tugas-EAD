<?php 
	include_once("config.php");
?>

<?php if( !(isset( $_POST['login'] ) ) ) { ?>

<!DOCTYPE html>
<html>
    <head>
        <title>LAKOM KOBA</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
		
    </head>
    
    <body background="tree.jpg">
    
        <header id="head" >
        	<p>LOGIN DAN DAFTAR MEMBER</p>
        	<p><a href="register.php"><span id="register">DAFTAR</span></a></p>
        </header>
        
        <div id="main-wrapper">
        	<div id="login-wrapper">
            	<form method="post" action="">
                	<ul>
                    	<li>
                        	<label for="usn">Username : </label>
                        	<input type="text" maxlength="30" required autofocus name="username" />
                    	</li>
                    
                    	<li>
                        	<label for="passwd">Password : </label>
                        	<input type="password" maxlength="30" required name="password" />
                    	</li>
                    	<li class="buttons">
                        	<input type="submit" name="login" value="MASUK" />
                            <input type="button" name="register" value="DAFTAR" onclick="location.href='register.php'" />
                    	</li>
                    
                	</ul>
            	</form>
                
            </div>
        </div>
    
    </body>
</html>

<?php 
} else {
	$usr = new Users;
	$usr->storeFormValues( $_POST );
	
	if( $usr->userLogin() ) {
		header("Location:home.php");	
	} else {
		echo "PASSWORD/USERNAME ANDA SALAH";	
	}
	
}
?>
