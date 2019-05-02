<div id="logoTitle">

<?php

$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

?>

<h1>NAVY'S DIAPERS</h1>
</div>
<nav>
<ul>
<li class="<?php if($page=='home'){echo 'active';}?>"><a href="home.php">Home</a></li>
<li class="<?php if($page=='login'){echo 'active';}?>"><a href="login.php">Login</a></li>
<li class="<?php if($page=='about-us'){echo 'active';}?>"><a href="about-us.php">About Us</a></li>
</ul>
</nav>