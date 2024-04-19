<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
			<?php
              for($i = 1;$i<=200;$i++)
                                       {

                if($i%2==0)

                 echo "<b><font color=red>". $i . "</font></b>";

                 else

                 echo "<i><font color=blue>". $i . "</font></i>";

                }
                 ?>
		</form>
		

	
    </body>
</html>
