<header>
    <h1><a href="#"><?php print(_SITENAME); ?></a></h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sell.php">Sell an item</a></li>
            <?php  
            if (isset($_SESSION["id"])) {
				print('<li><a href="signout.php">Sign-out</a></li>');       
            }
            else {
				print('<li><a href="signin.php">Sign-in</a></li>');
			}
			?>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>            
        </ul>
    </nav>
</header>