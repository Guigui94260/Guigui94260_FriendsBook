<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="index.php" method="post">
            Name: <input type="text" name="name">
            <input type="submit" name="valid" value="valid">
            <input type="text" name="nameFilter" value="<?php if(empty($_POST['nameFilter']))$nameFilter=NULL;?>">
            <input type="submit" name="filter" value="filter">
        </form>
        <?php
    		$filename = 'friends.txt';

    		$newname = $_POST['name'];
    		$file = fopen( $filename, "a" );
    		if ("$newname" != NULL) {
    			fwrite( $file, "$newname\n" );
    		}

    		$file = fopen( $filename, "r" );
    		$nameFilter = $_POST['nameFilter'];
    		$file2 = fopen( $filename, "r" );
    		while (!feof($file)) {
        		if ("$nameFilter" != NULL){
    			if (strstr(fgets($file),"$nameFilter",false) != NULL){
    				$ligne = fgets($file2)."<br/>";
    				echo $ligne;
    			}

    			else{
    				fgets($file2);
    			}
    		}
    		else {echo fgets($file)."<br/>";}

    		}

    		
		?>
    </body>

</html>

